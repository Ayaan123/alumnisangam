<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:15:01
?>
<?php

/**
 * role actions.
 *
 * @package    sf_sandbox
 * @subpackage role
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class settingsActions extends sfActions
{
  public function executeIndex()
  {
    
  }

  public function executeInvites(){
  	$this->user = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid'));
  }
  
  public function executeAcceptauth(){
	$user = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid'));
  	
	$userrole = new Userrole();
  	$userrole->setRoleId(sfConfig::get('app_role_auth'));
  	$userrole->setUserId($user->getId());
  	$userrole->save();
  	
  	$user->setIsinvited('0');
  	$user->save();
  	$this->setFlash('notice', 'Invitation accepted. You are an Authorizer now.');
  	$this->redirect('/settings/invites');
  }
  
  public function executeRejectauth(){
  	$user = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid'));
  	$user->setIsinvited('0');
  	$user->save();
  	$this->setFlash('notice', 'Invitation denied successfully.');
  	$this->redirect('/settings/invites');
  }
 
  public function executeChangepassword()
  {
  	$oldpass = $this->getRequestParameter('oldpassword');
  	$newpass = $this->getRequestParameter('newpassword');
  	if($oldpass)
  	{
		$user = UserPeer::retrieveByPK($this->getUser()->getAttribute('userid'));  		
  		$salt = md5("I am Indian.");
		if(sha1($salt.$oldpass) == $user->getPassword())
		{
			$user->setPassword($newpass);
			$user->save();
			$this->setFlash('changepassword', 'Password changed successfully.' );
			
	  		$c = new Criteria();
		  	$c->add(PersonalPeer::USER_ID, $user->getId());
		  	$personal = PersonalPeer::doSelectOne($c);
		  			  	
		  	$name = $personal->getFirstname()." ".$personal->getMiddlename()." ".$personal->getLastname();
		  	
		  	$sendermail = sfConfig::get('app_from_mail');
			$sendername = sfConfig::get('app_from_name');
			$to = $personal->getEmail();
			$subject = "Password change request for ITBHU Global Org";
			$body ='
		
Dear '.$name.',

Someone, probably you have changed the password.
If its not you, please contact admin as soon as practical.

Admin,
ITBHU Global
';
			
		  	$mail = myUtility::sendmail($sendermail, $sendername, $sendermail, $sendername, $sendermail, $to, $subject, $body);
			
		}
		else
		{
			$this->setFlash('changepassword', 'Incorrect Old Password' );			
		}
  	}
  }

  public function executeContactsettings(){
  	$userid = $this->getUser()->getAttribute('userid');
  	$c = new Criteria();
  	$c->add(FlagsPeer::USER_ID, $userid);
  	$this->flags = FlagsPeer::doSelectOne($c);
  }
  
  public function executeSubmitcontactsettings(){
  	$userid = $this->getUser()->getAttribute('userid');
  	$mail = $this->getRequestParameter('mail');
  	$newsletter = $this->getRequestParameter('newsletter');
  	
	$c = new Criteria();
	$c->add(FlagsPeer::USER_ID, $userid);
	$flags = FlagsPeer::doSelectOne($c);
  	if(!$flags){
	  	$flags = new Flags();
  	}
   	$flags->setUserId($userid);
	$flags->setMail($mail);
	$flags->setNewsletter($newsletter);
   	$flags->save();
	 $this->setFlash('notice', 'Your preferences have been saved sucessfully');
	 $this->redirect('settings/contactsettings');
  }
}

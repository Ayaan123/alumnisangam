<?php
// auto-generated by sfPropelCrud
// date: 2009/07/17 06:53:33
?>
<?php

/**
 * careerresources actions.
 *
 * @package    sf_sandbox
 * @subpackage careerresources
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class careerresourcesActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('careerresources', 'list');
  }

  public function executeList()
  {
    $this->careerresourcess = CareerresourcesPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->careerresources = CareerresourcesPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->careerresources);
  }

  public function executeCreate()
  {
    $this->careerresources = new Careerresources();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->careerresources = CareerresourcesPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->careerresources);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $careerresources = new Careerresources();
    }
    else
    {
      $careerresources = CareerresourcesPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($careerresources);
    }

    $careerresources->setId($this->getRequestParameter('id'));
    $careerresources->setName($this->getRequestParameter('name'));

    $careerresources->save();

    return $this->redirect('careerresources/show?id='.$careerresources->getId());
  }

  public function executeDelete()
  {
    $careerresources = CareerresourcesPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($careerresources);

    $careerresources->delete();

    return $this->redirect('careerresources/list');
  }
	
  public function executeTranscripts(){
  	
  }
  public function executeJobpostings(){
  	
  }
  public function executeEngineering(){
  	
  }
  public function executeEngineeringindia(){
  	
  }
  public function executeMba(){
  	
  }
  public function executeMbaindia(){
  	
  }
  public function executeCivilservices(){
  	
  }
  
}

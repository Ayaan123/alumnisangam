<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:16:08
?>
<table class="showprofile" >
<tbody>
<!--<tr>
<th>Id: </th>
<td><?php echo $personal->getId() ?></td>
</tr>
<tr>
<th>User: </th>
<td><?php echo $personal->getUserId() ?></td>
</tr>
--><tr>
<!--<th>Image: </th>
--><td>
	<?php if($personal->getImage()): ?>
	<img src="<?php echo $personal->getImage(); ?>" width="100px;" height="100px;">
	<?php else: ?>
	<img src="/uploads/profilepic/userDummy.jpg" width="100px;" height="100px;">
	<?php endif; ?> 
</td>
<!--<th>Visible to: </th>
<td><?php if($personal->getImageflag() == 1): echo "None"; elseif($personal->getImageflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
-->
</tr>
<tr>
<th>Name: </th>
<td><?php echo $personal->getSalutation().' '.$personal->getFirstname().' '.$personal->getMiddlename().' '.$personal->getLastname() ?></td>
</tr>
<tr>
<th>Maidenname: </th>
<td><?php echo $personal->getMaidenname() ?></td>
<th>Visible to: </th>
<td><?php if($personal->getMaidennameflag() == 1): echo "None"; elseif($personal->getMaidennameflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
<tr>
<th>Itbhuname: </th>
<td><?php echo $personal->getItbhuname() ?></td>

<th>Visible to: </th>
<td><?php if($personal->getItbhunameflag() == 1): echo "None"; elseif($personal->getItbhunameflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
<tr>
<th>Gender: </th>
<td><?php echo $personal->getGender() ?></td>

<th>Visible to: </th>
<td><?php if($personal->getGenderflag() == 1): echo "None"; elseif($personal->getGenderflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
<tr>
<th>Dob(yyyy-mm-dd): </th>
<td><?php echo $personal->getDob() ?></td>

<th>Visible to: </th>
<td><?php if($personal->getDobflag() == 1): echo "None"; elseif($personal->getDobflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
<tr>
<th>Marital Status: </th>
<td><?php echo $personal->getMaritalstatus() ?></td>

<th>Visible to: </th>
<td><?php if($personal->getMaritalstatusflag() == 1): echo "None"; elseif($personal->getMaritalstatusflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
<tr>
<th>Email: </th>
<td><?php echo $personal->getEmail() ?></td>

<th>Visible to: </th>
<td><?php if($personal->getEmailflag() == 1): echo "None"; elseif($personal->getEmailflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
<tr>
<th>Website: </th>
<td><?php echo $personal->getWebsite() ?></td>

<th>Visible to: </th>
<td><?php if($personal->getWebsiteflag() == 1): echo "None"; elseif($personal->getWebsiteflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
<tr>
<th>Linkedin: </th>
<td><?php echo $personal->getLinkedin() ?></td>

<th>Visible to: </th>
<td><?php if($personal-> getLinkedinflag() == 1): echo "None"; elseif($personal-> getLinkedinflag() == 2): echo "My Classmates"; else: echo "All"; endif; ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'personal/edit?id='.$personal->getId()) ?>
<!--
&nbsp;<?php echo link_to('list', 'personal/list') ?>
-->
<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:20:06
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $userhobbies->getId() ?></td>
</tr>
<tr>
<th>User: </th>
<td><?php echo $userhobbies->getUserId() ?></td>
</tr>
<tr>
<th>Hobbies: </th>
<td><?php echo $userhobbies->getHobbiesId() ?></td>
</tr>
<tr>
<th>Other: </th>
<td><?php echo $userhobbies->getOther() ?></td>
</tr>
<tr>
<th>Hobbiesflag: </th>
<td><?php echo $userhobbies->getHobbiesflag() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'userhobbies/edit?id='.$userhobbies->getId()) ?>
&nbsp;<?php echo link_to('list', 'userhobbies/list') ?>

<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/02/10 08:17:25
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $degree->getId() ?></td>
</tr>
<tr>
<th>Name: </th>
<td><?php echo $degree->getName() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'degree/edit?id='.$degree->getId()) ?>
&nbsp;<?php echo link_to('list', 'degree/list') ?>

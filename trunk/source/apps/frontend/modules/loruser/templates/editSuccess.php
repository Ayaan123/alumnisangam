<?php include_component('home','leftmenu'); ?>
<?php
// auto-generated by sfPropelCrud
// date: 2009/03/16 02:49:43
?>
<?php use_helper('Object') ?>

<?php echo form_tag('loruser/update') ?>

<?php echo object_input_hidden_tag($loruser, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Lorvalues:</th>
  <td><?php echo object_select_tag($loruser, 'getLorvaluesId', array (
  'related_class' => 'Lorvalues',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>User:</th>
  <td><?php echo object_select_tag($loruser, 'getUserId', array (
  'related_class' => 'User',
  'include_blank' => true,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($loruser->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'loruser/delete?id='.$loruser->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'loruser/show?id='.$loruser->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'loruser/list') ?>
<?php endif; ?>
</form>

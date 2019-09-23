<?php
/* @var $this MainmenuController */
/* @var $data Mainmenu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_main')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_main), array('view', 'id'=>$data->id_main)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_menu')); ?>:</b>
	<?php echo CHtml::encode($data->nama_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aktif')); ?>:</b>
	<?php echo CHtml::encode($data->aktif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usermenu')); ?>:</b>
	<?php echo CHtml::encode($data->usermenu); ?>
	<br />


</div>
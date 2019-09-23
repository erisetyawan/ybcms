<?php
/* @var $this MonitoringKabController */
/* @var $data MonitoringKab */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_MONITORING')); ?>:</b>
	<?php echo CHtml::encode($data->ID_MONITORING); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KODE_KABUPATEN')); ?>:</b>
	<?php echo CHtml::encode($data->KODE_KABUPATEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TARGET')); ?>:</b>
	<?php echo CHtml::encode($data->TARGET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REALISASI')); ?>:</b>
	<?php echo CHtml::encode($data->REALISASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGL_UPDATE')); ?>:</b>
	<?php echo CHtml::encode($data->TGL_UPDATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PENANGGUNG_JAWAB')); ?>:</b>
	<?php echo CHtml::encode($data->PENANGGUNG_JAWAB); ?>
	<br />


</div>
<?php
/* @var $this MonitoringController */
/* @var $data Monitoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAHUN')); ?>:</b>
	<?php echo CHtml::encode($data->TAHUN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEM_TRIW')); ?>:</b>
	<?php echo CHtml::encode($data->SEM_TRIW); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENIS')); ?>:</b>
	<?php echo CHtml::encode($data->JENIS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGL_MULAI')); ?>:</b>
	<?php echo CHtml::encode($data->TGL_MULAI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGL_SELESAI')); ?>:</b>
	<?php echo CHtml::encode($data->TGL_SELESAI); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('BIDANG_BAGIAN')); ?>:</b>
	<?php echo CHtml::encode($data->BIDANG_BAGIAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEKSI_SUBBAG')); ?>:</b>
	<?php echo CHtml::encode($data->SEKSI_SUBBAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PENANGGUNG_JAWAB')); ?>:</b>
	<?php echo CHtml::encode($data->PENANGGUNG_JAWAB); ?>
	<br />

	*/ ?>

</div>
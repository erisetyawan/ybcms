<?php
/* @var $this PegawaiController */
/* @var $data Pegawai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP_LAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NIP_LAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP_BARU')); ?>:</b>
	<?php echo CHtml::encode($data->NIP_BARU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEMPAT_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TEMPAT_LAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL_LAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL_LAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('UNIT_ESELON3')); ?>:</b>
	<?php echo CHtml::encode($data->UNIT_ESELON3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UNIT_ESELON4')); ?>:</b>
	<?php echo CHtml::encode($data->UNIT_ESELON4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JABATAN')); ?>:</b>
	<?php echo CHtml::encode($data->JABATAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	*/ ?>

</div>
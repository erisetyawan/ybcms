<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIP_LAMA'); ?>
		<?php echo $form->textField($model,'NIP_LAMA',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIP_BARU'); ?>
		<?php echo $form->textField($model,'NIP_BARU',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEMPAT_LAHIR'); ?>
		<?php echo $form->textField($model,'TEMPAT_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->textField($model,'TANGGAL_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UNIT_ESELON3'); ?>
		<?php echo $form->textField($model,'UNIT_ESELON3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UNIT_ESELON4'); ?>
		<?php echo $form->textField($model,'UNIT_ESELON4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JABATAN'); ?>
		<?php echo $form->textField($model,'JABATAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
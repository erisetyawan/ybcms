<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pegawai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NIP_LAMA'); ?>
		<?php echo $form->textField($model,'NIP_LAMA',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'NIP_LAMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIP_BARU'); ?>
		<?php echo $form->textField($model,'NIP_BARU',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'NIP_BARU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NAMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TEMPAT_LAHIR'); ?>
		<?php echo $form->textField($model,'TEMPAT_LAHIR'); ?>
		<?php echo $form->error($model,'TEMPAT_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->textField($model,'TANGGAL_LAHIR'); ?>
		<?php echo $form->error($model,'TANGGAL_LAHIR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ALAMAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UNIT_ESELON3'); ?>
		<?php echo $form->textField($model,'UNIT_ESELON3'); ?>
		<?php echo $form->error($model,'UNIT_ESELON3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UNIT_ESELON4'); ?>
		<?php echo $form->textField($model,'UNIT_ESELON4'); ?>
		<?php echo $form->error($model,'UNIT_ESELON4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JABATAN'); ?>
		<?php echo $form->textField($model,'JABATAN'); ?>
		<?php echo $form->error($model,'JABATAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'USERNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
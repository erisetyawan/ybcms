<?php
/* @var $this MonitoringKabController */
/* @var $model MonitoringKab */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'monitoring-kab-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_MONITORING'); ?>
		<?php echo $form->textField($model,'ID_MONITORING'); ?>
		<?php echo $form->error($model,'ID_MONITORING'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KODE_KABUPATEN'); ?>
		<?php echo $form->textField($model,'KODE_KABUPATEN'); ?>
		<?php echo $form->error($model,'KODE_KABUPATEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TARGET'); ?>
		<?php echo $form->textField($model,'TARGET'); ?>
		<?php echo $form->error($model,'TARGET'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REALISASI'); ?>
		<?php echo $form->textField($model,'REALISASI'); ?>
		<?php echo $form->error($model,'REALISASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TGL_UPDATE'); ?>
		<?php echo $form->textField($model,'TGL_UPDATE'); ?>
		<?php echo $form->error($model,'TGL_UPDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PENANGGUNG_JAWAB'); ?>
		<?php echo $form->textField($model,'PENANGGUNG_JAWAB',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'PENANGGUNG_JAWAB'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
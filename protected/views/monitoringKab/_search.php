<?php
/* @var $this MonitoringKabController */
/* @var $model MonitoringKab */
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
		<?php echo $form->label($model,'ID_MONITORING'); ?>
		<?php echo $form->textField($model,'ID_MONITORING'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KODE_KABUPATEN'); ?>
		<?php echo $form->textField($model,'KODE_KABUPATEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TARGET'); ?>
		<?php echo $form->textField($model,'TARGET'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REALISASI'); ?>
		<?php echo $form->textField($model,'REALISASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_UPDATE'); ?>
		<?php echo $form->textField($model,'TGL_UPDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PENANGGUNG_JAWAB'); ?>
		<?php echo $form->textField($model,'PENANGGUNG_JAWAB',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
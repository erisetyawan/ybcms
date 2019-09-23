<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */
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
		<?php echo $form->label($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAHUN'); ?>
		<?php echo $form->textField($model,'TAHUN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEM_TRIW'); ?>
		<?php echo $form->textField($model,'SEM_TRIW'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JENIS'); ?>
		<?php echo $form->textField($model,'JENIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_MULAI'); ?>
		<?php echo $form->textField($model,'TGL_MULAI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_SELESAI'); ?>
		<?php echo $form->textField($model,'TGL_SELESAI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BIDANG_BAGIAN'); ?>
		<?php echo $form->textField($model,'BIDANG_BAGIAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEKSI_SUBBAG'); ?>
		<?php echo $form->textField($model,'SEKSI_SUBBAG'); ?>
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
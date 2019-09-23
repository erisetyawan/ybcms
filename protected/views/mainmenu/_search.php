<?php
/* @var $this MainmenuController */
/* @var $model Mainmenu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_main'); ?>
		<?php echo $form->textField($model,'id_main'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_menu'); ?>
		<?php echo $form->textField($model,'nama_menu',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aktif'); ?>
		<?php echo $form->textField($model,'aktif',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usermenu'); ?>
		<?php echo $form->textField($model,'usermenu',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
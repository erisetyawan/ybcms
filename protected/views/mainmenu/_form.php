<?php
/* @var $this MainmenuController */
/* @var $model Mainmenu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mainmenu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_menu'); ?>
		<?php echo $form->textField($model,'nama_menu',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_menu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aktif'); ?>
		<?php echo $form->textField($model,'aktif',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usermenu'); ?>
		<?php echo $form->textField($model,'usermenu',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'usermenu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
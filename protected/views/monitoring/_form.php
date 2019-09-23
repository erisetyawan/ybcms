<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */
/* @var $form CActiveForm */
$empty=array();
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'monitoring-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NAMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAHUN'); ?>
		<?php echo $form->textField($model,'TAHUN'); ?>
		<?php echo $form->error($model,'TAHUN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEM_TRIW'); ?>
		<?php echo $form->textField($model,'SEM_TRIW'); ?>
		<?php echo $form->error($model,'SEM_TRIW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelSatker,'JENIS'); ?>
		<?php echo $form->dropDownList($modelSatker, 'ID', CHtml::listData($dataSatker, 'ID', 'SATKER'),array('id'=>'ID','empty'=>'--------Cakupan Kegiatan--------'));   ?>
		<?php echo $form->error($modelSatker,'JENIS'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'TGL_MULAI'); ?>
		<?php echo $form->dateField($model,'TGL_MULAI'); ?>
		<?php echo $form->error($model,'TGL_MULAI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TGL_SELESAI'); ?>
		<?php echo $form->dateField($model,'TGL_SELESAI'); ?>
		<?php echo $form->error($model,'TGL_SELESAI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIDANG_BAGIAN'); ?>
		<?php echo $form->dropDownList($model, 'BIDANG_BAGIAN', CHtml::listData($dataEselon3, 'ID', 'NAMA_UNIT'),array('id'=>'ID','empty'=>'--------Bidang/Bagian--------','onchange' => 'ubahEselon4($(this))'));   ?>
		<?php echo $form->error($model,'BIDANG_BAGIAN'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'SEKSI_SUBBAG'); ?>
		<?php echo CHtml::activeDropdownlist($model,"SEKSI_SUBBAG",CHtml::listData($empty, 'ID', 'NAMA_UNIT'),array('empty'=>'--------Seksi/SubBagian--------'));   ?>
		<?php echo $form->error($model,'SEKSI_SUBBAG'); ?>
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

<script>
	function ubahEselon4(objek){
		var eselon3 = objek.val();
		$.ajax({
			type:"POST",
			dataType:"json",
			url:"<?php echo Yii::app()->createUrl('Monitoring/ubahEselon4'); ?>",
			data:{
				"eselon3":eselon3,
			},
			success:function(data){
				$("#Monitoring_SEKSI_SUBBAG").html(data.satu);
			},			
		});
	}
</script>
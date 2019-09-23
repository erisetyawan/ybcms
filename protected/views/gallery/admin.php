<div class="form">

<?php $form=$this->beginWidget('CActiveForm'); ?>
	<h1>Manage Gallery</h1>
	<div class="row">
		Silahkan tekan tombol Select Untuk Mengatur Gallery <br>
		
		<?php $this->widget('ext.finder.EImageFinder',array('fieldName'=>'my_field'));	?>		
	</div>
		
<?php $this->endWidget(); ?>

</div><!-- form -->
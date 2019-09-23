<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */

$this->breadcrumbs=array(
	'Monitorings'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
	array('label'=>'Update Monitoring', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Monitoring', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Monitoring', 'url'=>array('admin')),
);
?>

<h1>View Monitoring #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NAMA',
		'TAHUN',
		'SEM_TRIW',
		'JENIS',
		'TGL_MULAI',
		'TGL_SELESAI',
		'BIDANG_BAGIAN',
		'SEKSI_SUBBAG',
		'PENANGGUNG_JAWAB',
	),
)); ?>

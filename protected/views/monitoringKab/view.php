<?php
/* @var $this MonitoringKabController */
/* @var $model MonitoringKab */

$this->breadcrumbs=array(
	'Monitoring Kabs'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List MonitoringKab', 'url'=>array('index')),
	array('label'=>'Create MonitoringKab', 'url'=>array('create')),
	array('label'=>'Update MonitoringKab', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete MonitoringKab', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MonitoringKab', 'url'=>array('admin')),
);
?>

<h1>View MonitoringKab #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ID_MONITORING',
		'KODE_KABUPATEN',
		'TARGET',
		'REALISASI',
		'TGL_UPDATE',
		'PENANGGUNG_JAWAB',
	),
)); ?>

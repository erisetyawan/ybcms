<?php
/* @var $this MonitoringKabController */
/* @var $model MonitoringKab */

$this->breadcrumbs=array(
	'Monitoring Kabs'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MonitoringKab', 'url'=>array('index')),
	array('label'=>'Create MonitoringKab', 'url'=>array('create')),
	array('label'=>'View MonitoringKab', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage MonitoringKab', 'url'=>array('admin')),
);
?>

<h1>Update MonitoringKab <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
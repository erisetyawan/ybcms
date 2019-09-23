<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */

$this->breadcrumbs=array(
	'Monitorings'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
	array('label'=>'View Monitoring', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Monitoring', 'url'=>array('admin')),
);
?>

<h1>Update Monitoring <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
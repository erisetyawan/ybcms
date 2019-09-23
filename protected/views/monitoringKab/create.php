<?php
/* @var $this MonitoringKabController */
/* @var $model MonitoringKab */

$this->breadcrumbs=array(
	'Monitoring Kabs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MonitoringKab', 'url'=>array('index')),
	array('label'=>'Manage MonitoringKab', 'url'=>array('admin')),
);
?>

<h1>Create MonitoringKab</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
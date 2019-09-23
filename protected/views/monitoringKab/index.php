<?php
/* @var $this MonitoringKabController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Monitoring Kabs',
);

$this->menu=array(
	array('label'=>'Create MonitoringKab', 'url'=>array('create')),
	array('label'=>'Manage MonitoringKab', 'url'=>array('admin')),
);
?>

<h1>Monitoring Kabs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

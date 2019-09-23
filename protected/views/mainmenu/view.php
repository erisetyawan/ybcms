<?php
/* @var $this MainmenuController */
/* @var $model Mainmenu */

$this->breadcrumbs=array(
	'Mainmenus'=>array('index'),
	$model->id_main,
);

$this->menu=array(
	array('label'=>'List Mainmenu', 'url'=>array('index')),
	array('label'=>'Create Mainmenu', 'url'=>array('create')),
	array('label'=>'Update Mainmenu', 'url'=>array('update', 'id'=>$model->id_main)),
	array('label'=>'Delete Mainmenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_main),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mainmenu', 'url'=>array('admin')),
);
?>

<h1>View Mainmenu #<?php echo $model->id_main; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_main',
		'nama_menu',
		'link',
		'aktif',
		'usermenu',
	),
)); ?>

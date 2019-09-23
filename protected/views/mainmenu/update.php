<?php
/* @var $this MainmenuController */
/* @var $model Mainmenu */

$this->breadcrumbs=array(
	'Mainmenus'=>array('index'),
	$model->id_main=>array('view','id'=>$model->id_main),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mainmenu', 'url'=>array('index')),
	array('label'=>'Create Mainmenu', 'url'=>array('create')),
	array('label'=>'View Mainmenu', 'url'=>array('view', 'id'=>$model->id_main)),
	array('label'=>'Manage Mainmenu', 'url'=>array('admin')),
);
?>

<h1>Update Mainmenu <?php echo $model->id_main; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
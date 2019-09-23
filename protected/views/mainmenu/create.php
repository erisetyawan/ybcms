<?php
/* @var $this MainmenuController */
/* @var $model Mainmenu */

$this->breadcrumbs=array(
	'Mainmenus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mainmenu', 'url'=>array('index')),
	array('label'=>'Manage Mainmenu', 'url'=>array('admin')),
);
?>

<h1>Create Mainmenu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
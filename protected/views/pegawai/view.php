<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'Update Pegawai', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>View Pegawai #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NIP_LAMA',
		'NIP_BARU',
		'NAMA',
		'TEMPAT_LAHIR',
		'TANGGAL_LAHIR',
		'ALAMAT',
		'UNIT_ESELON3',
		'UNIT_ESELON4',
		'JABATAN',
		'USERNAME',
		'PASSWORD',
	),
)); ?>

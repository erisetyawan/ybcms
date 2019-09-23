<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php if(!empty($_GET['tag'])): ?>
<div class="title" style="border-bottom: 3px solid #dfdfdf">
<h2>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h2>
</div>
<?php endif; ?>

<?php if(empty($_GET['tag'])): ?>
<div class="title" style="border-bottom: 3px solid #dfdfdf; font-family: vernada;">
<h2>New Articles</h2>
</div>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>

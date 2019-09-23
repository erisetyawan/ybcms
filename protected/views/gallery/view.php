<?php
$this->pageTitle=Yii::app()->name . ' - Gallery';

?>
<h1>Album <?php echo $folder?></h1>
<?php
$dataProvider= CFileHelper::findFiles(Yii::app()->basePath."\..\uploads\images\\".$folder);

$i=0;
$files;
foreach($dataProvider as $data){		
	$token = explode("..",$data);
	$files[$i]=array(
                    'image_url' => "\ybcms".$token[1],
                    'thumb_url' => "\ybcms".$token[1],
                );	
	$i++;
}
$this->widget('ext.adGallery.AdGallery',
	array(
		'imageList' => $files,
	)
);
?>
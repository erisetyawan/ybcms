<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php if(empty($_GET['tag'])): ?>
<div class="title" style="border-bottom: 3px solid #dfdfdf; font-family: vernada;">
<h1>Daftar Album</h1>
</div>
<?php endif; ?>

<?php
	if(count($dataProvider)!=0){
		$i=0;
		$files;
		foreach($dataProvider as $data){		
			$token = explode("\\",$data);
			$j=0;
			$isi="";
			$input=false;
			foreach($token as $part){
				if($j==count($token)-1)break;
				if($input==true){
					if($isi=="") $isi=$token[$j];
					else $isi=$isi."\\".$token[$j];
				}
				if($token[$j]=="images")$input=true;				
				$j++;
			}
			$files[$i]=$isi;
			//echo $files[$i];			
			$i++;
		}
		$folders = array_unique($files);
		
		foreach($folders as $folder){
			?><li><?php echo CHtml::link($folder,array('gallery/view','folder'=>$folder)); ?></li><?php
		}
	}
	else echo "Tidak Ditemukan Album/Foto pada Galeri";
?>

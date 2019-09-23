<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/nivo-slider.css" type="text/css" media="screen" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
	<a class="brand" href="index">
			<img src="/ybcms/images/bps.png" width="55" height="55">  
			BPS PROVINSI PAPUA
	</a>
<?php 
	$temp=Mainmenu::model()->findAllByAttributes(
			array(),
			$condition  = 'aktif = :aktif',
			$params     = array(
                ':aktif' => 'Y',
			)
		);
	
	$items=array();
	foreach ($temp as $list){
		$isi = array();
		
		$isi['label']=$list->nama_menu;
		if($list->nama_menu=='Logout'){
			$isi['label']='Logout ('.Yii::app()->user->name.')';	
			$isi['visible']=!Yii::app()->user->isGuest;
		}
		if($list->nama_menu=='Galeri'){
			$isi['visible']=!Yii::app()->user->isGuest;
		}
		if($list->nama_menu=='Login'){
			$isi['visible']=Yii::app()->user->isGuest;
		}
		
		$isi['url']=array($list->link);
		if(strpos($list->link,';') !== false){
			$pos = strpos($list->link, ';');
			$isi['url']=array(substr($list->link, 0, $pos), 'view'=>substr($list->link, ($pos+1)));
		}
		
		if($list->usermenu == 'Y') $isi['visible']=!Yii::app()->user->isGuest;
		
		$items[] = $isi;
	}
	
	$this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
			//'items'=>$items,
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Monitoring', 'url'=>'#','itemOptions'=>array('id'=>'nama','class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
					'items'=>array(
						array('label'=>'Tambah Monitoring', 'url'=>array('monitoring/create'),'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Daftar Monitoring', 'url'=>array('monitoring/admin'),'visible'=>!Yii::app()->user->isGuest),	
					),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Galeri', 'url'=>array('/gallery/index')),
                array('label'=>'Tentang Kami', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); 

?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

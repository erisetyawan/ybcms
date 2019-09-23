<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
            
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="index">
			<img src="/ybcms/images/bps.png" width="55" height="55">  
			BPS PROVINSI PAPUA
		</a>
          
          <div class="nav-collapse">
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
				
				$this->widget('zii.widgets.CMenu',array(
						'htmlOptions'=>array('class'=>'pull-right nav'),
						'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
						'itemCssClass'=>'item-test',
						'encodeLabel'=>false,
						'items'=>$items,
					)); ?>
    	</div>
    </div>
	</div>
</div>

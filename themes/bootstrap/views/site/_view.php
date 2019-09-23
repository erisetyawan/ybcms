<?php 
	$ada = $data->image;
	$image = "/ybcms/kcfinder/upload/files/index.jpg\" style=\"height:100px; width:100px";
	
	if($ada == 1){
		$temp1 = stristr($data->content,"/ybcms/kcfinder/upload/files/");
		$temp2 = stristr($data->content,"jpg\" style");
		$temp3 = stristr($data->content,"png\" style");
		$image = str_replace($temp2,"jpg\" style=\"height:100px; width:100px",$temp1);
		$count = substr_count($image,"height:100px; width:100px");
		if($count==0){
			$image = str_replace($temp3,"png\" style=\"height:100px; width:100px",$temp1);
		}
		//echo $image;		
	}
?><div class="post">
	<div class="post-image">
		<div class="image">
			<img alt="" src=  
				<?php
					$gambar = str_replace("\"","",$image);
					echo $gambar;
				?> 
			/>
		</div>
	</div>
	
	<div class="post-content">
		<div class="title">
			<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
		</div>
		<div class="author">
			posted by <?php echo $data->author->NAMA . ' on ' . date('F j, Y',$data->create_time); ?>
		</div>
		<div class="content">
			<?php
				$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
				
				//echo $data->content;
					$this->widget('ext.XReadMore.XReadMore', array(
						 'showLink'=>true,
						 'model'=>$data,
						 'attribute'=>'content',
						 'maxChar'=>100,
					));
				$this->endWidget();
			?>
		</div>
		<div class="nav">
			<b>Tags:</b>
			<?php echo implode(', ', $data->tagLinks); ?>
			<br/>
			<?php echo CHtml::link('Permalink', $data->url); ?> |
			<?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> |
			Last updated on <?php echo date('F j, Y',$data->update_time); ?>
		</div>
		<br>
	</div>
</div>

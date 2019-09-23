<?php

Yii::import('zii.widgets.CPortlet');

class UserMenu extends CPortlet
{
	public function init()
	{
		$this->title=CHtml::encode(Yii::app()->user->name);
		parent::init();
	}

	protected function renderContent()
	{
		$user = Yii::app()->user->getName();
		if($user == "admin")$this->render('adminMenu');
		else $this->render('userMenu');
	}
}
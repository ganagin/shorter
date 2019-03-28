<?php

namespace app\models;

use yii\base\Model;

class LinkForm extends Model
{
	public $long;

	public function rules()
	{
		return [
            [['long'], 'required'],
		];
	}
}


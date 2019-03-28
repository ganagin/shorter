<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Link;
use app\models\LinkForm;

class LinkController extends Controller
{
	public function actionCreate()
	{
		$model = new LinkForm();

		if ($model->load(Yii::$app->request->post()) && $model->validate()) {

			$link = new Link();
			$link->long = $model->long;
			$link->short = '';
			$link->save();

			$short = $link->id . rand(0,999999999999);
			$short = crc32($short);
			$short = dechex($short);

			$link->short = $short;
			$link->save();

			return $this->render('success', ['link' => $link]);

		} else {
		
			return $this->render('create', ['model' => $model]);

		}

	}

	public function actionGo($short)
	{
		$link = Link::find()
			->where(['short' => $short])
			->one();

		if (!$link) {
			throw new \Exception('Link not found');
		}

		Yii::$app->response->redirect($link->long);
	}
}


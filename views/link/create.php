<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<p>Create link:</p>

<?php $form = ActiveForm::begin() ?>
	<?php echo $form->field($model, 'long') ?>
	<div class="form-group">
		<?php echo Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
	</div>
<?php ActiveForm::end() ?>


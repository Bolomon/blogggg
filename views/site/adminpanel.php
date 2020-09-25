<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\PostForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$form = ActiveForm::begin();

echo $form->field($model, 'title')->textInput();
echo $form->field($model, 'text')->textInput();
echo $form->field($model, 'img')->fileInput();

echo Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']);

ActiveForm::end();

?>
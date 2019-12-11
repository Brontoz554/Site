<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


$this->title = 'Регистрация';
$this->params['breadcrumbs']['12'] = $this->title;

?>
<div class="container col-8">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин'); ?>
    <?= $form->field($model, 'password')->textInput()->label('Пароль')->passwordInput(); ?>
    <?= $form->field($model, 'full_name')->textInput()->label('ФИО'); ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Registration', ['class' => 'btn btn-primary', 'name' => 'registration-button']) ?>
        </div>
    </div>
    <?php
    ActiveForm::end(); ?>
</div>


<?php
use yii\widgets\ActiveForm;
?>
<div class="container product-index">
    <?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'subject')->textInput() ?>
    <?= $form->field($model, 'content')->textarea() ?>
    <button>Загрузить</button>
    <?php ActiveForm::end() ?>
</div>

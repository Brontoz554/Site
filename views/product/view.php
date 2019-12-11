<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->id;

\yii\web\YiiAsset::register($this);
?>
<div class="site-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменение данных', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'count',
            'subject:ntext',
            'information:ntext',
            'price',
        ],
    ]) ?>

</div>

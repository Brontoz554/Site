<?php

/* @var $this yii\web\View */
$i = 0;
$this->title = 'КупиБилет.ru';

use yii\helpers\Html;
use yii\widgets\LinkPager; ?>

<div class="fon">
    <span class="buy_ticket">
        She stared through the window at the stars.
   </span>
</div>
<div class="site-index container content">

    <div class="body-content container">
        <h1>Концерты</h1>
        <div class="fix">
            <?php foreach ($posts as $value) {
                ?>
                <div class="container card">
                    <h3><?= $value->subject ?></h3>

                    <?= $value->information ?>
                    <br>
                    <?= 'Цена ' . $value->price . 'руб.' ?>
                    <br>
                    <?= 'Количество мест ' . $value->count ?>
                    <br>
                    <p>
                        <?= Html::a('Купить', ['create', ['id' => $value->id]], ['class' => 'btn btn-dark']) ?>
                    </p>
                </div>
                <?php
            } ?>
        </div>
    </div>
</div>

<div class="top_image"></div>
<div class="body-content site-index container">

    <h1>Галерея</h1>
    <?php

    use yii\helpers\Html;

    foreach ($gallery as $card) { ?>
        <div class="GalleryCard" style="background: url(<?= "../" . $card->img ?>)">
            <?= Html::a('Подробнее', ['create', ['id' => $card->id]], ['class' => 'btn-more']) ?>
        </div>
    <?php } ?>

</div>

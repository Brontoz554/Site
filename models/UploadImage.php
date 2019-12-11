<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadImage extends Model
{

    public $image;
    public $content;
    public $subject;
    public $date;

    public function rules()
    {
        return [
            [['image'], 'file', 'extensions' => 'jpg'],
            [['content', 'subject', 'image'], 'required'],
            [['content', 'subject', 'date'], 'string'],
        ];
    }

    public function NewGallery($model)
    {
        $randomString = md5(time());
        $this->image->saveAs("images/" . $randomString . "." . $this->image->extension);
        $gallery = new Gallery();
        $gallery->subject = $model->subject;
        $gallery->content = $model->content;
        $gallery->img = "images/" . $randomString . "." . $this->image->extension;
        $gallery->save();

    }

    public function attributeLabels()
    {
        return [
            'image' => 'Изображение',
            'content' => 'Контент',
            'subject' => 'Заголовок',
        ];
    }

}
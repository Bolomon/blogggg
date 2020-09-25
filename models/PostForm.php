<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class PostForm extends ActiveRecord {
    public $img;



    public static function tableName()
    {
        return 'post';
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок поста',
            'text' => 'Содержание поста',
            'img' => 'Сюда картиночку брооо))))',
        ];
    }


    public function rules()
    {
        return[
            [['title', 'text'], 'required'],
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],

        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->img->saveAs('uploads/' . $this->img->baseName . '.' . $this->img->extension);
            return true;
        } else {
            return false;
        }
    }
}
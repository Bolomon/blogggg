<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';



foreach ($posts as $post){
    echo '<br>';
    echo $post->title;
    echo $post->text;
    echo '<img src="'.$post->img.'">';


}
?>


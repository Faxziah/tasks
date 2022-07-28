<?php

// Вставьте путь или url картинки 
$path = dirname(__FILE__) . "/images/image2.jpg";

// Получить изображение
function getImage($path)
{
    $image = imagecreatefromjpeg ($path);
    header('Content-Type: image/jpeg');
    imagejpeg($image);
    imagedestroy($image);
}

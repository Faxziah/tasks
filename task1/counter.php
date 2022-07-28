<?php

require ('getImage.php');

set_error_handler(function () {
    throw new ErrorException("Произошла ошибка. Такой картинки не существует");
}, 2);

function counter($path) {
    try {
        // Проверка существования файла картинки и является ли изображением
        if (exif_imagetype($path)) {
            // получение названия изображения
            $path = pathinfo($path, PATHINFO_FILENAME);

            // путь для создания/редактирования файла счетчика
            $file = "counterOutputs/" . $path . ".txt";

            // Если файл счетчика не существует или пустой
            if (!file_exists($file) || filesize($file) == 0) { 
                $newfile = fopen($file,"w+");
                
                // установить значение счетчика = 1
                $counterResult = 1;
                fwrite($newfile, $counterResult);
                fclose($newfile);
            } else {

                // Взять значение счетчика в файле
                $newfile = fopen($file,"r");

                // Проверка на тип данных integer в файле счетчика
                $counterResult = (integer) fread($newfile, filesize($file)); 
                fclose($newfile);

                $newfile = fopen($file,"w+");
                
                // Увеличить значение счетчика на 1 и записать
                $counterResult++;
                fwrite($newfile, $counterResult);
                fclose($newfile);
            }
            return $counterResult;
        }
    } catch (ErrorException $e) {
        echo $e->getMessage();
        return false;
    }
}

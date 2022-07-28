<?php

// Исключение при делении на 0
set_error_handler(function () {
    throw new ErrorException("Ложное математическое действие");
});
  
calculate($_POST['number1'], $_POST['number2'], $_POST['operation']);

function calculate($number1, $number2, $operation)
{
    try {
        if (!($number1 === "") && !($number2 === "")) {
        switch ($operation) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            case '/':
                $result = $number1 / $number2;
                break;
        }
            $res = $number1 . ' ' . $operation . ' ' . $number2 . ' = ';
            echo $res . $result;

        } else {
        throw new ErrorException("Не переданы аргумент(ы)");
        }
    } catch (ErrorException $e) {
            echo $e->getMessage();
            return false;
        }
}

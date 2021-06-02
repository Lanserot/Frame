<?php


set_error_handler("myErrorHandler");
set_exception_handler('exception_handler');


/**
 * Обработчика ошибок и записи логов
 */
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        return false;
    }

    $errstr = htmlspecialchars($errstr);

    switch ($errno) {
        case E_USER_ERROR:
            echo "<div class='err-hand'><b>Пользовательская ОШИБКА</b> [$errno] $errstr<br />\n";
            echo "  Фатальная ошибка в строке $errline файла $errfile";
            echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
            echo "Завершение работы...</div>\n";
            exit(1);

        case E_USER_WARNING:
            echo "<div class='err-hand'><b>Пользовательское ПРЕДУПРЕЖДЕНИЕ</b> [$errno] $errstr <br> стр : $errfile <br> линия : $errline<br /></div>\n";
            break;

        case E_USER_NOTICE:
            echo "<div class='err-hand'><b>Пользовательское УВЕДОМЛЕНИЕ</b> [$errno] $errstr <br> стр : $errfile <br> линия : $errline<br /></div>\n";
            break;
        case E_COMPILE_ERROR:
            echo "<div class='err-hand'><b>Пользовательское УВЕДОМЛЕНИ Е</b> [$errno] $errstr <br> стр : $errfile <br> линия : $errline<br /></div>\n";
            break;
        default:
            echo "<div class='err-hand'>Неизвестная ошибка: [$errno] $errstr <br> стр : $errfile <br> линия : $errline<br /></div>\n";
            break;
    }

    file_put_contents('logs.txt', 'Тип ошибки - ' . $errno . ' / ' . $errstr . ' / ' . 'место ' . $errfile .  ' / ' . $errline . ' линия'. PHP_EOL, FILE_APPEND);

    return true;
}

/**
 * Обработчик Исключений и записи логов
 */
function exception_handler($exception)
{
    file_put_contents('logs.txt', "Неперехваченное исключение: " . $exception->getMessage() . PHP_EOL, FILE_APPEND);

    echo "
    <div class='err-hand'>Неперехваченное исключение: " . $exception->getMessage() . " </div>
    ";

}

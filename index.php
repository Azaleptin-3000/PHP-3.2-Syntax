<?php
// Объявляем переменные с разными типами данных
$stringVar = "Привет, мир!"; // строка
$numberVar = 42; // число
$boolVar = true; // булево значение

// Создаем константу с помощью define()
define("SITE_NAME", "MyWebsite");

// Выводим значения переменных с помощью echo и print
echo "Строка: " . $stringVar . "<br>";  // Используем HTML-тег <br> для переноса строки
echo "Число: " . $numberVar . "<br>";
echo "Булево значение: " . ($boolVar ? 'true' : 'false') . "<br>";  // Преобразуем булево значение в текст

// Выводим значение константы
print "Имя сайта: " . SITE_NAME . "<br>";
?>

<?php
// Создаем переменную, содержащую строковое представление числа
$stringNumber = "12345";

// Преобразуем строку в число
$number = (int)$stringNumber; // Преобразование в целое число
// или, для преобразования в число с плавающей запятой:
// $number = (float)$stringNumber;

// Выводим результат преобразования
echo "Преобразованное число: " . $number . "<br>";

// Выводим тип переменной
echo "Тип переменной: " . gettype($number) . "<br>";
?>

<?php
// Создаем несколько переменных с числами
$num1 = 10;
$num2 = 5;
$num3 = 8;

// Выполняем арифметические операции
$sum = $num1 + $num2;          // Сложение
$difference = $num1 - $num2;   // Вычитание
$product = $num1 * $num2;      // Умножение
$quotient = $num1 / $num2;     // Деление

// Выводим результаты арифметических операций
echo "Сложение: $num1 + $num2 = $sum <br>";
echo "Вычитание: $num1 - $num2 = $difference <br>";
echo "Умножение: $num1 * $num2 = $product <br>";
echo "Деление: $num1 / $num2 = $quotient <br>";

// Используем операторы сравнения
$isEqual = $num1 == $num2;     // Проверка на равенство
$isGreater = $num1 > $num3;    // Проверка, больше ли
$isLess = $num2 < $num3;       // Проверка, меньше ли

// Выводим результаты сравнений
echo "num1 равно num2? " . ($isEqual ? 'Да' : 'Нет') . "<br>";
echo "num1 больше num3? " . ($isGreater ? 'Да' : 'Нет') . "<br>";
echo "num2 меньше num3? " . ($isLess ? 'Да' : 'Нет') . "<br>";

// Реализуем простое логическое выражение
$logicalAnd = ($num1 > $num2) && ($num2 < $num3); // Логическое И
$logicalOr = ($num1 < $num2) || ($num3 > $num1); // Логическое ИЛИ

// Выводим результаты логических выражений
echo "num1 больше num2 и num2 меньше num3? " . ($logicalAnd ? 'Да' : 'Нет') . "<br>";
echo "num1 меньше num2 или num3 больше num1? " . ($logicalOr ? 'Да' : 'Нет') . "<br>";
?>

<?php
// Выводим информацию о сервере и среде исполнения
echo "<h2>Информация о сервере и среде исполнения:</h2>";

// IP-адрес пользователя
$userIP = $_SERVER['REMOTE_ADDR'];
echo "IP-адрес пользователя: $userIP <br>";

// Информация о браузере пользователя
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "Информация о браузере: $userAgent <br>";

// Имя сервера
$serverName = $_SERVER['SERVER_NAME'];
echo "Имя сервера: $serverName <br>";

// Порт сервера
$serverPort = $_SERVER['SERVER_PORT'];
echo "Порт сервера: $serverPort <br>";

// Скрипт, который выполняется в данный момент
$currentScript = $_SERVER['SCRIPT_NAME'];
echo "Текущий скрипт: $currentScript <br>";

// Протокол (HTTP или HTTPS)
$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
echo "Протокол: $protocol <br>";
?>


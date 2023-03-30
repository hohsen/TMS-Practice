<?php

// Создание строк:
// Задача:
// Создайте переменную $string и присвойте ей значение "Привет, мир!".
$string = 'Привет, мир!';



// Сцепление строк:
// Задача:
// Создайте переменные $str1 и $str2 и склейте их вместе с помощью оператора ".".
$str1 = 'Hello';
$str2 = 'world';
$final = $str1 . $str2;



// Извлечение символов из строк:
// Задача:
// Извлеките символы "w" и "o" из строки "Hello World!".
$text = "Hello World!";
print_r($text[4]);
print_r($text[6]);
print_r($text[7]);



// Поиск подстроки:
// Задача:
// Проверьте, содержит ли строка "Hello World!" подстроку "World".
$text = 'Hello World!';
    $search = stripos ($text, 'World');
    if ($search === false)
    {
        return "Не содержится.";
    }
    else
    {
        return "Да, данная подстрака есть в тексте.";
    }

// Замена подстроки:
// Задача:
// Замените все вхождения подстроки "world" на "everyone" в строке "Hello world!".
$replace = str_replace('world', 'everyone', 'Hello world');



// Обработка HTML-тегов:
// Задача:
// Удалите все HTML-теги из строки "<p>Hello, <b>world</b>!</p>".
$textWithTags = "<p>Hello, <b>world</b>!</p>";
echo strip_tags($textWithTags);



// Преобразование регистра:
// Задача:
// Преобразуйте строку "HeLLo, WorLd!" к нижнему регистру.
$stringOne = "HeLLo, WorLd!";
echo strtolower($stringOne);



// Разбиение строки на подстроки:
// Задача:
// Разбейте строку "apple,orange,banana" на массив из трех элементов.
$stringTwo = "apple,orange,banana";
$str_arr = explode(',', $stringTwo);
print_r ($str_arr);
?>
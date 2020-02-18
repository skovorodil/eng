<!DOCTYPE html>
<html lang="en">
<head>
	<title>Main Page</title>
	<meta charset="UTF-8">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<style>
    body {
    background-image: url(img/mainBack.png); 
    background-color: #F1CE8F;
    background-size: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    z-index: 1;
   }
</style>


    <div class="leftBlock">
    <span class="text">Добро пожаловать в сервис &shy; по изучению английского языка Family Language!</span>
    <form>
        <input type="button" class="login100-form-btn" value="Войти" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="centerBlock">
    <span class="text">Добро пожаловать в сервис &shy; по изучению английского языка Family Language!</span>
    <form>
        <input type="button" class="login100-form-btn" value="Войти" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="rightBlock">
    <span class="text">Добро пожаловать в сервис &shy; по изучению английского языка Family Language!</span>
    <form>
        <input type="button" class="login100-form-btn" value="Войти" onclick=" location.href='index.php'">
            </form>
    </div>



<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>



</body>
</html>

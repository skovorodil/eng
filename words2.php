<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Family Language</title>
    <meta charset="UTF-8">
    <link href="/css/words2_style.css" rel="stylesheet" type="text/css">
    <link href="/css/header.css" rel="stylesheet" type="text/css">
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
    margin: 0px;
    padding: 0px;
   }
</style>

<div class="header">
    <a href="logout.php" class="headText">Выйти </a>
    <?php
    if(isset($_SESSION['name'])) {
    echo '<a href="profile.php" class="headText">'  .$_SESSION['name']. '</a>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    
    <span class = "logoTitle">Family Language</span>
    <a href="progress.php" class="headText">Достижения</a>
    <a href="###" class="headText">Тестирование</a>
    <a href="words.php" class="headText">Изучить</a>
    <a href="main.php" class="headText">Главная </a>
</div>

<div class="wrapper">
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/standing-man.png">
    <span class="text">Человек</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='learn.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/test-tube.png">
    <span class="text">Наука</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/city.png">
    <span class="text">Город</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    </div>
    
    <div class="wrapper2">
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/country.png">
    <span class="text">Страны</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='words.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/home.png">
    <span class="text">Дом</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/social-network.png">
    <span class="text">Общество</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    </div>
    
    <div class="page">
        <form>
        <input type="button" class="login100-form-btn btn" class="btn" value="Назад" onclick=" location.href='words.php'">
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

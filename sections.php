<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Family Language</title>
	<meta charset="UTF-8">
	<link href="/css/sections_style.css" rel="stylesheet" type="text/css">
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
    <a href="logout.php" class="headText" id="exitMenu">Выйти </a>
    <?php
    if(isset($_SESSION['name'])) {
    echo '<a href="profile.php" class="headText" id="nameMenu">'  .$_SESSION['name']. '</a>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    
    <span class = "logoTitle">Family Language</span>
    <a href="progress.php" class="headText" id="achievMenu">Достижения</a>
    <a href="sections.php" class="headText" id="testMenu">Тестирование</a>
    <a href="words.php" class="headText" id="learnMenu">Изучить</a>
    <a href="main.php" class="headText" id="mainMenu">Главная </a>
            
</div>

<div class="wrapper">
    <div class="firstBlock">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/1-circle.png">
    <span class="text">Первый раздел</span>
    <p class="words">Животные<br>Профессии<br>Семья<br>Еда</p>
    <form method="post">
        <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="first_s" name="first_s">
							Проверить знания
						</button>
					</div>
            </form>
    </div>
    
    <div class="secBlock">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/2-circle.png">
    <span class="text">Второй раздел</span>
    <p class="words">Транспорт<br>Путешествия<br>Погода<br>Спорт</p>
    <form method="post">
        <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="sec_s" name="sec_s">
							Проверить знания
						</button>
					</div>
            </form>
    </div>
    
    <div class="thrBlock">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/3-circle.png">
    <span class="text">Третий раздел</span>
    <p class="words">Человек<br>Цветы<br>Город<br><br></p>
    <form method="post">
        <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="thr_s" name="thr_s">
							Проверить знания
						</button>
					</div>
            </form>
    </div>
    
    <div class="fourBlock">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/4-circle.png">
    <span class="text">Четвертый раздел</span>
    <p class="words">Страны<br>Дом<br>Одежда<br><br></p>
    <form method="post">
        <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="four_s" name="four_s">
							Проверить знания
						</button>
					</div>
            </form>
    </div>
    </div>



<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>

<?php 
if(isset($_POST["first_s"])){
   $_SESSION['section'] = 1;
   echo ' <meta http-equiv="refresh" content="0;URL=test.php">';
}
if(isset($_POST["sec_s"])){
   $_SESSION['section'] = 2;
   echo ' <meta http-equiv="refresh" content="0;URL=test.php">';
}
if(isset($_POST["thr_s"])){
   $_SESSION['section'] = 3;
   echo ' <meta http-equiv="refresh" content="0;URL=test.php">';
}
if(isset($_POST["four_s"])){
   $_SESSION['section'] = 4;
   echo ' <meta http-equiv="refresh" content="0;URL=test.php">';
}
?>



</body>
</html>

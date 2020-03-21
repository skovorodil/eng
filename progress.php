<?php
    session_start();
    ?>
    
<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Family Language</title>
	<meta charset="UTF-8">
	<link href="/css/progress_style.css" rel="stylesheet" type="text/css">
	<link href="/css/header.css" rel="stylesheet" type="text/css">
</head>
<body>
<style>
    body {
    background-image: url(img/profileBack.png); 
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
    echo '<a href="profile.php" id="nameMenu" class="headText">'  .$_SESSION['name']. '</a>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    
    <span class = "logoTitle">Family Language</span>
    <a href="progress.php" class="headText" id="achievMenu">Достижения</a>
    <a href="###" class="headText" id="testMenu">Тестирование</a>
    <a href="words.php" class="headText" id="learnMenu">Изучить</a>
    <a href="main.php" class="headText" id="mainMenu">Главная </a>
            
</div>

<div class="wrapper">
    <div class="words_progress">
        <p class="contacts">Прогресс по изученным словам</p>
        <div class="wrapper2">
            <div class="first">
                <?php
    if(isset($_SESSION['id'])) {
        $query=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
        while ($result = mysqli_fetch_array($query)) {
    echo '<p class="pw"> Животные: ' .$result['animal_progress']. ' слов</p>';
    echo '<p class="pw" > Профессии: ' .$result['profession_progress']. ' слов</p>';
    echo '<p class="pw" > Семья: ' .$result['family_progress']. ' слов</p>';
  }
    }
    ?>
            </div>
            
            <div class="second">   
               <p class="pw">Спорт: 0 слов</p>
               <p class="pw">Человек: 5 слов</p>
               <p class="pw">Наука: 2 слов</p>
            </div>
        </div>
    </div>
    
    <div class="achiev">
        
    </div>
</div>
    
    





</body>
</html>

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
	<link href="/css/admin_style.css" rel="stylesheet" type="text/css">
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
    <a href="logout.php" class="headText">Выйти </a>
    <?php
    if(isset($_SESSION['name'])) {
    echo '<a href="profile.php" class="headText">'  .$_SESSION['name']. '</a>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    
    <?php
    if($_SESSION['id']!=1) {
    echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    }
    ?>
    
    <span class = "logoTitle">Family Language</span>
    <a href="progress.php" class="headText">Достижения</a>
    <a href="###" class="headText">Тестирование</a>
    <a href="words.php" class="headText">Изучить</a>
    <a href="main.php" class="headText">Главная </a>
            
</div>

<div class="wrapper">

    <div class="settings">
        
        <p class="set">Добавить слова</p>
        <form class="settingForm" method="post">
            <p class="ttt">Выберете категорию слов</p>
    <select name="words">
        <option value="animal">Животные</option>
        <option value="prof">Профессии</option>
        <option value="family">Семья</option>
        <option value="food">Еда</option>
        <option value="transport">Транспорт</option>
        <option value="travel">Путешествия</option>
        <option value="enter">Развлечения</option>
        <option value="sport">Спорт</option>
        <option value="human">Человек</option>
        <option value="scien">Наука</option>
        <option value="city">Город</option>
        <option value="country">Страны</option>
        <option value="home">Дом</option>
        <option value="socie">Общество</option>
    </select>
            <p class="textInput">Слово</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="addWord" id="addWord">
            </div>
            
            <p class="textInput">Транскрипция</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="addTr" id="addTr">
            </div>
            
            <p class="textInput">Перевод</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="addTranlate" id="addTranslate">
            </div>
            <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="add" name="add">
							Добавить
						</button>
					</div>
        </form>
    </div>
    
<?php

if(isset($_POST["add"])) {
   if (($_POST['words'])=="animal") {
       $table = "words_animal";
   }
   if (($_POST['words'])=="prof") {
       $table = "words_profession";
   }
   if (($_POST['words'])=="family") {
       $table = "words_family";
   }
   if (($_POST['words'])=="food") {
       $table = "words_food";
   }
   if (($_POST['words'])=="transport") {
       $table = "words_transport";
   }
   if (($_POST['words'])=="travel") {
       $table = "words_travel";
   }
   if (($_POST['words'])=="enter") {
       $table = "words_entertainment";
   }
   if (($_POST['words'])=="sport") {
       $table = "words_sport";
   }
   if (($_POST['words'])=="human") {
       $table = "words_human";
   }
   if (($_POST['words'])=="scien") {
       $table = "words_science";
   }
   if (($_POST['words'])=="city") {
       $table = "words_city";
   }
   if (($_POST['words'])=="country") {
       $table = "words_country";
   }
   if (($_POST['words'])=="home") {
       $table = "words_house";
   }
   if (($_POST['words'])=="socie") {
       $table = "words_society";
   }
       if(!empty($_POST['addWord']) && !empty($_POST['addTr']) && !empty($_POST['addTranlate'])) {
            $addWord=htmlspecialchars($_POST['addWord']);
            $addTr=htmlspecialchars($_POST['addTr']);
            $addTranlate=htmlspecialchars($_POST['addTranlate']);
            $sql="INSERT INTO $table (word, tr, translate) VALUES('$addWord','$addTr', '$addTranlate')";
                $result=mysqli_query($link,$sql);
                if($result){
                    echo 'Слово добавлено';
                }
                else {
                   echo 'Произошла ошибка'; 
                }
            
       }
   }

?>





</body>
</html>

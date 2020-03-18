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
	<link href="/css/radio_style.css" rel="stylesheet" type="text/css">
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
    <a href="###" class="headText">Достижения</a>
    <a href="###" class="headText">Тестирование</a>
    <a href="words.php" class="headText">Изучить</a>
    <a href="main.php" class="headText">Главная </a>
            
</div>

<div class="wrapper">
    <div class="profile">
        <form class="forma">
        <p class="ttt">Выберете категорию слов</p>
        <input class="radio" type="radio" id="contactChoice1" name="contact" value="email">
        <label for="contactChoice1">Животные</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice2" name="contact" value="phone">
        <label for="contactChoice2">Профессии</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice3" name="contact" value="mail">
        <label for="contactChoice3">Семья</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice4" name="contact" value="mail">
        <label for="contactChoice4">Еда</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice5" name="contact" value="mail">
        <label for="contactChoice5">Транспорт</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice6" name="contact" value="mail">
        <label for="contactChoice6">Путешествия</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice7" name="contact" value="mail">
        <label for="contactChoice7">Развлечения</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice8" name="contact" value="mail">
        <label for="contactChoice8">Спорт</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice8" name="contact" value="mail">
        <label for="contactChoice8">Человек</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice8" name="contact" value="mail">
        <label for="contactChoice8">Наука</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice8" name="contact" value="mail">
        <label for="contactChoice8">Город</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice8" name="contact" value="mail">
        <label for="contactChoice8">Страны</label>
        
        <br>

        <input class="radio" type="radio" id="contactChoice8" name="contact" value="mail">
        <label for="contactChoice8">Дом</label>
        
        
        <br>

        <input class="radio" type="radio" id="contactChoice8" name="contact" value="mail">
        <label for="contactChoice8">Общество</label>
        </form>
    </div>
    
    <div class="settings">
        
        <p class="set">Добавить слова</p>
        <form class="settingForm" method="post">
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
    





</body>
</html>

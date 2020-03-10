<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Family Language</title>
    <meta charset="UTF-8">
    <link href="/css/words_style.css" rel="stylesheet" type="text/css">
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
    echo '<a href="https://dribbble.com/" class="headText">'  .$_SESSION['name']. '</a>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    
    <span class = "logoTitle">Family Language</span>
    <a href="###" class="headText">Достижения</a>
    <a href="###" class="headText">Тестирование</a>
    <a href="words.php" class="headText">Изучить</a>
    <a href="main.php" class="headText">Главная </a>
</div>

<div class="wrapper">
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/christmas-penguin.png">
    <span class="text">Животные</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='learn.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/businessman.png">
    <span class="text">Профессии</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/parent-guardian.png">
    <span class="text">Семья</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/ingredients.png">
    <span class="text">Еда</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    </div>
    
    <div class="wrapper2">
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/bus.png">
    <span class="text">Транспорт</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='words.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/suitcase.png">
    <span class="text">Путешествия</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/theme-park.png">
    <span class="text">Развлечения</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/tennis.png">
    <span class="text">Спорт</span>
    <form>
        <input type="button" class="login100-form-btn" value="Изучить" onclick=" location.href='index.php'">
            </form>
    </div>
    </div>



<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>



</body>
</html>

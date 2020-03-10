<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Family Language</title>
    <meta charset="UTF-8">
        <link href="/css/learn_style.css" rel="stylesheet" type="text/css">
        <link href="/css/header.css" rel="stylesheet" type="text/css">
</head>

<style>
    body {
    background-image: url(img/learnBack.png); 
    background-color: #F1CE8F;
    background-size: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    z-index: 1;
    padding: 0px;
    margin: 0px;
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



<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>
<?php
            $query =mysqli_query($link, "SELECT * FROM words_animal ORDER BY RAND() LIMIT 1");
            while($row=mysqli_fetch_assoc($query))
                {
                    $dbword=$row['word'];
                    $dbtr=$row['tr'];
                    $dbtranslate=$row['translate'];
                }
      
    ?>

    <div class="welcomeBlock">
    <?php
    echo '<p class="word">'  .$dbword. '</p>';
    echo '<p class="tr">'  .$dbtr. '</p>';
    echo '<p class="translate">'  .$dbtranslate. '</p>';
    ?> 
   
    <form>
        <input type="button" class="login100-form-btn" value="Далее" onclick=" location.href='learn.php'">
            </form>
    </div>



</body>
</html>

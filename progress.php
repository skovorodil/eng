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
    <a href="sections.php" class="headText" id="testMenu">Тестирование</a>
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
    echo '<p class="pw" > Еда: ' .$result['food_progress']. ' слов</p>';
    echo '<p class="pw" > Транспорт: ' .$result['transport_progress']. ' слов</p>';
    echo '<p class="pw" > Путешествия: ' .$result['travel_progress']. ' слов</p>';
    echo '<p class="pw" > Погода: ' .$result['entertainment_progress']. ' слов</p>';
  }
    }
    ?>
            </div>
            
            <div class="second">   
               <?php
    if(isset($_SESSION['id'])) {
        $query=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
        while ($result = mysqli_fetch_array($query)) {
    echo '<p class="pw"> Спорт: ' .$result['sport_progress']. ' слов</p>';
    echo '<p class="pw"> Человек: ' .$result['human_progress']. ' слов</p>';
    echo '<p class="pw"> Цветы: ' .$result['science_progress']. ' слов</p>';
    echo '<p class="pw"> Город: ' .$result['city_progress']. ' слов</p>';
    echo '<p class="pw"> Страны: ' .$result['country_progress']. ' слов</p>';
    echo '<p class="pw"> Дом: ' .$result['house_progress']. ' слов</p>';
    echo '<p class="pw"> Одежда: ' .$result['society_progress']. ' слов</p>';
  }
    }
    ?>
            </div>
        </div>
    </div>

    
    <div class="achiev">
        <p class="contacts">Прогресс по разделам</p>
        <div class="blockSec">
            <img class="icon" src="https://img.icons8.com/dusk/64/000000/1-circle.png"> 
<?php
    if(isset($_SESSION['id'])) {
        $query1=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
        while ($result1 = mysqli_fetch_array($query1)) {
            $first = $result1['section_1'];
            if ($first == 150) {
    echo '<p class="test"> Пройден (переведено 150 из 150 слов)</p>'; 
            }
            else {
    echo '<p class="test"> Не пройден (переведено ' .$result1['section_1']. ' из 150 слов)</p>';           
            }
        }
    }
?>
 </div>  
 
 <div class="blockSec">
            <img class="icon" src="https://img.icons8.com/dusk/64/000000/2-circle.png"> 
<?php
    if(isset($_SESSION['id'])) {
        $query2=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
        while ($result2 = mysqli_fetch_array($query2)) {
            $sec = $result2['section_2'];
            if ($sec == 150) {
    echo '<p class="test"> Пройден (переведено 150 из 150 слов)</p>'; 
            }
            else {
    echo '<p class="test"> Не пройден (переведено ' .$result2['section_2']. ' из 150 слов)</p>';           
            }
        }
    }
?>
 </div> 
 
 <div class="blockSec">
            <img class="icon" src="https://img.icons8.com/dusk/64/000000/3-circle.png"> 
<?php
    if(isset($_SESSION['id'])) {
        $query3=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
        while ($result3 = mysqli_fetch_array($query3)) {
            $thr = $result3['section_3'];
            if ($thr == 150) {
    echo '<p class="test"> Пройден (переведено 150 из 150 слов)</p>'; 
            }
            else {
    echo '<p class="test"> Не пройден (переведено ' .$result3['section_3']. ' из 150 слов)</p>';           
            }
        }
    }
?>
 </div> 
 
 <div class="blockSec">
            <img class="icon" src="https://img.icons8.com/dusk/64/000000/4-circle.png"> 
<?php
    if(isset($_SESSION['id'])) {
        $query4=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
        while ($result4 = mysqli_fetch_array($query4)) {
            $four = $result4['section_4'];
            if ($four == 150) {
    echo '<p class="test"> Пройден (переведено 150 из 150 слов)</p>'; 
            }
            else {
    echo '<p class="test"> Не пройден (переведено ' .$result4['section_4']. ' из 150 слов)</p>';           
            }
        }
    }
?>
 </div> 
        
    </div>
</div>
    
    





</body>
</html>

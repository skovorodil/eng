<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Family Language</title>
    <meta charset="UTF-8">
        <link href="css/learn_style.css" rel="stylesheet" type="text/css">
        <link href="css/header.css" rel="stylesheet" type="text/css">
</head>

<style>
    body {
    background-image: url(https://eng-slang.000webhostapp.com/img/learnBack.png); 
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
    <a href="logout.php" class="headText" id="exitMenu">Выйти </a>
    <?php
    if(isset($_SESSION['name'])) {
    echo '<a href="profile.php" class="headText" id="nameMenu">'  .$_SESSION['name']. '</a>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    <span class = "logoTitle">Family Language</span>
    <a href="progress.php" class="headText" id="achievMenu">Достижения</a>
    <a href="###" class="headText" id="testMenu">Тестирование</a>
    <a href="words.php" class="headText" id="learnMenu">Изучить</a>
    <a href="main.php" class="headText" id="mainMenu">Главная </a>
</div>



<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>
<?php

if(isset($_SESSION['words_type']))  {
    $WT = $_SESSION['words_type'];
    if ($WT == 1) {
    $words_type = 'words_animal';
    $words_progress = 'animal_progress';
    }
    if ($WT == 2) {
    $words_type = 'words_profession';
    $words_progress = 'profession_progress';
    }
    if ($WT == 3) {
    $words_type = 'words_family';
    $words_progress = 'family_progress';
    }
    if ($WT == 4) {
    $words_type = 'words_food';
    $words_progress = 'food_progress';
    }
    if ($WT == 5) {
    $words_type = 'words_transport';
    $words_progress = 'transport_progress';
    }
    if ($WT == 6) {
    $words_type = 'words_travel';
    $words_progress = 'travel_progress';
    }
    if ($WT == 7) {
    $words_type = 'words_entertainment';
    $words_progress = 'entertainment_progress';
    }
    if ($WT == 8) {
    $words_type = 'words_sport';
    $words_progress = 'sport_progress';
    }
    if ($WT == 9) {
    $words_type = 'words_human';
    $words_progress = 'human_progress';
    }
    if ($WT == 10) {
    $words_type = 'words_science';
    $words_progress = 'science_progress';
    }
    if ($WT == 11) {
    $words_type = 'words_city';
    $words_progress = 'city_progress';
    }
    if ($WT == 12) {
    $words_type = 'words_country';
    $words_progress = 'country_progress';
    }
    if ($WT == 13) {
    $words_type = 'words_house';
    $words_progress = 'house_progress';
    }
    if ($WT == 14) {
    $words_type = 'words_society';
    $words_progress = 'society_progress';
    }
}
else  echo ' <meta http-equiv="refresh" content="0;URL=main.php">';


            $query1=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
            while($row=mysqli_fetch_assoc($query1))
                {
                    $dbprogress=$row[$words_progress];
                    $query2=mysqli_query($link, "select * from $words_type");
                    $wordscount = mysqli_num_rows($query2);
                    if($wordscount==$dbprogress){
                    $queryNull =mysqli_query($link, "UPDATE user SET $words_progress=1 WHERE id_user='{$_SESSION['id']}'");
                    $dbprogress=1;
                    }
                    else {
                    $dbprogress=$dbprogress+1;
                    }
                }
            $query3 =mysqli_query($link, "SELECT * FROM $words_type where id_word='$dbprogress'");
            while($row=mysqli_fetch_assoc($query3))
                {
                    $dbword=$row['word'];
                    $dbtr=$row['tr'];
                    $dbtranslate=$row['translate'];
                }
            $query4 =mysqli_query($link, "UPDATE user SET $words_progress='$dbprogress' WHERE id_user='{$_SESSION['id']}'");
    ?>

    <div class="welcomeBlock">
    <?php
    echo '<p class="word">'  .$dbword. '</p>';
    echo '<p class="tr">'  .$dbtr. '</p>';
    echo '<p class="translate">'  .$dbtranslate. '</p>';
    ?> 
   
    <form>
        <input type="button" class="login100-form-btn" value="Изучено" onclick=" location.href='learn.php'">
            </form>
    </div>



</body>
</html>

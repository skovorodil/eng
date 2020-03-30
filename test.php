<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Family Language</title>
	<meta charset="UTF-8">
		<link href="css/test_style.css" rel="stylesheet" type="text/css">
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
    <a href="sections.php" class="headText" id="testMenu">Тестирование</a>
    <a href="words.php" class="headText" id="learnMenu">Изучить</a>
    <a href="main.php" class="headText" id="mainMenu">Главная </a>
</div>



<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>


    <div class="welcomeBlock">
    
    <form method="post">
    <p class="verh">Переведите слово</p>
    <?php
 if($_SESSION['section'] == 1) {
    $rand = rand(1,4);
    if ($rand == 1) {
        $bd = 'words_animal';
    }
    if ($rand == 2) {
        $bd = 'words_profession';
    }
    if ($rand == 3) {
        $bd = 'words_family';
    }
    if ($rand == 4) {
        $bd = 'words_food';
    }
    $sectionN = 'section_1';
}
if($_SESSION['section'] == 2) {
    $rand = rand(5,8);
    if ($rand == 5) {
        $bd = 'words_transport';
    }
    if ($rand == 6) {
        $bd = 'words_travel';
    }
    if ($rand == 7) {
        $bd = 'words_entertainment';
    }
    if ($rand == 8) {
        $bd = 'words_sport';
    }
    $sectionN = 'section_2';
}
if($_SESSION['section'] == 3) {
    $rand = rand(9,11);
    if ($rand == 9) {
        $bd = 'words_human';
    }
    if ($rand == 10) {
        $bd = 'words_science';
    }
    if ($rand == 11) {
        $bd = 'words_city';
    }
    $sectionN = 'section_3';
}
if($_SESSION['section'] == 4) {
    $rand = rand(12,14);
    if ($rand == 12) {
        $bd = 'words_country';
    }
    if ($rand == 13) {
        $bd = 'words_house';
    }
    if ($rand == 14) {
        $bd = 'words_society';
    }
    $sectionN = 'section_4';
}

            $query2 =mysqli_query($link, "SELECT * FROM $bd ORDER BY RAND () LIMIT 1");
            while($row=mysqli_fetch_assoc($query2))
                {
                    $dbword=$row['word'];
                    $dbtr=$row['tr'];
                    $dbtranslate=$row['translate'];
                }
    
    echo '<p class="word">'  .$dbword. '</p>';
    
    ?> 
    <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="translate" id="translate">
            </div>
         <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="next" name="next">
							Далее
						</button>
					</div>
    </form>
    </div>
    
<?php 
  if(isset($_POST["next"])){
                $translate=htmlspecialchars($_POST['translate']);
                $translate = mb_strtolower($translate);
                $dbtranslate = mb_strtolower($dbtranslate);
                
            $query2 =mysqli_query($link, "SELECT * FROM user WHERE id_user='{$_SESSION['id']}'");
                while($row=mysqli_fetch_assoc($query2))
                {
                    $dbbubble=$row['bubble'];
                }
                
                if ($translate==$dbbubble) {
                    $queryNull =mysqli_query($link, "UPDATE user SET $sectionN = $sectionN + 1  WHERE id_user='{$_SESSION['id']}'");
                }

                $sql="UPDATE user SET bubble='$dbtranslate' WHERE id_user='{$_SESSION['id']}'";
                $result=mysqli_query($link,$sql);
}
?>



</body>
</html>

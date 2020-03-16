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
    <link href="/css/profile_style.css" rel="stylesheet" type="text/css">
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
    <a href="###" class="headText" id="achievMenu">Достижения</a>
    <a href="###" class="headText" id="testMenu">Тестирование</a>
    <a href="words.php" class="headText" id="learnMenu">Изучить</a>
    <a href="main.php" class="headText" id="mainMenu">Главная </a>
            
</div>

<div class="wrapper">
    <div class="profile">
        <img class="icon" src="img/profileIcon.png">
        <?php
    if(isset($_SESSION['name'])) {
    echo '<p class="name">'  .$_SESSION['name']. '</p>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    <p class="student"> Ученик</p>
    <p class="contacts">Контактная информация:</p>
    <?php
    if(isset($_SESSION['id'])) {
        $query=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
        while ($result = mysqli_fetch_array($query)) {
    echo '<p class="cont" id="emailID"> email: ' .$result['user_mail']. '</p>';
    echo '<p class="cont" id="phoneID"> Телефон: ' .$result['user_phone']. '</p>';
  }
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    
    </div>
    <div class="settings">
        <p class="set">Настройки</p>
        <form class="settingForm" method="post">
            <p class="textInput">Имя</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="chName" id="chName">
            </div>
            
            <p class="textInput">Телефон</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="chPhone" id="chPhone">
            </div>
            
            <p class="textInput">Email</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="text" name="chEmail" id="chEmail">
            </div>
            
            <p class="textInput">Старый пароль</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="password" name="oldPas" id="oldPas">
            </div>
            
            <p class="textInput">Новый пароль</p>
            <div class="wrap-input100 validate-input">
                <input class="input100" type="password" name="newPas" id="newPas">
            </div>
            
            <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="change" name="change">
                            Изменить
                        </button>
                    </div>
        </form>
    </div>
    </div>
    
    
<?php
    if(isset($_POST["change"])){
            if(!empty($_POST['chName'])) {
                $newName=htmlspecialchars($_POST['chName']);
                $sql="UPDATE user SET user_name='$newName' WHERE id_user='{$_SESSION['id']}'";
                $result=mysqli_query($link,$sql);
                if($result){
                    $_SESSION['name'] = $newName;
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Ошибка")';
                    echo '</script>';
                }
            }
        }
    
    if(isset($_POST["change"])){
            if(!empty($_POST['chPhone'])) {
                $newPhone=htmlspecialchars($_POST['chPhone']);
                $sql2="UPDATE user SET user_phone='$newPhone' WHERE id_user='{$_SESSION['id']}'";
                $result2=mysqli_query($link,$sql2);
                if(!$result2){
                    echo '<script language="javascript">';
                    echo 'alert("Ошибка")';
                    echo '</script>';
                }
            }
        }
        
    if(isset($_POST["change"])){
            if(!empty($_POST['chPhone'])) {
                $newPhone=htmlspecialchars($_POST['chPhone']);
                $sql2="UPDATE user SET user_phone='$newPhone' WHERE id_user='{$_SESSION['id']}'";
                $result3=mysqli_query($link,$sql2);
                if(!$result3){
                    echo '<script language="javascript">';
                    echo 'alert("Ошибка")';
                    echo '</script>';
                }
            }
        }
        
    if(isset($_POST["change"])){
            if(!empty($_POST['chEmail'])) {
                $newEmail=htmlspecialchars($_POST['chEmail']);
                $sql3="UPDATE user SET user_mail='$newEmail' WHERE id_user='{$_SESSION['id']}'";
                $result3=mysqli_query($link,$sql3);
                if(!$result3){
                    echo '<script language="javascript">';
                    echo 'alert("Ошибка")';
                    echo '</script>';
                }
            }
        }
        
    if(isset($_POST["change"])){
            if(!empty($_POST['newPas']) && empty($_POST['oldPas'])) {
                    echo '<script language="javascript">';
                    echo 'alert("Введите старый пароль")';
                    echo '</script>';
                }
                else if (!empty($_POST['newPas']) && !empty($_POST['oldPas'])) {
                $newPas=htmlspecialchars($_POST['newPas']);
                $oldPas = htmlspecialchars($_POST['oldPas']);
                
                $queryPas=mysqli_query($link, "select * from user where id_user = '".$_SESSION['id']."'");
                  while ($result4 = mysqli_fetch_array($queryPas)) {
                  if ($result4['user_pas'] == $oldPas) {
                     $sql4="UPDATE user SET user_pas='$newPas' WHERE id_user='{$_SESSION['id']}'";
                     $result5=mysqli_query($link,$sql4);
                        if(!$result5){
                            echo '<script language="javascript">';
                            echo 'alert("Ошибка")';
                            echo '</script>';
                        }       
             }
             else {
                echo '<script language="javascript">';
                echo 'alert("Не верный пароль")';
                echo '</script>'; 
             }
          }
        }
    }
    ?>





</body>
</html>

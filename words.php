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
    echo '<a href="profile.php" class="headText">'  .$_SESSION['name']. '</a>';
    }
    else  echo ' <meta http-equiv="refresh" content="0;URL=index.php">';
    ?>
    
    <span class = "logoTitle">Family Language</span>
    <a href="progress.php" class="headText">Достижения</a>
    <a href="sections.php" class="headText">Тестирование</a>
    <a href="words.php" class="headText">Изучить</a>
    <a href="main.php" class="headText">Главная </a>
</div>

<div class="wrapper">
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/christmas-penguin.png">
    <span class="text">Животные</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="animal" name="animal">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/businessman.png">
    <span class="text">Профессии</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="profession" name="profession">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/parent-guardian.png">
    <span class="text">Семья</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="family" name="family">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/ingredients.png">
    <span class="text">Еда</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="food" name="food">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    </div>
    
    <div class="wrapper2">
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/bus.png">
    <span class="text">Транспорт</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="transport" name="transport">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/suitcase.png">
    <span class="text">Путешествия</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="travel" name="travel">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/partly-cloudy-day.png">
    <span class="text">Погода</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="enter" name="enter">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    
    <div class="Block">
        <img class="icon" src="https://img.icons8.com/dusk/64/000000/tennis.png">
    <span class="text">Спорт</span>
    <form method="post">
        <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="sport" name="sport">
                            Изучить
                        </button>
                    </div>
            </form>
    </div>
    </div>
    
    <div class="page">
        <form>
        <input type="button" class="login100-form-btn btn" class="btn" value="Далее" onclick=" location.href='words2.php'">
            </form>
    </div>



<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>

<?php 

    if(isset($_POST["animal"])){
            $_SESSION['words_type'] = 1;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
    if(isset($_POST["profession"])){
            $_SESSION['words_type'] = 2;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
    if(isset($_POST["family"])){
            $_SESSION['words_type'] = 3;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
    if(isset($_POST["food"])){
            $_SESSION['words_type'] = 4;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
    if(isset($_POST["transport"])){
            $_SESSION['words_type'] = 5;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
    if(isset($_POST["travel"])){
            $_SESSION['words_type'] = 6;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
    if(isset($_POST["enter"])){
            $_SESSION['words_type'] = 7;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
    if(isset($_POST["sport"])){
            $_SESSION['words_type'] = 8;
            echo ' <meta http-equiv="refresh" content="0;URL=learn.php">'; 
        }
?>



</body>
</html>

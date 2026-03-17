<?php
    session_start();
    require_once("db.php");
            
    // Регистрация (Занос данных в таблицу users)
    if(isset($_POST["register"])){
        if(isset($_POST["password1"]) && isset($_POST["password"])){
                if($_POST["password1"] == $_POST["password"]){
                    $sql = "INSERT INTO `users`( `name`, `password`, `email`) VALUES 
                        ('".$_POST['login']."',
                         PASSWORD('".$_POST['password']."'),
                         '".$_POST['email']."')";
                var_dump($sql);
                $result = mysqli_query($mysqli, $sql);
                if(mysqli_errno($mysqli)) echo mysqli_error();
                header('Location: SignUp.php');
            }else{
                header('Location: no_correct.html');
            }
        }
    }

    // Добавления записи в таблицу 'hashtag'
    elseif(isset($_POST["createHash"])){
        $pattern = '/#([a-z0-9_+-]+)/i';// патерн по поиску #
        // var_dump($_POST['text']);
        preg_match_all($pattern, $_POST['text'], $hashtags);// поиск всех совпадекний по патерну
        // print_r($hashtags[1]);
        foreach($hashtags[1] as $e){
            $value = $e;
            $sql = "INSERT INTO `hashtag`(`name`) VALUES ('$value')";
            $result = mysqli_query($mysqli, $sql);
            if(mysqli_errno($mysqli)) echo mysqli_error();
        }
        header('Location: content.php');
    }

    // Вход в аккаунт и проверка логина и пароля
    elseif(isset($_POST["Login"])){
        $name = $_POST["name"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM `users` WHERE `name`='".$name."' AND `password`=PASSWORD('".$password."')";
        // var_dump($sql);
        $result = mysqli_query($mysqli, $sql);
        if(mysqli_errno($mysqli)) echo mysqli_error();
        $row =mysqli_fetch_row($result);
        if($row <= 0){
            header('Location: error.html');
        }
        elseif( $row >0 ){
            $_SESSION['userId'] = $row[0];
            $_SESSION['role'] = $row[4];
            var_dump($_SESSION['role']);
            header('Location: create.php');
        }
    }

?>
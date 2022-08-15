<?php

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'dblogin');

    $user = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM cadelogin WHERE user = '$user' && password = '$pass'";

    $result = mysqli_query($con,$sql);

    $num = mysqli_num_rows($result);

    if($num == 1){
       header('location: homepage.html');
    }else{
        echo'Usuário ou senha incorretos';
      
    }
?>
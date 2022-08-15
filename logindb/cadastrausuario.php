<h1> Cadastro de usuário </h1>

<?php 

    $con = mysqli_connect('localhost','root','','dblogin');

    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql_insert = "INSERT INTO cadelogin (user, password) 
    VALUES ('$email','$senha')";

    if(mysqli_query($con, $sql_insert)){
        echo "Cadastrado com exito";
    }
    else{
        echo "erro ao cadastrar";
    }
    mysqli_close($con);

?>
<br><br><a href="./index.html">Voltar para página de cadastro</a>
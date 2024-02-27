<?php
//a session traz informações ja requisitadas em outros documentos, sempre que for usar informações em diferentes documentos, precisamos startar a session 
    //realizando a conexão com o banco para a comunicação
    include_once('config.php');

    //realizando uma validação onde verifica se a variavel de session está com os parametros esperados
    if(!isset($_SESSION['email']) == true && !isset($_SESSION['senha']) == true)
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
    //passando para uma variavel, o parametro da session com valor email
    //criando uma variavel que ira conter uma query para executar no banco de dados
    $sql = "SELECT * FROM funcionario WHERE EMAIL = '$email' AND SENHA = '$senha'";

    //criando uma variavel para conter o resultado da query criada
    $result = $conexao->query($sql);

    //print_r($result);

        if(mysqli_num_rows($result) == 1){
            header('Location: home.html');
        }else{
            echo "Usuario não existe";
        }
    }
    else
    {
        echo "erro";
    }
?>
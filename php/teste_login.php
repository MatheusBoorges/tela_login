<?php
    session_start();
    //print_r($_REQUEST);
    
    //verificando se esta passando uma variavel para a verificação,
    //verificando se os campos estão preenchidos
    //isset é um metodo de verificação onde ve se existe aquela função trazida pelo metodo $_POST
    //empty verifica se aquele parametro/ campo está vazio
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //conectando com o banco
        include_once('config.php');
        //declarando as variaveis com os dados passados para verificação no BD
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //print_r($_REQUEST);
        //print_r($email);
        //print_r($senha);

        //criando uma variavel de um select para validação dos dados
        $sql= "SELECT * FROM formulario.usuario WHERE email= '$email' and senha= '$senha'";


        //mandanco a consulta no banco e trazendo o resultado para uma variavel, o resultado será verificado caso uma linha batendo com os dados de email e senha passadps, estão presentes no banco
        $result = $conexao->query($sql);
        
        /*
        print_r($sql);
        print_r($result);
        //verificando o numero de linhas encrontado na minha variavel $result
        */

        if(mysqli_num_rows($result) < 1){
        
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
           // echo("Usuario e senha incorretos")
            header('Location: home.php');    
        }
    }else{
        //utilizamos o header para passar um caminho caso a validação seja realizada
        header('Location: login.php');
    }
?>
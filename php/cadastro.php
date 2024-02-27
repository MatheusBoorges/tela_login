<?php
    if(isset($_POST['submit'])){

        //verificando se os dados foram preenchidos
        /*
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['senha']);  
        print_r('<br>');
        print_r($_POST['data_nasc']);
        print_r('<br>');
        print_r($_POST['celular']);
        */
     
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];
        $celular = $_POST['celular'];
        
        $result = mysqli_query($conexao, "INSERT INTO funcionario (NOME_FUNC, EMAIL, SENHA, DATA_NASC, TELEFONE) VALUES ('$nome', '$email', '$senha', '$data_nasc', '$celular')");

        header('Location: index.html');
    }
?>
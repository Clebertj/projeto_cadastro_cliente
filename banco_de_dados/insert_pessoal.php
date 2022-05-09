<?php
//Iniciar a sessao
session_start(); 

    //Limpar o buffer de saida
    ob_start();

include_once("conect.php");


//recebe dados pessoais
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$meio = filter_input(INPUT_POST, 'nome_meio', FILTER_SANITIZE_EMAIL);
$sobre = filter_input(INPUT_POST, 'sobre_nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

//inserir dados em banco de dados
$result_usuario = "INSERT INTO usuario (nome, nome_meio, sobre_nome, rg, cpf, created)
                    VALUES ('$nome', '$meio', '$sobre', '$rg', '$cpf', NOW())";
  
        //criando variavel e enviando para retorno de ultimo id e confirmação de insert de dados em banco de mySqql
        if ($conn->query($result_usuario) === TRUE) {
        //buscar ultimo id lançado
            $last_id = $conn->insert_id;
            //echo "New record created successfully. Last inserted ID is: " . $last_id;
        
            //Criar a variavel global para salvar a mensagem de confirmação
            $_SESSION['msg'] = " $nome $meio $sobre - CPF: $cpf  <br><h4><p style='color: green;'>Usuário cadastrado com sucesso!</p></h4>";
            
            //Redirecionar o usuario
            header("Location: ../");

        } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;    
            
            //Criar a variavel global para salvar a mensagem de erro
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";

            //Redirecionar o usuario
            header("Location: ../");
        }
  
//gravar cpf em tabela cpfs e atiribuindo ao ultimo id inserido = $last_id;
  $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
  $usuario_id =  $last_id;

  $result_cpf = "INSERT INTO cpfs (cpf, usuario_id, created)
                 VALUES ('$cpf', '$usuario_id', NOW())";
                $resultado_cpf = mysqli_query($conn, $result_cpf);



//recebendo dados tefone e atiribuindo ao ultimo id inserido = $last_id;
$fpesssoal = filter_input(INPUT_POST, 'fone_pessoal', FILTER_SANITIZE_STRING);
$fcontato = filter_input(INPUT_POST, 'fone_contato', FILTER_SANITIZE_EMAIL);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$whats = filter_input(INPUT_POST, 'whatsapp', FILTER_SANITIZE_EMAIL);



$result_fone = "INSERT INTO telefone (fone_pessoal, fone_contato, email, whatsapp, usuario_id, created)
                VALUES ('$fpesssoal', '$fcontato', '$email', '$whats', $usuario_id, NOW())";
                $resultado_fone = mysqli_query($conn, $result_fone);


//// recebendo enderoço e atiribuindo ao ultimo id inserido = $last_id;
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_EMAIL);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_EMAIL);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);


$result_endereco = "INSERT INTO endereco (rua, numero, bairro, cidade, uf, cep, usuario_id, created)
                    VALUES ('$rua', '$numero', '$bairro', '$cidade', '$uf', '$cep', $usuario_id, NOW())";
                    $resultado_endereco = mysqli_query($conn, $result_endereco);

  $conn->close();
<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data = $_POST["data_nascimento"];

            $sql = "INSERT INTO clientes (nome,email,senha,data_nascimento)
            VALUES ('{$nome}','{$email}','{$senha}','{$data}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data = $_POST["data_nascimento"];

            $sql = "UPDATE clientes SET 
            nome='{$nome}',
            email='{$email}',
            senha= '{$senha}',
            data_nascimento='{$data}'
            WHERE
                id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel atualizar o cadastro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
             break;
        case 'excluir':
            $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel deletar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        default:
            # code...
            break;
    }
?>
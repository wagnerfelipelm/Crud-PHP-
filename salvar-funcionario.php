<?php
  switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $dt_nascimento = $_POST["dt_nascimento"];
        $salario = $_POST["salario"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO funcionarios (nome, dt_nascimento, salario, usuario, senha) VALUES ('{$nome}', '{$dt_nascimento}', '{$salario}', '{$usuario}', '{$senha}')";

        $res = $conn->query($sql);
        
        if ($res==true) {
            print "<script>alert('Cadastro realizado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível realizar o cadastro!');</script>";
            print "<script>location.href='?page=novo';</script>";
        }
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $dt_nascimento = $_POST["dt_nascimento"];
            $salario = $_POST["salario"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            $sql = "UPDATE funcionarios SET
                      nome='{$nome}',
                      dt_nascimento='{$dt_nascimento}',
                      salario='{$salario}',
                      usuario='{$usuario}',
                      senha='{$senha}'
                    WHERE  
                      ID=".$_REQUEST["ID"];

            $res = $conn->query($sql);
        
            if ($res==true) {
                print "<script>alert('Edição realizada com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível realizar a edição do cadastro!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            
            $sql ="DELETE FROM funcionarios WHERE id=".$_REQUEST["ID"];
            
            $res = $conn->query($sql);
        
            if ($res==true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
  }
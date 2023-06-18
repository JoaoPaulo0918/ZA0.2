<?php
require_once('../conexao/conexao.php');

function cadastro_do_usuario($nome, $cpf, $email, $telefone,$sexo, $data_nasci, $senha)
{
    global $con;
    if (is_null($nome) || is_null($cpf) || is_null($email) || is_null($telefone) || is_null($sexo) || is_null($data_nasci) || is_null($senha)) {
        // aqui botar o caminho de erro de cadastro
    } else {
        $result = mysqli_query($con, "INSERT INTO usuario(nome_usuario,cpf_usuario,email_usuario,fone_usuario,sexo_usuario,
        data_nasc_usuario,senha_usuario)
            VALUES ('$nome','$cpf','$email','$telefone','$sexo','$data_nasci','$senha')");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}


function cadastro_do_agente($nome, $cpf, $email, $telefone, $data_nasci, $senha, $nu_agente)
{
    global $con;
    if (is_null($nome) || is_null($cpf) || is_null($email) || is_null($telefone) || is_null($data_nasci) || is_null($senha) || is_null($nu_agente)) {
        // aqui botar o caminho de erro de cadastro
    } else {
        $result = mysqli_query($con, "INSERT INTO agente(nome_agente,cpf_agente,email_agente,fone_agente,
            data_nasc_agente,senha_agente,n_agente)
            VALUES ('$nome','$cpf','$email','$telefone','$data_nasci','$senha','$nu_agente')");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

function cadastro_do_veiculo($id_usuario, $modelo, $placa, $cor, $ano)
{
    global $con;
    if (is_null($id_usuario) || is_null($modelo) || is_null($placa) || is_null($cor) || is_null($ano)) {
        // aqui botar o caminho de erro de cadastro
    } else {
        $result = mysqli_query($con, "INSERT INTO veiculos(id_usuario,modelo,placa,cor,ano)
            VALUES ('$id_usuario','$modelo','$placa','$cor','$ano')");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
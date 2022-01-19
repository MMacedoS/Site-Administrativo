<?php

class UsuarioModel extends ConexaoModel{

    public function getUser($cpf,$senha){
        $con=ConexaoModel::Conexao();
        $cmd=$con->query("SELECT * FROM usuarios WHERE cpf='$cpf' AND senha='$senha'");
        // var_dump($cmd);
        // die;
        $dados=$cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function Logout()
    {
        $con=ConexaoModel::desconectar();
    }
    public function InsertUser($nome,$email,$cpf,$foto,$igreja){
        try {
            //code...
        $con=ConexaoModel::Conexao();
        $cmd=$con->prepare("INSERT INTO pastores set nome=:nome, email=:email,cpf=:cpf,foto=:foto,igreja=:igreja");
        $cmd->bindValue(':nome',$nome);
        $cmd->bindValue(':email',$email);
        $cmd->bindValue(':$cpf',$cpf);
        $cmd->bindValue(':foto',$foto);
        $cmd->bindValue(':igreja',$igreja);
        $cmd->execute();
        return true;
    } catch (\Throwable $th) {
        return false;
    }
        
       
    }

    
}


?>
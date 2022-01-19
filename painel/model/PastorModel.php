<?php

class PastorModel extends ConexaoModel{

    public function getAll(){
        $con=ConexaoModel::Conexao();
        $cmd=$con->query("SELECT * FROM pastores ");
        // var_dump($cmd);
        // die;
        $dados=$cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }


    public function Insert($nome,$email,$cpf,$telefone,$endereco,$foto,$data_nasc,$igreja,$obs){
        try {
            //code...
        $con=ConexaoModel::Conexao();
        $cmd=$con->prepare("INSERT INTO pastores set nome=:nome, email=:email,cpf=:cpf,telefone=:telefone
         endereco=:endereco,foto=:foto,data_cad=:data_cad,data_nasc=:data_nasc,igreja=:igreja,obs=:obs");
        $cmd->bindValue(':nome',$nome);
        $cmd->bindValue(':email',$email);
        $cmd->bindValue(':$cpf',$cpf);
        $cmd->bindValue(':telefone',$telefone);
        $cmd->bindValue(':endereco',$endereco);
        $cmd->bindValue(':foto',$foto);
        $cmd->bindValue(':data_cad',Date("Y-M-d"));
        $cmd->bindValue(':data_nasc',$data_nasc);
        $cmd->bindValue(':igreja',$igreja);
        $cmd->bindValue(':obs',$obs);
        $cmd->execute();
        return true;
    } catch (\Throwable $th) {
        return false;
    }
        
       
    }
    public function Update($id,$nome,$email,$cpf,$telefone,$endereco,$foto,$data_nasc,$igreja,$obs){
        try {
            //code...
        $con=ConexaoModel::Conexao();
        $cmd=$con->prepare("UPDATE pastores set nome=:nome, email=:email,cpf=:cpf,telefone=:telefone
         endereco=:endereco,foto=:foto,data_cad=:data_cad,data_nasc=:data_nasc,igreja=:igreja,obs=:obs WHERE id=:id");
        $cmd->bindValue(':nome',$nome);
        $cmd->bindValue(':email',$email);
        $cmd->bindValue(':$cpf',$cpf);
        $cmd->bindValue(':telefone',$telefone);
        $cmd->bindValue(':endereco',$endereco);
        $cmd->bindValue(':foto',$foto);
        $cmd->bindValue(':data_cad',Date("Y-M-d"));
        $cmd->bindValue(':data_nasc',$data_nasc);
        $cmd->bindValue(':igreja',$igreja);
        $cmd->bindValue(':obs',$obs);
        $cmd->bindValue(':id',$id);
        $cmd->execute();
        return true;
    } catch (\Throwable $th) {
        return false;
    }
        
       
    }

}


?>
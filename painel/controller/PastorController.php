<?php
 require_once './model/PastorModel.php';
class PastorController extends PastorModel {
    private $pastor=new PastorModel;
    public function inserir()
    {
        $resultado=$this->pastor->Insert($_POST['nome'],$_POST['email'],$_POST['cpf'],$_POST['telefone'],$_POST['endereco'],'','','','');
        if($resultado){
            echo "Salvo com Sucesso";
        }else
        {
            return $resultado;
        }
    }

    public function atualizar()
    {
        $resultado=$this->pastor->Update($_POST['id_editar'],$_POST['nome'],$_POST['email'],$_POST['cpf'],$_POST['telefone'],$_POST['endereco'],'','','','');
        if($resultado){
            echo "Salvo com Sucesso";
        }else
        {
            return $resultado;
        }
    }
}


?>

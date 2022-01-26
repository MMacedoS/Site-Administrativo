<?php
$dir = __DIR__;
$dir=str_replace("Model","",$dir);
$dir=str_replace("painel-igreja\\","",$dir);
require_once $dir."bd\\Conexao.php";
// echo $dir;

class CadastroModel extends Conexao
{
    public $instancia;
    public function __construct()
    {
        $this->instancia =Conexao::connect();
    }
    public function insertMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo)
    {        
            $id=$this->getNewId("membros");
        	$query = $this->instancia->prepare("INSERT INTO membros SET id=:id, nome = :nome, email = :email, cpf = :cpf, telefone = :telefone,
             endereco = :endereco, foto = :foto, data_nasc = :data_nasc, igreja = :igreja, data_batismo = :data_bat, 
             cargo = :cargo, ativo ='Sim'");

                $query->bindValue(":id", $id);
                $query->bindValue(":nome", $nome);
                $query->bindValue(":email", $email);
                $query->bindValue(":cpf", $cpf);
                $query->bindValue(":telefone", $telefone);
                $query->bindValue(":endereco", $endereco);
                $query->bindValue(":foto", $imagem);
                $query->bindValue(":data_nasc", $data_nasc);
                $query->bindValue(":igreja", $igreja);
                $query->bindValue(":data_bat", $data_bat);
                $query->bindValue(":cargo", $cargo);
                    
                    if($query->execute()){
                        return 'Salvo com Sucesso';
                    }
           return false; 
            
    }

    public function UpdateMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo,$id)
    {
        
        $query = $this->instancia->prepare("UPDATE membros SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone,
        endereco = :endereco, foto = :foto, data_nasc = :data_nasc, igreja = :igreja, data_batismo = :data_bat, 
        cargo = :cargo where id=:id");
        

           $query->bindValue("id", $id);
           $query->bindValue(":nome", $nome);
           $query->bindValue(":email", $email);
           $query->bindValue(":cpf", $cpf);
           $query->bindValue(":telefone", $telefone);
           $query->bindValue(":endereco", $endereco);
           $query->bindValue(":foto", $imagem);
           $query->bindValue(":data_nasc", $data_nasc);
           $query->bindValue(":igreja", $igreja);
           $query->bindValue(":data_bat", $data_bat);
           $query->bindValue(":cargo", $cargo);
               
               if($query->execute()){
                   return 'Salvo com Sucesso';
               }
        
      return false; 
    }

    public function getMembros($dados)
    {
       
        $query = $this->instancia->query("SELECT * FROM membros where cpf = '$dados' or email= '$dados' or id='$dados'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteMembros($dados)
    {
        $query = $this->instancia->prepare("DELETE FROM membros where id = :id");
        $query->bindValue(":id",$dados,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Excluído com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }
    public function obsMembros($dados,$id)
    {
        $query = $this->instancia->prepare("UPDATE membros SET obs=:obs where id = :id");
        $query->bindValue(":obs",$dados,PDO::PARAM_STR);
        $query->bindValue(":id",$id,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Salvo com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }
    public function mudaStatusMembros($dados,$id)
    {
        $query = $this->instancia->prepare("UPDATE membros SET ativo=:status where id = :id");
        $query->bindValue(":status",$dados,PDO::PARAM_STR);
        $query->bindValue(":id",$id,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Alterado com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }

    // /patores///////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    public function getPastores($dados)
    {    
    $query = $this->instancia->query("SELECT * FROM pastores where cpf = '$dados' or nome='$dados' or id='$dados' limit 1");   
    return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertPastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja)
    {
      
        if(count($this->getPastores($cpf))==0){
        $query =  $this->instancia->prepare("INSERT INTO pastores SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone, endereco = :endereco, 
                    foto = :foto, data_nasc = :data_nasc,igreja = :igreja");
           
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":cpf", $cpf);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":foto", $imagem);
            $query->bindValue(":data_nasc", $data_nasc);
            $query->bindValue(":igreja", $igreja);
            $query->execute();
            if($query->execute()){
                return 'Salvo com Sucesso';
            }
        }
            return false; 
            
    }
    public function updatePastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$id)
    {
      
        
        $query =  $this->instancia->prepare("UPDATE pastores SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone, endereco = :endereco, 
                    foto = :foto, data_nasc = :data_nasc,igreja = :igreja WHERE id=:id");
           
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":cpf", $cpf);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":foto", $imagem);
            $query->bindValue(":data_nasc", $data_nasc);
            $query->bindValue(":igreja", $igreja);
            $query->bindValue(":id", $id);
            $query->execute();
            if($query->execute()){
                return 'Salvo com Sucesso';
            }
        
            return false; 
            
    }

    public function deletePastores($dados)
    {
        $query = $this->instancia->prepare("DELETE FROM pastores where id = :id");
        $query->bindValue(":id",$dados,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Excluído com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }
    public function obsPastores($dados,$id)
    {
        $query = $this->instancia->prepare("UPDATE pastores SET obs=:obs where id = :id");
        $query->bindValue(":obs",$dados,PDO::PARAM_STR);
        $query->bindValue(":id",$id,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Salvo com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }


  // /tesoureiros///////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    public function getTesoureiros($dados)
    {    
    $query = $this->instancia->query("SELECT * FROM tesoureiros where cpf = '$dados' or nome='$dados' or id='$dados' limit 1");   
    return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertTesoureiros($nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
    {
        $query =  $this->instancia->prepare("INSERT INTO tesoureiros SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone,
         endereco = :endereco, foto = :foto, igreja = :igreja");

            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":cpf", $cpf);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":foto", $imagem);
            $query->bindValue(":igreja", $igreja);
            if($query->execute()){
                echo 'Salvo com Sucesso';
            }else
            {
                echo 'erro';
            }
            
      
    }
    public function updateTesoureiros($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
    {
        $query =  $this->instancia->prepare("UPDATE tesoureiros SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone,
         endereco = :endereco, foto = :foto, igreja = :igreja WHERE id=:id");

            $query->bindValue(":id", $id);
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":cpf", $cpf);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":foto", $imagem);
            $query->bindValue(":igreja", $igreja);
            if($query->execute()){
                echo 'Salvo com Sucesso';
            }else
            {
                echo 'erro';
            }
            
      
    }

    public function deleteTesoureiros($dados)
    {
        $query = $this->instancia->prepare("DELETE FROM tesoureiros where id = :id");
        $query->bindValue(":id",$dados,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Excluído com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }
    // /secretarios///////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    public function getSecretarios($dados)
    {    
    $query = $this->instancia->query("SELECT * FROM secretarios where cpf = '$dados' or nome='$dados' or id='$dados' limit 1");   
    return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertSecretarios($nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
    {
        $query =  $this->instancia->prepare("INSERT INTO secretarios SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone,
         endereco = :endereco, foto = :foto, igreja = :igreja");

            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":cpf", $cpf);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":foto", $imagem);
            $query->bindValue(":igreja", $igreja);
            if($query->execute()){
                echo 'Salvo com Sucesso';
            }else
            {
                echo 'erro';
            }
            
      
    }
    public function updateSecretarios($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
    {
        $query =  $this->instancia->prepare("UPDATE secretarios SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone,
         endereco = :endereco, foto = :foto, igreja = :igreja WHERE id=:id");

            $query->bindValue(":id", $id);
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":cpf", $cpf);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":foto", $imagem);
            $query->bindValue(":igreja", $igreja);
            if($query->execute()){
                echo 'Salvo com Sucesso';
            }else
            {
                echo 'erro';
            }
            
      
    }

    public function deleteSecretarios($dados)
    {
        $query = $this->instancia->prepare("DELETE FROM secretarios where id = :id");
        $query->bindValue(":id",$dados,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Excluído com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }
    // /fonecedor///////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    public function getFornecedores($dados)
    {    
    $query = $this->instancia->query("SELECT * FROM fornecedores where  email='$dados' or id='$dados' limit 1");   
    return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertFornecedores($nome,$produto,$email,$endereco,$telefone,$id_igreja)
    {
        $query =  $this->instancia->prepare("INSERT INTO fornecedores SET nome = :nome, email = :email, produto = :produto, telefone = :telefone,
         endereco = :endereco, igreja = :igreja");

            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":produto", $produto);
            $query->bindValue(":igreja", $id_igreja);
            if($query->execute()){
                echo 'Salvo com Sucesso';
            }else
            {
                echo 'erro';
            }
            
      
    }
    public function updateFornecedores($id,$nome,$produto,$email,$endereco,$telefone,$id_igreja)
    {
        $query =  $this->instancia->prepare("UPDATE fornecedores SET nome = :nome, email = :email, produto = :produto, telefone = :telefone,
        endereco = :endereco, igreja = :igreja WHERE id=:id");

            $query->bindValue(":id", $id);
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":produto", $produto);
            $query->bindValue(":igreja", $id_igreja);
            if($query->execute()){
                echo 'Salvo com Sucesso';
            }else
            {
                echo 'erro';
            }
            
      
    }

    public function deleteFornecedores($dados)
    {
        $query = $this->instancia->prepare("DELETE FROM fornecedores where id = :id");
        $query->bindValue(":id",$dados,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Excluído com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }


    public function updateUsuarios($dados,$id)
    {
        if(!empty($dados)){
        $query = $this->instancia->prepare("UPDATE usuarios SET senha = :senha where id = :id");
        $query->bindValue(":senha", $dados);
        $query->bindValue(":id",$id,PDO::PARAM_INT);
        if($query->execute()){
            $res= 'Salvo com Sucesso';
        }else
        {
            $res= "insira uma senha razoavel";
        }
    }else{        $res= "insira uma senha razoavel";}
        return $res;
    }

    public function getTarefasHora($data,$hora,$igreja)
    {
        $query = $this->instancia->query("SELECT * FROM tarefas where data = '$data' and hora = '$hora' and igreja = '$igreja'");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertTarefas($titulo,$descricao,$data,$hora,$igreja)
    {
        $query = $this->instancia->prepare("INSERT INTO tarefas SET titulo = :titulo, descricao = :descricao, data = :data, hora = :hora, igreja = :igreja, status = :status");
        $query->bindValue(":titulo",$titulo);
        $query->bindValue(":descricao",$descricao);
        $query->bindValue(":hora",$hora);
        $query->bindValue(":data",$data);
        $query->bindValue(":igreja",$igreja);
        $query->bindValue(":status","Agendada");
        if($query->execute())
        {
            return "Salvo com Sucesso";
        }else{
            return "erro";
        }

        
    }
    public function updateTarefas($id,$titulo,$descricao,$data,$hora,$igreja)
    {
        $query = $this->instancia->prepare("UPDATE tarefas SET titulo = :titulo, descricao = :descricao, data = :data, hora = :hora, igreja = :igreja, status = :status where id=:id");
        $query->bindValue(":titulo",$titulo);
        $query->bindValue(":descricao",$descricao);
        $query->bindValue(":hora",$hora);
        $query->bindValue(":data",$data);
        $query->bindValue(":igreja",$igreja);
        $query->bindValue(":status","Agendada");
        $query->bindValue(":id",$id);
        if($query->execute())
        {
            return "Salvo com Sucesso";
        }else{
            return "erro";
        }

        
    }

    public function deleteTarefas($dados)
    {
        $query = $this->instancia->prepare("DELETE FROM tarefas where id = :id");
        $query->bindValue(":id",$dados,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Excluído com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }
    
    public function mudaStatusTarefas($dados,$id)
    {
        $query = $this->instancia->prepare("UPDATE tarefas SET status=:status where id = :id");
        $query->bindValue(":status",$dados,PDO::PARAM_STR);
        $query->bindValue(":id",$id,PDO::PARAM_INT);
        if($query->execute()){
            echo 'Alterado com Sucesso';
        }else
        {
            echo 'erro';
        }
        
    }

    public function getVerificaIgreja($dados)
    {
        $query = $this->instancia->query("SELECT * FROM igrejas where nome = '$dados' or email='$dados' or id='$dados' ");
        return  $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertIgreja($nome,$telefone,$endereco,$video,$email,$imagem,$pastor)
    {
        $query = $this->instancia->prepare("INSERT INTO igrejas SET nome = :nome, telefone = :telefone, endereco = :endereco, 
        imagem = :imagem, matriz = :matriz, pastor = :pastor, logo_rel = :logo, 
        cab_rel = :cab_rel, carteirinha_rel = :carteirinha, video = :video, email = :email");

            $query->bindValue(":nome", $nome);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":imagem", $imagem);
            $query->bindValue(":matriz", "Não");
            $query->bindValue(":pastor", $pastor);
            $query->bindValue(":logo", "sem-foto.jpg");
            $query->bindValue(":cab_rel", "sem-foto.jpg");
            $query->bindValue(":carteirinha", "sem-foto.jpg");
            $query->bindValue(":video", $video);
            $query->bindValue(":email", $email);
            if($query->execute())
            {
                return 'Salvo com Sucesso';
            }else
            {
               return 'erro';
            }
            

    }

    public function updateIgreja($id,$nome,$telefone,$endereco,$video,$email,$imagem,$pastor)
    {
        $query = $this->instancia->prepare("UPDATE igrejas SET nome = :nome, telefone = :telefone, endereco = :endereco, 
        imagem = :imagem, matriz = :matriz, pastor = :pastor, video = :video, email = :email WHERE id=:id");

            $query->bindValue(":nome", $nome);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":endereco", $endereco);
            $query->bindValue(":imagem", $imagem);
            $query->bindValue(":matriz", "Não");
            $query->bindValue(":pastor", $pastor);
            $query->bindValue(":video", $video);
            $query->bindValue(":email", $email);
            $query->bindValue(":id", $id);
            if($query->execute())
            {
                return 'Salvo com Sucesso';
            }else
            {
               return 'erro';
            }
            

    }

    public function getVerificaDocumento($id)
    {
        $query = $this->instancia->query("SELECT * FROM documentos where igreja = '$id' order by id desc");	
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateImagemIgreja($id,$logo,$cab_rel,$carteirinha)
    {
        $query = $this->instancia->prepare("UPDATE igrejas SET logo_rel = :logo, 
        cab_rel = :cab_rel, carteirinha_rel = :carteirinha WHERE id=:id");
         
            $query->bindValue(":logo", $logo);
            $query->bindValue(":cab_rel", $cab_rel);
            $query->bindValue(":carteirinha", $carteirinha);
            $query->bindValue(":id", $id);
            if($query->execute())
            {
                return 'Salvo com Sucesso';
            }else
            {
               return 'erro';
            }
            

    }
// ////////////////////////////////////////CULTOSSSS
// ????:///////////////////////////////////////////

public function getCultosId($nome,$igreja)
{
    $query = $this->instancia->query("SELECT * FROM cultos where nome = '$nome' and igreja = '$igreja'");
    return $query->fetchAll(PDO::FETCH_ASSOC);
    
}


public function insertCultos($descricao,$nome,$dia,$hora,$igreja)
{
    $query = $this->instancia->prepare("INSERT INTO cultos SET nome = :nome, descricao = :descricao, dia = :dia, hora = :hora, igreja = :igreja");
    
        $query->bindValue(":descricao", $descricao);
        $query->bindValue(":nome", $nome);
        $query->bindValue(":dia", $dia);
        $query->bindValue(":hora", $hora);
        $query->bindValue(":igreja", $igreja);
        if($query->execute())
        {
            return 'Salvo com Sucesso';
        }else
        {
        return 'erro';
        }
}

public function updateCultos($descricao,$nome,$dia,$hora,$igreja,$id)
{
    $query = $this->instancia->prepare("UPDATE cultos SET nome = :nome, descricao = :descricao, dia = :dia, hora = :hora, igreja = :igreja WHERE id=:id");
    
        $query->bindValue(":descricao", $descricao);
        $query->bindValue(":nome", $nome);
        $query->bindValue(":dia", $dia);
        $query->bindValue(":hora", $hora);
        $query->bindValue(":igreja", $igreja);
        $query->bindValue(":id", $id);

        if($query->execute())
        {
            return 'Salvo com Sucesso';
        }else
        {
        return 'erro';
        }
}

public function updateObs($obs,$id)
{
    $query = $this->instancia->prepare("UPDATE cultos SET obs = :obs where id = :id");
    $query->bindValue(":obs", $obs);
    $query->bindValue(":id", $id);
    if($query->execute())
        {
            return 'Salvo com Sucesso';
        }else
        {
        return 'erro';
        }
}

public function deleteCultos($dados)
{
    $query = $this->instancia->prepare("DELETE FROM cultos where id = :id");
    $query->bindValue(":id",$dados,PDO::PARAM_INT);
    if($query->execute()){
        echo 'Excluído com Sucesso';
    }else
    {
        echo 'erro';
    }
    
}
// ///////////////////////////////////////alkertas

public function getAlertas($id)
{
    $query = $this->instancia->query("SELECT * FROM alertas where id = '$id'");
    return $query->fetchAll(PDO::FETCH_ASSOC);
    
}

public function getAlertasAtivo($dados,$id_igreja)
{
    $query = $this->instancia->query("SELECT * FROM alertas where igreja = '$id_igreja' and ativo='$dados'");
    return $query->fetchAll(PDO::FETCH_ASSOC);
    
}

public function insertAlertas($titulo,$usuario,$data,$igreja,$ativo,$imagem,$link,$descricao)
{
    $query = $this->instancia->prepare("INSERT INTO alertas SET titulo = :titulo, descricao = :descricao, link = :link, 
	usuario = :usuario, data = :data, igreja = :igreja, ativo = :ativo, imagem = :imagem");
	
	$query->bindValue(":titulo", $titulo);
	$query->bindValue(":usuario", $usuario);
	$query->bindValue(":data", $data);
	$query->bindValue(":igreja", $igreja);
	$query->bindValue(":ativo", $ativo);
	$query->bindValue(":imagem", $imagem);
	$query->bindValue(":link", $link);
	$query->bindValue(":descricao", $descricao);
    if($query->execute()){
        echo 'Salvo com Sucesso';
    }else
    {
        echo 'erro';
    }
}

public function updateAlertas($titulo,$usuario,$data,$igreja,$ativo,$imagem,$link,$descricao,$id)
{
    $query = $this->instancia->prepare("UPDATE alertas SET titulo = :titulo, descricao = :descricao, link = :link, 
	usuario = :usuario, data = :data, igreja = :igreja, imagem = :imagem WHERE id=:id");
	
	$query->bindValue(":titulo", $titulo);
	$query->bindValue(":usuario", $usuario);
	$query->bindValue(":data", $data);
	$query->bindValue(":igreja", $igreja);
	$query->bindValue(":imagem", $imagem);
	$query->bindValue(":link", $link);
	$query->bindValue(":descricao", $descricao);
    $query->bindValue(":id",$id);
    if($query->execute()){
        echo 'Salvo com Sucesso';
    }else
    {
        echo 'erro';
    }
}

public function deleteAlertas($dados)
{
    $query = $this->instancia->prepare("DELETE FROM alertas where id = :id");
    $query->bindValue(":id",$dados,PDO::PARAM_INT);
    if($query->execute()){
        echo 'Excluído com Sucesso';
    }else
    {
        echo 'erro';
    }
    
}
public function updateStatusAlertas($dados,$id)
{
    $query = $this->instancia->prepare("UPDATE alertas SET ativo=:ativo WHERE id = :id");
    $query->bindValue(":id",$id,PDO::PARAM_INT);
    $query->bindValue(":ativo",$dados,PDO::PARAM_STR);
    if($query->execute()){
        echo 'Alterado com Sucesso';
    }else
    {
        echo 'erro';
    }
    
}


    private function getNewId($tabela){
        $sqlStmt = "SELECT MAX(id) AS id FROM {$tabela}";
        try {
           $operacao = $this->instancia->prepare($sqlStmt);
           if($operacao->execute()) {
              if($operacao->rowCount() > 0){
                 $getRow = $operacao->fetch(PDO::FETCH_OBJ);
                 $idReturn = (int) $getRow->id + 1;
                 return $idReturn;
              } else {
                 throw new Exception("Ocorreu um problema com o banco de dados");
                 exit();
              }
           } else {
              throw new Exception("Ocorreu um problema com o banco de dados");
              exit();
            }
        } catch (PDOException $excecao) {
           return $excecao->getMessage();
        }
     }

     
}
?>


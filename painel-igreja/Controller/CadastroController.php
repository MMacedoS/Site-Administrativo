<?php
  
 class CadastroController extends Controller{

    public $conCadastro;
    public function __construct()
    {
       $this->conCadastro = new CadastroModel();
    }

    public function insertMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo)
    {
        return $this->conCadastro->insertMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo);
    }  

    public function UpdateMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo,$id)
    {
        return $this->conCadastro->UpdateMembros($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$data_bat,$cargo,$id);
    }
    public function getMembros($dado)
    {
        return $this->conCadastro->getMembros($dado);
    }

    public function membros($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "membros/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'excluir.php':
                    require_once "membros/excluir.php";
                    break;
                    case 'obs.php':
                        require_once "membros/obs.php";
                        break;

                        case 'mudar-status.php':
                            require_once "membros/mudar-status.php";
                            break;
            
            default:
                # code...
                break;
        }
      
    }
    public function deleteMembros($dados)
    {
        return $this->conCadastro->deleteMembros($dados);
    }
    public function obsMembros($dados,$id)
    {
        return $this->conCadastro->obsMembros($dados,$id);
    }
    public function mudaStatusMembros($dados,$id)
    {
        return $this->conCadastro->mudaStatusMembros($dados,$id);
    }

    //  pastores///////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    public function insertPastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja)
    {
        return $this->conCadastro->insertPastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja);
    }  

    public function updatePastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$id)
    {
        return $this->conCadastro->updatePastores($nome,$cpf,$email,$endereco,$imagem,$telefone,$data_nasc,$igreja,$id);
    }
    public function getPastores($dados)
    {
        return $this->conCadastro->getPastores($dados);
    }

    public function Pastores($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "Pastores/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'excluir.php':
                    require_once "Pastores/excluir.php";
                    break;
                    case 'obs.php':
                        require_once "Pastores/obs.php";
                        break;

                        case 'mudar-status.php':
                            require_once "Pastores/mudar-status.php";
                            break;
            
            default:
                # code...
                break;
        }
      
    }
    public function deletePastores($dados)
    {
        return $this->conCadastro->deletePastores($dados);
    }
    public function obsPastores($dados,$id)
    {
        return $this->conCadastro->obsPastores($dados,$id);
    }

    /////////tesoureiros

    public function getFornecedores($dados)
    {
        return $this->conCadastro->getFornecedores($dados);
    }
    public function fornecedores($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "fornecedores/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'excluir.php':
                    require_once "fornecedores/excluir.php";
                    break;
                    case 'obs.php':
                        require_once "fornecedores/obs.php";
                        break;

                        case 'mudar-status.php':
                            require_once "fornecedores/mudar-status.php";
                            break;
            
            default:
                # code...
                break;
        }
      
    }

    public function insertFornecedores($nome,$produto,$email,$endereco,$telefone,$id_igreja)
    {
        return $this->conCadastro->insertFornecedores($nome,$produto,$email,$endereco,$telefone,$id_igreja);
    }  
    public function updateFornecedores($id,$nome,$produto,$email,$endereco,$telefone,$id_igreja)
    {
        return $this->conCadastro->updateFornecedores($id,$nome,$produto,$email,$endereco,$telefone,$id_igreja);
    }
    public function deleteFornecedores($dados)
    {
        return $this->conCadastro->deleteFornecedores($dados);
    }  

// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        public function getSecretarios($dados)
        {
            return $this->conCadastro->getSecretarios($dados);
        }
        public function secretarios($page)
        {
            // echo $page;die;
            switch ($page) {
                case 'inserir.php':
                    require_once "secretarios/inserir.php";
                    // echo "inserir atualizar";
                    break;
                    case 'excluir.php':
                        require_once "secretarios/excluir.php";
                        break;
                        case 'obs.php':
                            require_once "secretarios/obs.php";
                            break;

                            case 'mudar-status.php':
                                require_once "secretarios/mudar-status.php";
                                break;
                
                default:
                    # code...
                    break;
            }
        
        }

        public function insertSecretarios($nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
        {
            return $this->conCadastro->insertSecretarios($nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja);
        }  
        public function updateSecretarios($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
        {
            return $this->conCadastro->updateSecretarios($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja);
        }
        public function deleteSecretarios($dados)
        {
            return $this->conCadastro->deleteSecretarios($dados);
        }  
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function getTesoureiros($dados)
    {
        return $this->conCadastro->getTesoureiros($dados);
    }
    public function Tesoureiros($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "tesoureiros/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'excluir.php':
                    require_once "tesoureiros/excluir.php";
                    break;
                    case 'obs.php':
                        require_once "tesoureiros/obs.php";
                        break;

                        case 'mudar-status.php':
                            require_once "tesoureiros/mudar-status.php";
                            break;
            
            default:
                # code...
                break;
        }
      
    }

    public function insertTesoureiros($nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
    {
        return $this->conCadastro->insertTesoureiros($nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja);
    }  
    public function updateTesoureiros($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja)
    {
        return $this->conCadastro->updateTesoureiros($id,$nome,$email,$cpf,$telefone,$endereco,$imagem,$igreja);
    }
    public function deleteTesoureiros($dados)
    {
        return $this->conCadastro->deleteTesoureiros($dados);
    }  


    public function usuarios($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "usuarios/inserir.php";
                // echo "inserir atualizar";
                break;
                
            
            default:
                # code...
                break;
        }
      
    }
    public function updateUsuarios($dados,$id)
    {
        return $this->conCadastro->updateUsuarios($dados,$id);
    }  

    public function insertTarefas($titulo,$descricao,$data,$hora,$igreja)
    {
        return $this->conCadastro->insertTarefas($titulo,$descricao,$data,$hora,$igreja);
    }  

    public function updateTarefas($id,$titulo,$descricao,$data,$hora,$igreja)
    {
        return $this->conCadastro->updateTarefas($id,$titulo,$descricao,$data,$hora,$igreja);
    }
    public function getTarefasHora($data,$hora,$igreja)
    {
        return $this->conCadastro->getTarefasHora($data,$hora,$igreja);
    }

    public function Tarefas($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "tarefas/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'excluir.php':
                    require_once "tarefas/excluir.php";
                    break;
                  
                    case 'mudar-status.php':
                            require_once "tarefas/mudar-status.php";
                            break;
            
            default:
                # code...
                break;
        }
      
    }
    public function deleteTarefas($dados)
    {
        return $this->conCadastro->deleteTarefas($dados);
    }
        
    public function mudaStatusTarefas($dados,$id)
    {
        return $this->conCadastro->mudaStatusTarefas($dados,$id);
    }

    public function igrejas($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "igrejas/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'excluir.php':
                    require_once "igrejas/excluir.php";
                    break;
                  
                    case 'mudar-status.php':
                            require_once "igrejas/mudar-status.php";
                            break;
            
            default:
                # code...
                break;
        }
      
    }
    public function getVerificaIgreja($dados)
    {
        return $this->conCadastro->getVerificaIgreja($dados);
    }

    public function insertIgreja($nome,$telefone,$endereco,$video,$email,$imagem,$pastor)
    {
        return $this->conCadastro->insertIgreja($nome,$telefone,$endereco,$video,$email,$imagem,$pastor);
    }
    
    public function updateIgreja($id,$nome,$telefone,$endereco,$video,$email,$imagem,$pastor)
    {
        return $this->conCadastro->updateIgreja($id,$nome,$telefone,$endereco,$video,$email,$imagem,$pastor);
    }
    

    
}



?>
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

    /////////fornecedor

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

    // ;/////////usuarios
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

    // /////////tarefas

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



    // /////////igrejasw
    public function igrejas($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "igrejas/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'listar-arquivos.php':
                    require_once "igrejas/listar-arquivos.php";
                    break;
                  
                    case 'imagens.php':
                            require_once "igrejas/imagens.php";
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
    

    public function getVerificaDocumento($dados)
    {
        return $this->conCadastro->getVerificaDocumento($dados);
    }
    public function updateImagemIgreja($id,$logo,$cab_rel,$carteirinha)
    {
        return $this->conCadastro->updateImagemIgreja($id,$logo,$cab_rel,$carteirinha);
    }

    // ////////cultos

    public function cultos($page)
    {
        // echo $page;die;
        switch ($page) {
            case 'inserir.php':
                require_once "cultos/inserir.php";
                // echo "inserir atualizar";
                break;
                case 'excluir.php':
                    require_once "cultos/excluir.php";
                    break;
                    case 'obs.php':
                        require_once "cultos/obs.php";
                        break;
                                      
            default:
                # code...
                break;
        }
      
    }

    public function getCultosId($nome,$igreja)
    {
        return $this->conCadastro->getCultosId($nome,$igreja);
    }
  
    public function insertCultos($descricao,$nome,$dia,$hora,$igreja)
    {
        return $this->conCadastro->insertCultos($descricao,$nome,$dia,$hora,$igreja);
    }
    public function updateCultos($descricao,$nome,$dia,$hora,$igreja,$id)
    {
        return $this->conCadastro->updateCultos($descricao,$nome,$dia,$hora,$igreja,$id);
    }
    public function updateObs($obs,$id)
    {
        return $this->conCadastro->updateObs($obs,$id);
    }

    public function deleteCultos($dados)
    {
        return $this->conCadastro->deleteCultos($dados);
        
    }
// /////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////alerta 
        public function alertas($page)
        {
            // echo $page;die;
            switch ($page) {
                case 'inserir.php':
                    require_once "alertas/inserir.php";
                    // echo "inserir atualizar";
                    break;
                    case 'excluir.php':
                        require_once "alertas/excluir.php";
                        break;
                        case 'mudar-status.php':
                            require_once "alertas/mudar-status.php";
                            break;
                       
                                        
                default:
                    # code...
                    break;
            }
        
        }


      
    public function getAlertas($id)
    {
        return $this->conCadastro->getAlertas($id);
    }
    public function getAlertasAtivo($dados,$id)
    {
        return $this->conCadastro->getAlertasAtivo($dados,$id);
    }
    public function insertAlertas($titulo,$usuario,$data,$igreja,$ativo,$imagem,$link,$descricao)
    {
        return $this->conCadastro->insertAlertas($titulo,$usuario,$data,$igreja,$ativo,$imagem,$link,$descricao);
    }
    public function updateAlertas($titulo,$usuario,$data,$igreja,$ativo,$imagem,$link,$descricao,$id)
    {
        return $this->conCadastro->updateAlertas($titulo,$usuario,$data,$igreja,$ativo,$imagem,$link,$descricao,$id);
    }
    public function deleteAlertas($dados)
    {
        return $this->conCadastro->deleteAlertas($dados);
        
    }
    public function updateStatusAlertas($dados,$id)
    {
        return $this->conCadastro->updateStatusAlertas($dados,$id);
        
    }
// //////////////////////////////////////////////////////////////////eventyos/////////////
///////////////////////////////////////////////////////////////////////////////////////
public function getEventos($id)
    {
        return $this->conCadastro->getEventos($id);
    }
public function eventos($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "eventos/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "eventos/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "eventos/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}
        public function deleteEventos($dados)
        {
            return $this->conCadastro->deleteEventos($dados);
        }
        public function obsEventos($dados,$id)
        {
            return $this->conCadastro->obsEventos($dados,$id);
        }
        public function mudaStatusEventos($dados,$id)
        {
            return $this->conCadastro->mudaStatusEventos($dados,$id);
        }


    public function insertEventos($titulo,$subtitulo,$descricao1,$data_evento,$id_usuario,$igreja,$imagem,$tipo,$ativo,$banner,$url,$video,$pregador)
    {
        return $this->conCadastro->insertEventos($titulo,$subtitulo,$descricao1,$data_evento,$id_usuario,$igreja,$imagem,$tipo,$ativo,$banner,$url,$video,$pregador);
        
    }
    
    public function updateEventos($titulo,$subtitulo,$descricao,$data_evento,$id_usuario,$igreja,$imagem,$tipo,$ativo,$banner,$url,$video,$pregador,$id)
    {
        return $this->conCadastro->updateEventos($titulo,$subtitulo,$descricao,$data_evento,$id_usuario,$igreja,$imagem,$tipo,$ativo,$banner,$url,$video,$pregador,$id);
        
    }
    // ////////////////////////////////////pagar ////////////
    ///////////////////////////////////////////////////////

    public function getPagar($id)
    {
        return $this->conCadastro->getPagar($id);
    }

    public function updatePagar($id,$descricao,$fornecedor,$valor,$frequencia,$vencimento,$usuario_cad,$pago,$igreja,$arquivo)
    {
        return $this->conCadastro->updatePagar($id,$descricao,$fornecedor,$valor,$frequencia,$vencimento,$usuario_cad,$pago,$igreja,$arquivo);
    }

    public function insertPagar($descricao,$fornecedor,$valor,$frequencia,$vencimento,$usuario_cad,$pago,$igreja,$arquivo)
    {
        return $this->conCadastro->insertPagar($descricao,$fornecedor,$valor,$frequencia,$vencimento,$usuario_cad,$pago,$igreja,$arquivo);
    }
    
    public function pagar($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "pagar/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "pagar/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "pagar/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}

public function deletePagar($dados)
{
    return $this->conCadastro->deletePagar($dados);
}
public function mudaStatusPagar($dados,$id)
{
    return $this->conCadastro->mudaStatusPagar($dados,$id);
}
public function insertMovimento($tipo,$movimento,$descricao,$valor,$id_usuario,$id_mov,$igreja)
{
    return $this->conCadastro->insertMovimento($tipo,$movimento,$descricao,$valor,$id_usuario,$id_mov,$igreja);
}
// ///////////////////////////receber///////////


public function getReceber($id)
{
    return $this->conCadastro->getReceber($id);
}

public function receber($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "receber/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "receber/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "receber/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}
public function insertReceber($descricao,$membro,$valor,$vencimento,$id_usuario,$pago,$igreja)
{
    return $this->conCadastro->insertReceber($descricao,$membro,$valor,$vencimento,$id_usuario,$pago,$igreja);
}
public function updateReceber($descricao,$membro,$valor,$vencimento,$id_usuario,$igreja,$id)
{
    return $this->conCadastro->updateReceber($descricao,$membro,$valor,$vencimento,$id_usuario,$igreja,$id);
}
public function deleteReceber($dados)
{
    return $this->conCadastro->deleteReceber($dados);
}
public function mudaStatusReceber($dados,$id)
{
    return $this->conCadastro->mudaStatusReceber($dados,$id);
}
// ://///////////////////////////////dizimos

public function dizimos($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "dizimos/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "dizimos/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "dizimos/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}
public function insertDizimos($membro,$valor,$id_usuario,$igreja,$data)
{
    return $this->conCadastro->insertDizimos($membro,$valor,$id_usuario,$igreja);
}
public function updateDizimos($membro,$valor,$id_usuario,$igreja,$data,$id)
{
    return $this->conCadastro->updateDizimos($membro,$valor,$id_usuario,$igreja,$data,$id);
}
public function getMembrosId($dados)
{
    return $this->conCadastro->getMembrosId($dados);
}

public function deleteDizimo($dados)
{
    return $this->conCadastro->deleteDizimo($dados);
}

// /////////////////////////////////////////////////////////////


public function ofertas($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "ofertas/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "ofertas/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "ofertas/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}
public function insertOfertas($membro,$valor,$id_usuario,$igreja,$data)
{
    return $this->conCadastro->insertOfertas($membro,$valor,$id_usuario,$igreja,$data);
}
public function updateOfertas($membro,$valor,$id_usuario,$igreja,$data,$id)
{
    return $this->conCadastro->updateOfertas($membro,$valor,$id_usuario,$igreja,$data,$id);
}

public function deleteOfertas($dados)
{
    return $this->conCadastro->deleteOfertas($dados);
}
// /////////////////////////////////////////////////////////////


public function doacoes($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "doacoes/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "doacoes/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "doacoes/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}
public function insertDoacoes($membro,$valor,$id_usuario,$igreja,$data)
{
    return $this->conCadastro->insertDoacoes($membro,$valor,$id_usuario,$igreja,$data);
}
public function updateDoacoes($membro,$valor,$id_usuario,$igreja,$data,$id)
{
    return $this->conCadastro->updateDoacoes($membro,$valor,$id_usuario,$igreja,$data,$id);
}

public function deleteDoacoes($dados)
{
    return $this->conCadastro->deleteDoacoes($dados);
}
// ///////////////////////////////////////
//  venda//////////////////////////


public function vendas($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "vendas/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "vendas/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "vendas/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}
public function insertVendas($descricao,$valor,$id_usuario,$igreja,$data)	
{
    return $this->conCadastro->insertVendas($descricao,$valor,$id_usuario,$igreja,$data);
}
public function updateVendas($descricao,$valor,$id_usuario,$igreja,$data,$id)
{
    return $this->conCadastro->updateVendas($descricao,$valor,$id_usuario,$igreja,$data,$id);
}

public function deleteVendas($dados)
{
    return $this->conCadastro->deleteVendas($dados);
}

// ///////////////////////////////////////
//  documentos//////////////////////////

public function getDocumentoId($dados)
{
    return $this->conCadastro->getDocumentoId($dados);
}

public function documentos($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "documentos/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "documentos/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "documentos/mudar-status.php";
                    break;
               
                                
        default:
            # code...
            break;
    }

}
public function insertDocumento($nome,$descricao,$data,$id_usuario,$imagem,$igreja)	
{
    return $this->conCadastro->insertDocumento($nome,$descricao,$data,$id_usuario,$imagem,$igreja);
}
public function updateDocumento($nome,$descricao,$data,$id_usuario,$imagem,$igreja,$id)
{
    return $this->conCadastro->updateDocumento($nome,$descricao,$data,$id_usuario,$imagem,$igreja,$id);
}

public function deleteDocumentos($dados)
{
    return $this->conCadastro->deleteDocumentos($dados);
}
// ///////////////////////////////////////
//  documentos//////////////////////////

public function getAnexosId($dados)
{
    return $this->conCadastro->getAnexosId($dados);
}

public function anexos($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "anexos/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "anexos/excluir.php";
                break;
                
                                
        default:
            # code...
            break;
    }

}
public function insertAnexos($nome,$descricao,$data,$id_usuario,$imagem,$igreja)	
{
    return $this->conCadastro->insertAnexos($nome,$descricao,$data,$id_usuario,$imagem,$igreja);
}
public function updateAnexos($nome,$descricao,$data,$id_usuario,$imagem,$id)
{
    return $this->conCadastro->updateAnexos($nome,$descricao,$data,$id_usuario,$imagem,$id);
}

public function deleteAnexos($dados)
{
    return $this->conCadastro->deleteAnexos($dados);
}
//////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

public function getPatrimonios($dados)
{
    return $this->conCadastro->getPatrimonios($dados);
}

public function Patrimonios($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "patrimonios/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "patrimonios/excluir.php";
                break;
                case 'mudar-status.php':
                    require_once "patrimonios/mudar-status.php";
                    break;
                    case 'obs.php':
                        require_once "patrimonios/obs.php";
                        break;
                        case 'transferir.php':
                            require_once "patrimonios/transferir.php";
                            break;
               
                                
        default:
            # code...
            break;
    }

}
public function insertPatrimonios($codigo,$nome,$descricao,$valor,$id_usuario,$data_cad,$igreja_cad,$igreja_item,$ativo,$entrada,$doador,$imagem)
{
    return $this->conCadastro->insertPatrimonios($codigo,$nome,$descricao,$valor,$id_usuario,$data_cad,$igreja_cad,$igreja_item,$ativo,$entrada,$doador,$imagem);
}
public function updatePatrimonios($codigo,$nome,$descricao,$valor,$entrada,$doador,$imagem,$id)
{
    return $this->conCadastro->updatePatrimonios($codigo,$nome,$descricao,$valor,$entrada,$doador,$imagem,$id);
}

public function deletePatrimonios($dados)
{
    return $this->conCadastro->deletePatrimonios($dados);
}

public function  mudarStatusPatrimonios($ativar,$id)
{
    return $this->conCadastro-> mudarStatusPatrimonios($ativar,$id);
}

public function obsPatrimonios($dados,$id)
{
    return $this->conCadastro->obsPatrimonios($dados,$id);
}

/////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
///////////////////////////////////////////////////

public function celulas($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "celulas/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "celulas/excluir.php";
                break;
                case 'add-membros.php':
                    require_once "celulas/add-membros.php";
                    break;
                    case 'excluir-membro.php':
                        require_once "celulas/excluir-membro.php";
                        break;
                        case 'obs.php':
                            require_once "celulas/obs.php";
                            break;
               
                                
        default:
            # code...
            break;
    }

}
public function getCelulas($nome,$igreja)
{
    return $this->conCadastro->getCelulas($nome,$igreja);
}
public function insertCelulas($nome,$dias,$hora,$local,$igreja,$pastor,$coordenador,$lider1,$lider2)
{
    return $this->conCadastro->insertCelulas($nome,$dias,$hora,$local,$igreja,$pastor,$coordenador,$lider1,$lider2);

}
public function updateCelulas($nome,$dias,$hora,$local,$pastor,$coordenador,$lider1,$lider2,$id)
{
    return $this->conCadastro->updateCelulas($nome,$dias,$hora,$local,$pastor,$coordenador,$lider1,$lider2,$id);
}
public function deleteCelulas($dados)
{
    return $this->conCadastro->deleteCelulas($dados);
}
public function deleteMembroCelulas($dados)
{
    return $this->conCadastro->deleteMembroCelulas($dados);
}

public function getCelulasMembrosId($igreja,$id_reg,$celula)
{
    return $this->conCadastro->getCelulasMembrosId($igreja,$id_reg,$celula);
}
public function addMembroCelulas($membro,$id,$igreja)
{
    return $this->conCadastro->addMembroCelulas($membro,$id,$igreja);
}
public function obsCelulas($dados,$id)
{
    return $this->conCadastro->obsCelulas($dados,$id);
}
/////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
///////////////////////////////////////////////////

public function grupos($page)
{
    // echo $page;die;
    switch ($page) {
        case 'inserir.php':
            require_once "grupos/inserir.php";
            // echo "inserir atualizar";
            break;
            case 'excluir.php':
                require_once "grupos/excluir.php";
                break;
                case 'add-membros.php':
                    require_once "grupos/add-membros.php";
                    break;
                    case 'excluir-membro.php':
                        require_once "grupos/excluir-membro.php";
                        break;
                        case 'obs.php':
                            require_once "grupos/obs.php";
                            break;
               
                                
        default:
            # code...
            break;
    }

}
public function getGrupos($nome,$igreja)
{
    return $this->conCadastro->getGrupos($nome,$igreja);
}
public function insertGrupos($nome,$dias,$hora,$local,$igreja,$pastor,$regente,$secretario,$tesoureiro,$lider1,$lider2)
{
    return $this->conCadastro->insertGrupos($nome,$dias,$hora,$local,$igreja,$pastor,$regente,$secretario,$tesoureiro,$lider1,$lider2);

}
public function updateGrupos($nome,$dias,$hora,$local,$pastor,$regente,$secretario,$tesoureiro,$lider1,$lider2,$id)
{
    return $this->conCadastro->updateGrupos($nome,$dias,$hora,$local,$pastor,$regente,$secretario,$tesoureiro,$lider1,$lider2,$id);
}
public function deleteGrupos($dados)
{
    return $this->conCadastro->deleteGrupos($dados);
}
public function deleteMembroGrupos($dados)
{
    return $this->conCadastro->deleteMembroGrupos($dados);
}

public function getGruposMembrosId($igreja,$id_reg,$celula)
{
    return $this->conCadastro->getGruposMembrosId($igreja,$id_reg,$celula);
}
public function addMembroGrupos($membro,$id,$igreja)
{
    return $this->conCadastro->addMembroGrupos($membro,$id,$igreja);
}
public function obsGrupos($dados,$id)
{
    return $this->conCadastro->obsGrupos($dados,$id);
}

}
?>
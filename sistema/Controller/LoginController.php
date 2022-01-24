
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="<?=ROTA_GERAL?>/js/alerta-tempo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
 @session_start();
class LoginController extends Controller
{
    public function login()
    {
        $this->mostrarIndex('index');
    }
    public function autenticar()
    {
        $usuario= $_POST['usuario'];
        $senha= $_POST['senha'];
        $login=new LoginModel();
        $dados=$login->autenticar($usuario,$senha);
        // var_dump($dados);
        $total_reg = count($dados);
        if($total_reg>0)
        {
            $_SESSION['nome_usuario'] = $dados[0]['nome'];
            $_SESSION['id_usuario'] = $dados[0]['id'];
            $_SESSION['nivel_usuario'] = $dados[0]['nivel'];
            $_SESSION['cpf_usuario'] = $dados[0]['cpf'];	
            $_SESSION['id_igreja'] = $dados[0]['igreja'];
            $this->direciona($dados[0]['nivel']);
        
        }else{
            echo "<script defer>$(function(){ alertaTempo('Dados Incorretos!!', '1000') });</script>";
            
        }
    }

    public function direciona($usuarionivel)
    {     
        switch ($usuarionivel) {
            case 'bispo':
                header('Location:'.ROTA_PAINEL.'/painel-igreja');
                break;
            
                case 'pastor':
                    echo "<script>window.location='".ROTA_PAINEL."painel-igreja'</script>";
                    break;

                    case 'tesoureiro':
                        echo "<script>window.location='painel-igreja'</script>";
                        break;

                        case 'secretario':
                            echo "<script>window.location='painel-igreja'</script>";
                            break;
            
            default:
                # code...
                break;
        }
                 

        
    }

}

?>
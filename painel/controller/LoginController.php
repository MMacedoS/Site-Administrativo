<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="<?=ROTA_GERAL?>/view/js/alerta-tempo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
require_once "./model/UsuarioModel.php";
@session_start();
    class LoginController extends controller {
        public function auth(){
            // $_SESSION['logado']="testet";
            // var_dump($_POST['senha']);
            // die;
            $usuarioModel = new UsuarioModel();
            $con=$usuarioModel->getUser($_POST['usuario'],$_POST['senha']);

            if(count($con)>0){           
            // echo "<script> window.alert('".count($con)."');window.location.href='http://localhost/sisigreja/'</script>";
            $_SESSION['nome']=$con[0]['nome'];
            $_SESSION['nivel']=$con[0]['nivel'];
            $_SESSION['email']=$con[0]['email'];
            $_SESSION['cpf']=$con[0]['cpf'];
            $_SESSION['id_pessoa']=$con[0]['id_pessoa'];
            $_SESSION['foto']=$con[0]['foto'];
            $_SESSION['logado']=time();
            echo "<script>window.location.href='http://localhost/sisigreja/'</script>";
            }else
            {
                echo "<script>$(function(){ alertaTempo('Dados Incorretos!!', '1000') });</script>";
            }

        }
        public function login(){
            // $_SESSION['logado']="testet";
            $this->Mostrar_index("login");
        }
        public function logout(){
            // $_SESSION['logado']="testet";
            // echo "<script>$(function(){ alertaTempo('Dados Incorretos!!', '1000') });</script>";
            @session_destroy();
            $usuarioModel = new UsuarioModel();
            $usuarioModel->Logout();
            echo "<script>window.location.href='http://localhost/sisigreja/'</script>";
        }
    }


?>
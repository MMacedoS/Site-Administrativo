<?php
require_once "./bd/Conexao.php";


class ConexaoModel extends Conexao
{

   public function conexao()
    {
      
        return $this->connect();

        
    }

    public function desconectar()
    {
      
        return $this->disconnect();

        
    }

}


?>
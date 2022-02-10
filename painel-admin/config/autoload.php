<?php

// echo $db;

spl_autoload_register(function($new){   
    $db = str_replace("\painel-admin","",DIR);  
        if(file_exists(DIR."Controller/".$new.".php"))
        {
            require_once DIR."Controller/".$new.".php";
    
        }elseif(file_exists(DIR."Rota/".$new.".php"))
        {
            require_once DIR."Rota/".$new.".php";
            
        }elseif(file_exists(DIR."Model/".$new.".php"))
        {
            require_once DIR."Model/".$new.".php";
            
        }elseif(file_exists($db."bd/".$new.".php"))
        {
            require_once $db."bd/".$new.".php";
            
        }
    });

?>
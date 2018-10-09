<?php
    
    foreach ($ongs as $c){
        echo $c->nome." - ".$c->cnpj;
        $link = base_url('ong/excluir/'.$c->id);
        echo "<a href='".$link."'>Excluir</a>";
        $link = base_url('ong/detalhes/'.$c->id);
        echo " - <a href='".$link."'>Detalhes</a>"; 
        $link = base_url('ong/editar/'.$c->id);
        echo " - <a href='".$link."'>Editar</a><br/>";
    }

?>
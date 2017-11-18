<?php

class Site
{
   
    private $cities = array('londres','brasilia','cotocolandia'); 

    
    public function mostrar_html()
    {
        echo $this->montar_html();
    }
    
}


$site = new Site;
$site->mostrar_html();
<?php

class Site
{
   
    private $cities = array('londres','brasilia','cotocolandia'); 

    
    public function mostrar_html()
    {
        echo "<ul>";
        
        foreach($this->cities as $city)
        {
            echo "<li> nome da cidade eh: " . $city . "</li>";
        }
        
        echo '</ul>';
    }
    
}


$site = new Site;
$site->mostrar_html();
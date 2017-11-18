<?php

class Site
{
   
    private $cities = array('londres','brasilia','cotocolandia'); 

    
    public function mostrar_html()
    {
        echo "<ul>";
        
        foreach($this->cities as $city)
        {
            echo "nome da cidade é: " . $city; 
        }
        
        echo '</ul>';
    }
    
}


$site = new Site;
$site->mostrar_html();
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Site
{
    private function montar_link() 
    {
        return 'https://www.youtube.com/watch?v=3AEjrz7wF6M';
    }
    
    private function montar_html()
    {
        return '<a href="'.$this->montar_link().'"></>';
    }
    
    public function mostrar_html()
    {
        echo $this->montar_html();
    }
    
}


$site = new Site;
$site->mostrar_html();
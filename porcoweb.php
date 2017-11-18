<?php

class Site
{
    private function montar_link() 
    {
        return 'https://www.youtube.com/watch?v=3AEjrz7wF6M';
    }
    
    private function montar_html()
    {
        return '<a href="'.$this->montar_link().'">Site do youtube</>';
    }
    
    public function mostrar_html()
    {
        echo $this->montar_html();
    }
    
}


$site = new Site;
$site->mostrar_html();
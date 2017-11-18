<?php

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
        echo montar_html();
    }
    
}

error_reporting(1);
Site::mostrar_html();
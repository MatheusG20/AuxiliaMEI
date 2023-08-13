<?php 
namespace Traits;

trait TraitParseUrl{
    #Criar um array com a url digitada pelo usuário
    public static function parseUrl($par=null)
    {
        $url = isset($_GET['url']) ? explode("/", rtrim($_GET['url'], FILTER_SANITIZE_URL)) : [];
        return ($par === null) ? $url : (isset($url[$par]) ? $url[$par] : null);
       
    }

}


?>
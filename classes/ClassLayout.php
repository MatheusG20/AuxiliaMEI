<?php 

namespace Classes;


class ClassLayout{

    public static function setHeadRestrito($permition)
    {
        $session=new ClassSessions();
        $session->verifyInsideSession($permition);
    }

    #tags do head
    public static function setHead($title, $description, $author='Matheus Gomes')
    {
        $html="<!DOCTYPE html>\n";
        $html.="<html lang='pt-br'>\n";
        $html.="<head>\n";
        $html.="  <meta charset='UTF-8'>\n";
        $html.="  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
        $html.="  <meta name='$author' content='$author'>\n";
        $html.="  <meta name='format-detection' content='telephone=no'>\n";
        $html.="  <meta name='$description' content='$description'>\n";
        $html.="  <link rel='stylesheet' href='".DIRPAGE."lib/css/style.css'>\n";
        $html.="  <link rel='icon' href='".DIRPAGE."/img/favicon.png' type='image/x-icon'>\n";
        $html.="  <title>$title</title>\n";
        $html.="</head>\n";
        $html.="<body>\n";
        echo $html;
    }

    #tags do footer
    public static function setFooter()
    {
        $html="<script src='".DIRPAGE."lib/js/zepto.min.js'></script>\n";
        $html.="<script src='".DIRPAGE."lib/js/vanilla-masker.min.js'></script>\n";
        $html.="<script src='https://www.google.com/recaptcha/api.js?render=".SITEKEY."'></script>\n";
        $html.="<script src='".DIRPAGE."lib/js/javascript.js'></script>\n";
        $html.="</body>\n";
        $html.="</html>";
        echo $html;

    }
}



?>
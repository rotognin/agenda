<?php

namespace Src\Controller;

class Controller
{
    public static function principal()
    {
        self::logout();
    }

    public static function logout()
    {
        session_unset();
        self::view('index');
    }

    public static function view(string $view, array $array = [])
    {
        $view = str_replace('.', DS, $view);
        $arquivo = '.' . DS . 'src' . DS . 'View' . DS . $view . '.php';

        if (!file_exists($arquivo)){
            echo '.... Arquivo não existe ... ' . $arquivo;
            die();
        }

        if (!empty($array)){
            foreach($array as $var => $valor){
                $$var = $var;
                $$var = $valor;
            }
        }

        ob_start();
        require_once $arquivo;
        $pagina = ob_get_contents();
        ob_end_clean();
        echo $pagina;
    }
}
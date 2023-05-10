<?php
    namespace App\Controllers\Errors;

    use \App\Utils\View;
    use \App\Controllers\Pages\Page;

    class PageNotFound extends Page {
        public static function getPage($req, $res) {
            $content = View::render('errors/404');
            $content = parent::getPage("Luna - Página não encontrada", $content);
            return $res->send(404, $content);
        }
    }
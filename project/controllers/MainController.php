<?php

namespace Project\Controllers;

use Core\Controller;

class MainController extends Controller
{
    public function init(){
        $this->title = 'Игра в бога';
        return $this->render('main/init');
    }
}
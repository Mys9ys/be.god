<?php

namespace Project\Controllers;

use Core\Controller;

class CompanyController extends Controller
{

    public function init(){
        var_dump('tyt');
        $this->title = 'Компании';
        return $this->render('company/init');
    }
}
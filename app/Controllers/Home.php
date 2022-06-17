<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Pigeot Ltda";
        return view('home_index', $data);
    }
    public function Companyinfo()
    {
        $data['title'] = "Pigeot Ltda";
        return view('home_hwa', $data);
    }
    public function contact()
    {
        $data['title'] = "Pigeot Ltda";
        return view('home_ctt', $data);
    }
    public function login()
    {
        $data['title'] = "Pigeot Ltda";
        return view('home_login', $data);
    }

}

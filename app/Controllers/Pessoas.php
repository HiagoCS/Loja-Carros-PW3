<?php namespace App\Controllers;

    class Pessoas extends BaseController{
        public function index(){
            $data['title'] = "Pigeot Ltda";
            $data['msg'] = '';
            return view("pessoas_register", $data);
        }
        public function login(){
            $data['title'] = 'Pigeot Ltda';
            $data['msg'] = '';
            return view("pessoas_login", $data);
        }
    }
?>
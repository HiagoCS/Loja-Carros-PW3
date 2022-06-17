<?php namespace App\Models;
    use CodeIgniter\Model;

    class PessoaModel extends Model{
        protected $table = "tb_pessoas";
        protected $primarykey = "id";
        protected $allowedFields = ['nome', 'email', 'senha'];
        protected $returnType = 'object';
    }

?>
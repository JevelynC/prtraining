<?php

namespace App\Models;

use CodeIgniter\Model;

class DataInputModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'nrp';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nrp', 'password'];

    public function tampilkan_data(){
        return $this
        ->db
        ->table($this->table)
        ->orderBy('nrp','ASC')
        ->get()
        ->getResult();
    }

    public function tambah_data($data){
        return $this->insert($data);
    }

    public function check_login($nrp, $password){
        return $this
            ->where('nrp',$nrp)
            ->where('password',$password)
            ->first();
    }

    public function fetch_data($NRP){
        return $this
        ->where('NRP',$NRP)
        ->first();
    }

    public function edit_data($data){
        return $this
        ->set([
            'password'=>$data['password'],
        ])
        ->where('nrp',$data['nrp'])
        ->update();

    }
}

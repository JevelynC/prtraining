<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataInputModel;

class DataInput extends BaseController{
    private $model;

    public function __construct(){
        $this->model=new DataInputModel();
    }

    public function home(){
        return view('kelas/home');
    }

    public function login(){
        return view('kelas/login');
    }
    
    public function index(){
        $data['title']='Kelola Admin';
        $data['data_admin']=$this->model->tampilkan_data();
        return view('kelas/index', $data);
    }

    public function tambah(){
        $data['title']='Tambah Admin';

        if(isset($_POST['submit'])){
            $validasi=[
                'nrp'=>[
                    'rules'=>'min_length[9]|max_length[9]|is_unique[admin.nrp]',
                    'errors'=>[
                        'min_length'=>'NRP harus 9 karakter!',
                        'max_length'=> 'NRP harus 9 karakter!',
                        'is unique'=>'NRP telah digunakan!'
                    ]
                ],
                'password'=>[
                    'rules'=> 'min_length[5]|max_length[30]',
                    'errors'=> [
                        'min_length'=>'Password minimal 5 dan maksimal 10 karakter',
                        'max_length'=> 'Password minimal 5 dan maksimal 10 karakter'
                    ]
                ]
            ];

            $error=false;
            $error_val=[];

            if(!$this->validate($validasi)){
                $error=true;
                $error_val=$this->validator->getErrors();
            }

            if($error){
                return redirect()
                    -> to(site_url('kelas/tambah'))
                    -> with('error_val',$error_val)
                    -> withInput();
            }
            
            $tambah_data=$this->model->tambah_data([
                'nrp'=> $this->request->getVar('nrp'),
                'password'=> $this->request->getVar('password')
            ]);

            if($this->model->db->affectedRows()>0){
                return redirect()
                    ->to(site_url('kelas/tambah'))
                    ->with('msg.success','Data berhasil ditambahkan');
            }

            return redirect()
                ->to(site_url('kelas/tambah'))
                ->with('msg.error','Data gagal ditambahkan');
        }

        return view('kelas/tambah',$data);
    }

    public function sunting($nrp){
        $data['title']= 'Edit Admin';
        $data['fetch_data']=$this->model->fetch_data($nrp);
        return view('kelas/sunting',$data);
    }

    public function validasi(){
        if($this->request->getPost('tombol')=='ya'){
            $nrp = $this->request->getVar('nrp');
            $password = $this->request->getVar('password');

            $validasi = $this->model->check_login($nrp, $password);

            
            if($validasi){
                session()->setFlashdata('swal_icon', 'success');
                session()->setFlashdata('swal_title', 'Berhasil Login');
                session()->setFlashdata('swal_text', 'Anda berhasil login');
                session()->setFlashdata('swal_showConfirmButton', false);
                session()->setFlashdata('swal_timer', 1500);
                return view('kelas/home');
            }
            
            // dd($validasi);
            return redirect()
                ->to(site_url(''))
                ->with('msg_error', 'Username atau Password tidak ditemukan');
        }
    }
}

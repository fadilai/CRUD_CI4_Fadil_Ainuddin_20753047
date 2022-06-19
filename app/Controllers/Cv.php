<?php
namespace App\Controllers;

use App\Models\DataDiri;

class Cv extends BaseController
{
    public function __construct()
    {
        $this->data = new DataDiri();


    }


    public function index()
    {
        echo view('/cv/cv', ['data' => $this->data->first()]);


    }

    ///tambah
    public function add()
    {
        echo view('/cv/add');
    }

    ///update
    public function update()
    {
        echo view('/cv/update', ['data' => $this->data->first()]);    
        
        
    }


    ///login
    public function login()
    {
        echo view('/cv/login');
    }

    public function logout()
    {
        echo view('/cv/logout');
    }

    ///tambah data
    public function simpan()
    {
         // lakukan validasi
         $validation =  \Config\Services::validation();
         $validation->setRules(['nama' => 'required']);
         $isDataValid = $validation->withRequest($this->request)->run();

        $this->data->save(
            [
                'nama' => $this->request->getVar('nama'),
                'tanggal_lahir' =>$this->request->getVar('tanggal_lahir'),
                'tempat_lahir' =>$this->request->getVar('tempat_lahir'),
                'alamat' =>$this->request->getVar('alamat'),
                'status' =>$this->request->getVar('status'),
                'agama' =>$this->request->getVar('agama'),
                'hobi' =>$this->request->getVar('hobi'),
                'contact' =>$this->request->getVar('contact'),
            ]
        );
        return redirect()->to('cv/add');
        {
            // tampilkan form tambah
        echo view('cv');
        }
    }
    
    public function hapus($id)
    {
        $datadiri = new DataDiri();
        $data = $datadiri->builder($id);
        if(isset($data))
        {
            $datadiri->hapusData($id);
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('datadiri').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID data '.$id.' Tidak ditemukan");
                    window.location="'.base_url('datadiri').'"
                </script>';
        }
    }

    

    public function up()
    {
        $data = new DataDiri();
        $id = $this->request->getPost('id');
        $id = array(
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir'=> $this->request->getPost('tanggal_lahir'),
            'tempat_lahir'=> $this->request->getPost('tempat_lahir'),
            'alamat'  => $this->request->getPost('alamat'),
            'status'  => $this->request->getPost('status'),
            'agama'  => $this->request->getPost('agama'),
            'hobi'  => $this->request->getPost('hobi'),
            'contact'  => $this->request->getPost('contact')

        );
        $data->editData($data,$id);
        echo '<script>
                alert("Sukses Edit Data");
                window.location="'.base_url('datadiri').'"
            </script>';
    }

        

// public function edit($id)
    // {
    //     $datadiri = new DataDiri();
    //     $data = $datadiri->builder($id);
    //     if(isset($data))
    //     {

    //         echo view('add', $datadiri);


    //     }else{

    //         echo '<script>
    //                 alert("ID '.$id.' Tidak ditemukan");
    //                 window.location="'.base_url('datadiri').'"
    //             </script>';
    //     }
    // }
}



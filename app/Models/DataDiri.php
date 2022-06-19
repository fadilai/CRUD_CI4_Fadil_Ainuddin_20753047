<?php

namespace App\Models;

use CodeIgniter\Model;

Class DataDiri extends Model {
    protected $table = 'datadiri';
    protected $allowedFields = ['nama', 'tempat_lahir','tanggal_lahir','alamat','status','agama', 'hobi', 'contact'];

    public function hapusData($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }

    public function editData($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }

}
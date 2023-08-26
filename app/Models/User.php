<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'email',
        'image',
        'password',
        'role',
        'is_active',
        'tanggal_input'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // public function simpanData($data = null)
    // {
    //     $this->db->insert('user', $data);
    // }

    // public function cekData($where = null)
    // {
    //     return $this->db->get_where('user', $where);
    // }

    // public function getUserWhere($where = null)
    // {
    //     return $this->db->get_where('user', $where);
    // }

    // public function cekUserAccess($where = null)
    // {
    //     $this->db->select('*');
    //     $this->db->from('access_menu');
    //     $this->db->where($where);
    //     return $this->db->get();
    // }

    // public function getUserLimit()
    // {
    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->limit(10, 0);
    //     return $this->db->get();
    // }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kategori';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_kategori'
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

    // //manajemen kategori
    public function getKategori()
    {
        $query = $this->db->table($this->table)->get();
        return $query;
    }

    public function kategoriWhere($id)
    {
        $query = $this->getWhere(['id' => $id]);
        return $query;
    }

    public function simpanKategori($data = null)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function hapusKategori($id = null)
    {
        $query = $this->db->table($this->table)->delete($id);
        return $query;
    }

    public function updateKategori($id = null, $data = null)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    // //join
    public function joinKategoriBuku()
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->join('buku', 'kategori.id_kategori = kategori.id');
        $query = $builder->get();
        return $query;
    }
}

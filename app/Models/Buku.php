<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'buku';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'judul_buku',
        'id_kategori',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'isbn',
        'stok',
        'dipinjam',
        'dibooking',
        'image'
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

    // manajemen buku
    public function getBuku()
    {
        $query = $this->db->table($this->table)->get();
        return $query;
    }

    public function bukuWhere($id)
    {
        $query = $this->getWhere(['id' => $id]);
        return $query;
    }

    public function simpanBuku($data = null)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateBuku($id, $data)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function hapusBuku($id = null)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }

    public function total($field, $where)
    {
        $this->db->table($this->table)->countAll($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->table($this->table)->where($where);
        }
        $this->db->table($this->table);
        return $this->db->table($this->table)->get($field);
    }
}

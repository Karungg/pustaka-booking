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

    //manajemen buku
    // public function getBuku()
    // {
    //     return $this->db->get('buku');
    // }

    public function bukuWhere($id)
    {
        $query = $this->getWhere(['id' => $id]);
        return $query;
    }

    // public function simpanBuku($data = null)
    // {
    //     $this->db->insert('buku', $data);
    // }

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

    // public function total($field, $where)
    // {
    //     $this->db->select_sum($field);
    //     if (!empty($where) && count($where) > 0) {
    //         $this->db->where($where);
    //     }
    //     $this->db->from('buku');
    //     return $this->db->get()->row($field);
    // }

    // //manajemen kategori
    // public function getKategori()
    // {
    //     return $this->db->get('kategori');
    // }

    // public function kategoriWhere($where)
    // {
    //     return $this->db->get_where('kategori', $where);
    // }

    // public function simpanKategori($data = null)
    // {
    //     $this->db->insert('kategori', $data);
    // }

    // public function hapusKategori($where = null)
    // {
    //     $this->db->delete('kategori', $where);
    // }

    // public function updateKategori($where = null, $data = null)
    // {
    //     $this->db->update('kategori', $data, $where);
    // }

    // //join
    // public function joinKategoriBuku($where)
    // {
    //     $this->db->select('buku.id_kategori,kategori.kategori');
    //     $this->db->from('buku');
    //     $this->db->join('kategori', 'kategori.id = buku.id_kategori');
    //     $this->db->where($where);
    //     return $this->db->get();
    // }
}

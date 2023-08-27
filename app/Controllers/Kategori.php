<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModelKategori;

class Kategori extends ResourceController
{
    private $kategori;
    private $db;
    // Inisiasi model dalam function constructor
    public function __construct()
    {
        $this->kategori = new ModelKategori();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $kategori = $this->kategori->findAll();

        return view('admin/kategori/index', [
            'kategori'  => $kategori
        ]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $request = \Config\Services::request();

        if (!$this->validate([
            'nama_kategori' => 'required|min_length[3]'
        ])) {
            return redirect()->to(base_url('admin/kategori'))->withInput()->with('error', 'Kategori gagal ditambahkan');
        }

        $data = $request->getPost();

        $this->kategori->insert($data);

        if ($this->kategori->affectedRows() > 0) {
            return redirect()->to(base_url('admin/kategori'))->withInput()->with('success', 'Kategori berhasil ditambahkan');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $query = $this->kategori->getWhere(['id_kategori' => $id]);

        $data = $query->getRow();

        return view('admin/kategori/update', [
            'data'  => $data
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $request = \Config\Services::request();

        if (!$this->validate([
            'nama_kategori' => 'required|min_length[3]'
        ])) {
            return redirect()->to(base_url('admin/kategori'))->withInput()->with('error', 'Kategori gagal diupdate');
        }

        $data = $request->getPost();
        unset($data['_method']);

        $this->kategori->where('id_kategori', $id)->set($data)->update();

        if ($this->kategori->affectedRows() > 0) {
            return redirect()->to(base_url('admin/kategori'))->withInput()->with('success', 'Kategori berhasil diupdate');
        } else {
            return redirect()->to(base_url('admin/kategori'))->withInput()->with('success', 'Kategori berhasil diupdate');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->kategori->where('id_kategori', $id)->delete();

        if ($this->kategori->affectedRows() > 0) {
            return redirect()->to(base_url('admin/kategori'))->withInput()->with('success', 'Kategori berhasil dihapus');
        }
    }
}

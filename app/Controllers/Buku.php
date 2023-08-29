<?php

namespace App\Controllers;

use App\Models\Buku as ModelsBuku;
use CodeIgniter\RESTful\ResourceController;

class Buku extends ResourceController
{
    private $buku;
    protected $helpers = ['form'];
    // Inisiasi model dalam function constructor
    public function __construct()
    {
        $this->buku = new ModelsBuku();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = $this->buku->findAll();

        return view('admin/buku/index', [
            'data'  => $data
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
        return view('admin/buku/add');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if (!$this->validate([
            'judul' => 'required|min_length[3]',
            'pengarang' => 'required|min_length[3]',
            'penerbit' => 'required|min_length[3]',
            'isbn' => 'required|min_length[3]',
            'stok' => 'required|min_length[1]',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,4096]'
        ])) {
            return redirect()->to(base_url('admin/buku/new'))->withInput()->with('errors', 'Isi data dengan benar');
        }

        $upload = $this->request->getFile('image');
        $upload->move(WRITEPATH . '../public/assets/images/');

        $data = array(
            'judul_buku'  => $this->request->getPost('judul'),
            'id_kategori'  => '1',
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun'),
            'isbn' => $this->request->getPost('isbn'),
            'stok' => $this->request->getPost('stok'),
            'dipinjam' => '1',
            'dipinjam' => '1',
            'image' => $upload->getName('image')
        );

        $this->buku->simpanBuku($data);

        if ($this->buku->affectedRows() > 0) {
            return redirect()->to(base_url('admin/buku'))->withInput()->with('success', 'Buku berhasil ditambahkan');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = $this->buku->bukuWhere($id)->getRow();

        return view('admin/buku/update', [
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

        if (!$this->validate([
            'judul' => 'required|min_length[3]',
            'pengarang' => 'required|min_length[3]',
            'penerbit' => 'required|min_length[3]',
            'isbn' => 'required|min_length[3]',
            'stok' => 'required|min_length[1]',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,4096]'
        ])) {
            return redirect()->to(base_url('admin/buku'))->withInput()->with('error', 'Buku gagal diupdate');
        }

        $dataold = $this->buku->bukuWhere($id)->getRow();
        $gambar = $dataold->image;
        $path = '../public/assets/images/';
        @unlink($path . $gambar);
        $upload = $this->request->getFile('image');
        $upload->move(WRITEPATH . '../public/assets/images/');

        $data = array(
            'judul_buku'  => $this->request->getPost('judul'),
            'id_kategori'  => '1',
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun'),
            'isbn' => $this->request->getPost('isbn'),
            'stok' => $this->request->getPost('stok'),
            'dipinjam' => '1',
            'dipinjam' => '1',
            'image' => $upload->getName('image')
        );

        $this->buku->where('id', $id)->set($data)->update();

        if ($this->buku->affectedRows() > 0) {
            return redirect()->to(base_url('admin/buku'))->withInput()->with('success', 'Buku berhasil diupdate');
        } else {
            return redirect()->to(base_url('admin/buku'))->withInput()->with('success', 'Buku berhasil diupdate');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $data = $this->buku->bukuWhere($id)->getRow();
        $this->buku->hapusBuku($id);
        $image = $data->image;

        $path = '../public/assets/images/';

        @unlink($path . $image);

        if ($this->buku->affectedRows() > 0) {
            return redirect()->to(base_url('admin/buku'))->withInput()->with('success', 'buku berhasil dihapus');
        }
    }
}

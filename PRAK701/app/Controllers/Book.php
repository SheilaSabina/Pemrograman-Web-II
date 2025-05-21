<?php

namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
        helper('form');
    }

    public function index()
    {
        $data['book'] = $this->bookModel->findAll();
        return view('book/index', $data);
    }

    public function create()
    {
        return view('book/create', [
            'validation' => session()->getFlashdata('validation')
        ]);
    }

    public function store()
    {
            $rules = [
        'judul' => [
            'rules' => 'required|alpha_space|is_unique[book.judul]',
            'errors' => [
                'required'   => 'Judul buku wajib diisi.',
                'alpha_space'=> 'Judul hanya boleh mengandung huruf dan spasi.',
                'is_unique'  => 'Judul buku ini telah digunakan, silakan masukkan judul lain.'
            ]
        ],
            'penulis'      => 'required|alpha_space',
            'penerbit'     => 'required|alpha_space',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2025]',
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul wajib diisi.',
                'alpha_space' => 'Judul hanya boleh huruf dan spasi.'
            ],
            'penulis' => [
                'required' => 'Penulis wajib diisi.',
                'alpha_space' => 'Penulis hanya boleh huruf dan spasi.'
            ],
            'penerbit' => [
                'required' => 'Penerbit wajib diisi.',
                'alpha_space' => 'Penerbit hanya boleh huruf dan spasi.'
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit wajib diisi.',
                'integer' => 'Tahun harus berupa angka.',
                'greater_than' => 'Tahun minimal 1801.',
                'less_than' => 'Tahun maksimal 2024.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->to('/book/create')->with('validation', $this->validator);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        $this->bookModel->insert($data);

        session()->setFlashdata('success', 'Data buku berhasil ditambahkan.');
        return redirect()->to('/book');
    }

    public function edit($id)
    {
        $book = $this->bookModel->find($id);

        if (!$book) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Buku dengan ID $id tidak ditemukan");
        }

        return view('book/edit', [
            'book' => $book,
            'validation' => session()->getFlashdata('validation')
        ]);
    }

    public function update($id)
    {
        $rules = [
            'judul'        => 'required|alpha_space',
            'penulis'      => 'required|alpha_space',
            'penerbit'     => 'required|alpha_space',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2025]',
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul wajib diisi.',
                'alpha_space' => 'Judul hanya boleh huruf dan spasi.'
            ],
            'penulis' => [
                'required' => 'Penulis wajib diisi.',
                'alpha_space' => 'Penulis hanya boleh huruf dan spasi.'
            ],
            'penerbit' => [
                'required' => 'Penerbit wajib diisi.',
                'alpha_space' => 'Penerbit hanya boleh huruf dan spasi.'
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit wajib diisi.',
                'integer' => 'Tahun harus berupa angka.',
                'greater_than' => 'Tahun minimal 1801.',
                'less_than' => 'Tahun maksimal 2024.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->to("/book/edit/$id")->withInput()->with('validation', $this->validator);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        $this->bookModel->update($id, $data);

        session()->setFlashdata('success', 'Data buku berhasil diperbarui.');
        return redirect()->to('/book');
    }

    public function delete($id)
    {
        $book = $this->bookModel->find($id);

        if (!$book) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Buku dengan ID $id tidak ditemukan");
        }

        $this->bookModel->delete($id);

        session()->setFlashdata('success', 'Data buku berhasil dihapus.');
        return redirect()->to('/book');
    }
}
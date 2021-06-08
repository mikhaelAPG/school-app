<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }
    
    public function index()
    {
        $data = [
            'guru' => $this->GuruModel->allData(),
        ];
        return view('guru', $data);
    }

    public function detail($id_guru)
    {
        if(!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('detailguru', $data);
    }

    public function add()
    {
        return view('addguru');
    }

    public function insert()
    {
        Request()->validate([
            'nip' => 'required|unique:tbl_guru,nip|min:4|max:5',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nip.required' => 'wajib diisi !!',
            'nip.unique' => 'NIP ini sudah ada !!!',
            'nip.min' => 'min 4 karakter', 
            'nip.max' => 'max 5 karakter',
            'nama_guru.required' => 'wajib diisi !!',
            'mapel.required' => 'wajib diisi !!',
            'foto_guru.required' => 'wajib diisi !!',
        ]);

        $file = Request()->foto_guru;
        $fileName = Request()->nip. '.' .$file->extension();
        $file->move(public_path('foto_guru'), $fileName);
    
        $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
            'foto_guru' => $fileName,
        ];

        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Ditambahkan !!!');
    }

    public function edit($id_guru)
    {
        if(!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('editguru', $data);
    }

    public function update($id_guru)
    {
        Request()->validate([
            'nip' => 'required|min:4|max:5',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ], [
            'nip.required' => 'wajib diisi !!',
            'nip.min' => 'min 4 karakter', 
            'nip.max' => 'max 5 karakter',
            'nama_guru.required' => 'wajib diisi !!',
            'mapel.required' => 'wajib diisi !!',
        ]);

        if (Request()->foto_guru <> "") {
            //jika ingin ganti foto
            $file = Request()->foto_guru;
            $fileName = Request()->nip. '.' .$file->extension();
            $file->move(public_path('foto_guru'), $fileName);
        
            $data = [
                'nip' => Request()->nip,
                'nama_guru' => Request()->nama_guru,
                'mapel' => Request()->mapel,
                'foto_guru' => $fileName,
            ];

            $this->GuruModel->editData($id_guru, $data);
        } else {
            //jika tidak ingin ganti foto
            $data = [
                'nip' => Request()->nip,
                'nama_guru' => Request()->nama_guru,
                'mapel' => Request()->mapel,
            ];

            $this->GuruModel->editData($id_guru, $data);
        }

        return redirect()->route('guru')->with('pesan', 'Data Berhasil Diupdate !!!');
    }
}

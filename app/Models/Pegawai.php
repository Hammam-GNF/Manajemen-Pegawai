<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawais';
    protected $guarded = ['id'];

    public static function rules($id = null)
    {
        return [
            'rules' => [
                'nama' => 'required|string|max:255',
                'jabatan' => 'required|string|max:255',
                'email' => 'required|email|unique:pegawais,email,' . $id,
                'tanggal_lahir' => 'required|date',
                'foto' => 'nullable|image|max:2048',
            ],
            'messages' => [
                'nama.required' => 'Nama harus diisi.',
                'nama.string' => 'Nama harus berupa string.',
                'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',
                'jabatan.required' => 'Jabatan harus diisi.',
                'jabatan.string' => 'Jabatan harus berupa string.',
                'jabatan.max' => 'Jabatan tidak boleh lebih dari 255 karakter.',
                'email.required' => 'Email harus diisi.',
                'email.email' => 'Email harus berupa format email yang valid.',
                'email.unique' => 'Email sudah terdaftar.',
                'tanggal_lahir.required' => 'Tanggal lahir harus diisi.',
                'tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
                'foto.image' => 'Foto harus berupa file gambar.',
                'foto.max' => 'Foto tidak boleh lebih dari 2 MB.',
            ]
        ];
    }

    public static function uploadRules()
    {
        return [
            'rules' => [
                'file' => 'required|image|max:2048',
            ],
            'messages' => [
                'file.required' => 'File gambar harus diupload.',
                'file.image' => 'File harus berupa gambar.',
                'file.max' => 'File tidak boleh lebih dari 2 MB.',
            ]
        ];
    }
}

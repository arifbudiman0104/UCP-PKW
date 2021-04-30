<?php

namespace App\Http\Livewire;
use App\Models\Mahasiswa;
use Livewire\Component;

class CreateMahasiswa extends Component
{
    public $nama;
    public $nim;
    public $alamat;

    public function render()
    {
        return view('livewire.create-mahasiswa');
    }

    public function createMahasiswa()
    {
        Mahasiswa::create([
            'nama' => $this->nama,
            'nim' => $this->nim,
            'alamat' => $this->alamat
        ]);
        $this->nama = "";
        $this->nim = "";
        $this->alamat = "";
    }
}

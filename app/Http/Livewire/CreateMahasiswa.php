<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;

class CreateMahasiswa extends Component
{
    public $select_id;
    public $nama;
    public $nim;
    public $alamat;
    public $updateMode = false;

    // Read Data
    public function render()
    {
        return view('livewire.create-mahasiswa', ['dataMahasiswa' => Mahasiswa::all()]);
    }

    // Delete Data
    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect('/mahasiswa');
    }
    // Update & Create Data
    public function store()
    {

        $this->validate([
            'nama' => 'required',
            'nim' => 'required',
            'alamat' => 'required'
        ]);
        Mahasiswa::updateOrCreate(['id' => $this->select_id], [
            'nama' => $this->nama,
            'nim' => $this->nim,
            'alamat' => $this->alamat
        ]);

        $this->select_id = "";
        $this->nama = "";
        $this->nim = "";
        $this->alamat = "";

        redirect('/mahasiswa');
    }

    //Edit Data
    public function edit($id)
    {
        $record = Mahasiswa::findOrFail($id);

        $this->select_id = $id;
        $this->nama = $record->nama;
        $this->nim = $record->nim;
        $this->alamat = $record->alamat;
    }
}

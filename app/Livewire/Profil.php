<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\Component;

class Profil extends Component
{
    use WithFileUploads;
    public $bukaFormulir;
    public $name;
    public $email;
    public $tempatlahir;
    public $tanggallahir;
    public $gambar;
    public function editData()
    {
        $this->bukaFormulir = true;
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->tempatlahir = Auth::user()->tempatlahir;
        $this->tanggallahir = Auth::user()->tanggallahir;
    }
    public function simpan()
    {
        $this->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::id())
            ],
            'tanggallahir' => 'date'
        ], [
            'name.required' => 'Mohon Isikan Nama Anda',
            'email.required' => 'Mohon Isikan Email',
            'email.email' => 'Mohon Isikan Format Email',
            'tanggallahir.date' => 'Isikan Berdasarkan Format Tanggal',
        ]);

        if ($this->gambar) {
            $namagambar = $this->gambar->store('koleksigambar', 'public');
        }
        $simpan = Auth::user();
        $simpan->name = $this->name;
        $simpan->email = $this->email;
        $simpan->tempatlahir = $this->tempatlahir;
        $simpan->tanggallahir = $this->tanggallahir;
        if(isset($namagambar)){
            $simpan->gambar = $namagambar;
        }
        $simpan->save();
        $this->bukaFormulir = false;
    }
    public function render()
    {
        return view('livewire.profil');
    }
}

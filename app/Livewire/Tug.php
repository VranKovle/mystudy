<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\tugas;
use Livewire\Component;

class Tug extends Component
{
    public $judultugas;
    public function simpan(){
        $simpan = new tugas();
        $simpan->user_id = auth()->user()->id;
        $simpan->jdl = $this->judultugas;
        $simpan->save();
    }
    public function hapus($id)
    {
        tugas::destroy($id);
        $this->render();
    }
    public function render()
    {
        return view('livewire.tug', [
            'semuatugas' => tugas::all()
        ]);
    }
}

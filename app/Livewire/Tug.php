<?php

namespace App\Livewire;

use App\Models\tugas;
use Livewire\Component;

class Tug extends Component
{
    public $judultugas;
    public function simpan(){
        $simpan = new tugas();
        $simpan->jdl = $this->judultugas;
        $simpan->save();
    }
    public function hapus($id)
    {
        // Use the destroy method to delete a record by its ID
        tugas::destroy($id);

        // Optionally, you can reload the data after deletion
        $this->render();
    }
    public function render()
    {
        return view('livewire.tug', [
            'semuatugas' => tugas::all()
        ]);
    }
}

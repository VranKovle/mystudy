<?php

namespace App\Livewire;

use App\Models\informasi;
use Livewire\Component;

class Info extends Component
{
    public $judul;
    public $isi;

    public function simpan(){
        $simpan = new informasi();
        $simpan->joedoel = $this->judul;
        $simpan->isinya = $this->isi;
        $simpan->save();
    }
    public function hapus($id)
    {
        // Use the destroy method to delete a record by its ID
        informasi::destroy($id);

        // Optionally, you can reload the data after deletion
        $this->render();
    }
    public function edit($id)
    {
        $data = informasi::findOrfail($id);
    }
    public function update($id){
        $simpan = informasi::findOrfail($id);
        $simpan->joedoel = $this->judul;
        $simpan->isinya = $this->isi;
        $simpan->save();
    }
    public function render()
    {
        $informasi = informasi::all();

        return view('livewire.info', compact('informasi'));
    }
}

<?php

namespace App\Livewire;

use App\Models\material;
use Livewire\Component;

class Materi extends Component
{
    public $data;
    public function mount($data)
    {
     $this->data = $data;
    }
    public $materijudul;
    public $materiisi;
    public function simpan(){
        $simpan = new material();
        $simpan->tugas_id = $this->data->id;
        $simpan->judulmateri = $this->materijudul;
        $simpan->isimateri = $this->materiisi;
        $simpan->save();
    }
    public function render()
    {
    $material = Material::where('tugas_id', $this->data->id)->get();
    return view('livewire.materi', ['material' => $material]);
    }
}

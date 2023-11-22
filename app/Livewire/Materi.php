<?php

namespace App\Livewire;

use App\Models\material;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

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
    public function hapus($id){
        material::destroy($id);
        return redirect()->to('/tugas/' . $this->data->id);
    }
    public function edit($id){
        $simpan = material::findOrfail($id);
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

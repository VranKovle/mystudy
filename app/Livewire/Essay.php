<?php

namespace App\Livewire;

use App\Models\pertanyaan;
use Livewire\Component;

class Essay extends Component
{
    public $data;
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function mount($data)
    {
        $this->data = $data;
    }
    public $soal;
    public function simpan()
    {
        $simpan = new pertanyaan();
        $simpan->tugas_id = $this->data->id;
        $simpan->isisoal = $this->soal;
        $simpan->save();
        $this->dispatch('refreshComponent');
        //return redirect()->to('/tugas/{idtugas}');
    }
    public function render()
    {
        $pertanyaan = pertanyaan::where('tugas_id', $this->data->id)->get();
        return view('livewire.essay', ['pertanyaan' => $pertanyaan]);
    }
}

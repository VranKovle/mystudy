<?php

namespace App\Livewire;

use App\Models\pertanyaan;
use Livewire\Attributes\On;
use Livewire\Component;

class Essay extends Component
{
    public $data;
    public $soal;
    public function mount($data)
    {
        $this->data = $data;
    }

    public function simpan()
    {
        $simpan = new pertanyaan();
        $simpan->tugas_id = $this->data->id;
        $simpan->isisoal = $this->soal;
        $simpan->save();
        $this->dispatch('refresh');
        return back();
    }
    public function edit($id)
    {
        $simpan = pertanyaan::findOrfail($id);
        $simpan->isisoal = $this->soal;
        $simpan->save();
    }
    public function hapus($id)
    {
        pertanyaan::destroy($id);
    }
    public function render()
    {

        $pertanyaan = pertanyaan::where('tugas_id', $this->data->id)->get();
        return view('livewire.essay', ['pertanyaan' => $pertanyaan]);
    }
}

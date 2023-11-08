<?php

namespace App\Livewire;

use App\Models\answer;
use Livewire\Component;

class Jawaban extends Component
{

    public $jawab;
    public $nilainya;
    public $data;
    public $pertanyaan_id;

    public function mount($data)
    {
        $this->data = $data;
    }

    public function simpan()
    {
        $simpan = new answer();
        $simpan->tugas_id = $this->data->tugas_id;
        $simpan->pertanyaan_id = $this->data->id;
        $simpan->user_id = auth()->user()->id;
        $simpan->jawaban = $this->jawab;
        $simpan->save();
        // return redirect()->to('/tugas/' . $this->data->tugas_id);
    }
    public function hapus($id)
    {
        answer::destroy($id);
    }
    public function edit($id)
    {
        $simpan = answer::findOrfail($id);
        $simpan->nilai = $this->nilainya;
        $simpan->save();
    }
    public function render()
    {
        $answer = answer::all();
        $answer = answer::where('pertanyaan_id', $this->data->id)->get();
        return view('livewire.jawaban', ['answer' => $answer]);
    }
}

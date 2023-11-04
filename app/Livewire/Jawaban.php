<?php

namespace App\Livewire;

use App\Models\answer;
use Livewire\Component;

class Jawaban extends Component
{

    public $jawab;
    public $nilainya;
    public $data;

    public function mount($data)
    {
        $this->data = $data;
    }

    public function simpan()
    {

        $simpan = new answer(); //hati hati disini ya, jika diperlukan, relasikan antara pertanyaan dengan answer
        $simpan->user_id = auth()->user()->id;
        $simpan->jawaban = $this->jawab;
        $simpan->save();
        return redirect()->to('/tugas/' . $this->data->tugas_id);
    }
    public function hapus($id)
    {
        answer::destroy($id);
        return redirect()->to('/tugas/' . $this->data->tugas_id);
    }
    public function edit($id)
    {
        $simpan = answer::findOrfail($id);
        $simpan->nilai = $this->nilainya;
        $simpan->save();
        return redirect()->to('/tugas/' . $this->data->tugas_id);
    }
    public function render()
    {
        $answer = answer::all();
        return view('livewire.jawaban', ['answer' => $answer]);
    }
}

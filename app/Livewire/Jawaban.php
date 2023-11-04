<?php

namespace App\Livewire;

use App\Models\answer;
use Livewire\Component;

class Jawaban extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $jawab;
    public $nilainya;
    public function simpan(){
        $simpan = new answer();
        $simpan->user_id = auth()->user()->id;
        $simpan->jawaban = $this->jawab;
        $simpan->save();
        $this->emit('refreshComponent');
    }
    public function hapus($id)
    {
        answer::destroy($id);
        $this->dispatch('refreshComponent');
    }
    public function edit($id){
        $simpan = answer::findOrfail($id);
        $simpan->nilai = $this->nilainya;
        $simpan->save();
        $this->dispatch('refreshComponent');
    }
    public function render()
    {
        $answer = answer::all();
        return view('livewire.jawaban', ['answer' => $answer]);
    }
}

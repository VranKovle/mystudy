<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;

class Darkmode extends Component
{
    public $mode;
    public function change(){
        $change = Auth::user();
        $change->mode = $this->mode;
        $change->save();
        return redirect('/settings');
    }
    public function render()
    {
        return view('livewire.darkmode');
    }
}

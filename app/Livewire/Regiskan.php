<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Regiskan extends Component
{
    use LivewireAlert;
    public $name;
    public $email;
    public $password;
    public $peran;
    public function simpan(){
        // $this->validate([
        //     'name' => 'required',
        //     'email' => [
        //         'required',
        //         'email',
        //         Rule::unique('users')->ignore(Auth::id())
        //     ],
        // ], [
        //     'name.required' => 'Mohon Isikan Nama Anda',
        //     'email.required' => 'Mohon Isikan Email',
        //     'email.email' => 'Mohon Isikan Format Email',

        // ]);

        $simpan = new User();
        $simpan->name = $this->name;
        $simpan->email = $this->email;
        $simpan->password = bcrypt($this->password);
        $simpan->peran = $this->peran;
        $simpan->save();
        $this->alert('success', 'Basic Alert');
    }
    public function render()
    {
        return view('livewire.regiskan');
    }
}

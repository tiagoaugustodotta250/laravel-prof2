<?php

namespace App\Livewire;

use Livewire\Component;

class Alunos extends Component
{
    public function render()
    {
        return view('livewire.alunos')->layout('layouts.app');
    }
}

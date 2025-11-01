<?php

namespace App\Livewire;

use Livewire\Component;

class Alunos extends Component
{
    public $nome;
    public $email;
    public $telefone;
    public $nascimento;
    public $curso;

    public function render()
    {
        return view('livewire.alunos')->layout('layouts.app');
    }

    public function store(){
        
    }

    public function update(){

    }

    public function delete(){

    }
}

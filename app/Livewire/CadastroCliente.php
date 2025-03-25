<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class CadastroCliente extends Component
{ 
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    public function render()
    {
        return view('livewire.cadastro-cliente');
    }
    public function store(){ 
      Cliente::create([
        'nome'=>$this->nome,
        'endereco'=>$this->endereco,
        'telefone'=>$this->telefone,
        'cpf'=>$this->cpf,
        'email'=>$this->email,
        'senha'=>$this->senha,
      ]);

      session()->flash('success', 'Cadastro Realizado');
    
}
    }

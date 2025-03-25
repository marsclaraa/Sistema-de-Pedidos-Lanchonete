<?php

namespace App\Livewire;

use Livewire\Component;

class Produto extends Component
{
        public $nome;
        public $ingredientes;
        public $valor;
    
        protected $rules = [
            'nome' => 'required|max:100',
            'ingredientes' => 'required',
            'valor' => 'required|decimal',
    
        ]
    
        protected $messages = [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O limite maxímo de caracteres foi atingido',
            'ingredientes.required' => 'Os ingredientes são obrigatórios',
            'valor.required' => 'O campo CPF é obrigatório'
    
        ];
    
    
        public function render()
    
        {
            return view('livewire.produto');
        }
    
        public function store()
        {
            $this->validate();
    
            Cliente::create([
                'nome' => $this->nome,
                'ingredientes' => $this->ingredientes,
                'valor' => $this->valor
               
            ]);
    
            session()->flash('success', 'Cadastro Realizado');
        }
    }
    
    }


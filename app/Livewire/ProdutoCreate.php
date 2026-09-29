<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $categoria;
    public $cor;
    public $textura;
    public $peso;
    public $data_validade;
    public $aplicacao;

    public function store()
    {
        $produto = Produto::create([

            'categoria' => $this->categoria,
            'cor' => $this->cor,
            'textura' => $this->textura,
            'peso' => $this->peso,
            'data_validade' => $this->data_validade,
            'aplicacao' => $this->aplicacao

        ]);

       
        session()->flash('success', 'Produto cadastrado com sucesso!');
        return redirect()->route('produtos.index');
    }


    public function render()
    {
        return view('livewire.produto-create');
    }
}

<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{

    public $categoria;
    public $cor;
    public $textura;
    public $peso;
    public $data_validade;
    public $aplicacao;
    public $produtoId;

    public function mount()
    {
        $produto = Produto::find($id);

        $this->categoria = $produto->categoria;
        $this->cor = $produto->cor;
        $this->textura = $produto->textura;
        $this->peso = $produto->peso;
        $this->data_validade = $produto->data_validade;
        $this->aplicacao = $produto->aplicacao;
    }

    public function update()
    {
        $produto = Produto::find($id);

        if()

        $produto->categoria = $this->categoria;
        $produto->cor = $this->cor;
        $produto->textura = $this->textura;
        $produto->peso = $this->peso;
        $produto->data_validade = $this->data_validade;
        $produto->aplicacao = $this->aplicacao;

        $this->save();
        session()->flash('success', 'Produto cadastrado com sucesso!');
        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produto-edit');
    }
}

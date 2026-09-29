<div class="mt-5">
    <form wire:submit='update'>

    <h2><b>Cadastrar produto</b></h2>
    <br>

    <p><b>Categoria</b></p>
    <input type="text" wire:model="categoria">
    <br><br>
    <p><b>Cor</b></p>
    <input type="text" wire:model="cor">
    <br><br>
    <p><b>Textura</b></p>
    <input type="text" wire:model="textura">
    <br><br>
    <p><b>Peso</b></p>
    <input type="text" wire:model="peso">
    <br><br>
    <p><b>Data de validade</b></p>
    <input type="date" wire:model="data_validade">
    <br><br>
    <p><b>Aplicação</b></p>
    <input type="text" wire:model="aplicacao">
    <br><br>
    <button type="submit"><b>Salvar</b></button>


    </form>
</div>

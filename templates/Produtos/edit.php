<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 * @var string[]|\Cake\Collection\CollectionInterface $categoriasProdutos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Você tem certeza que quer deletar # {0}?', $produto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos form content">
            <?= $this->Form->create($produto) ?>
            <fieldset>
                <legend><?= __('Editar Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome_produto');
                    echo $this->Form->control('categorias_produto_id', ['options' => $categoriasProdutos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

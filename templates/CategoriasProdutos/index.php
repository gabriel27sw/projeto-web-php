<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto[]|\Cake\Collection\CollectionInterface $categoriasProdutos
 */
?>
<div class="categoriasProdutos index content">
    <?= $this->Html->link(__('Criar Categoria'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias de Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_categoria', 'Nome da Categoria') ?></th>
                    <th><?= $this->Paginator->sort('created', 'Criado') ?></th>
                    <th><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoriasProdutos as $categoriasProduto): ?>
                <tr>
                    <td><?= $this->Number->format($categoriasProduto->id) ?></td>
                    <td><?= h($categoriasProduto->nome_categoria) ?></td>
                    <td><?= h($categoriasProduto->created) ?></td>
                    <td><?= h($categoriasProduto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $categoriasProduto->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoriasProduto->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $categoriasProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasProduto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <!-- <p><?//= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p> -->
    </div>
</div>

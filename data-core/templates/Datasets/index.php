<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dataset> $datasets
 */
?>
<div class="datasets index content">
    <?= $this->Html->link(__('New Dataset'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Datasets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('dataset_name') ?></th>
                    <th><?= $this->Paginator->sort('dataset_type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datasets as $dataset): ?>
                <tr>
                    <td><?= h($dataset->id) ?></td>
                    <td><?= h($dataset->dataset_name) ?></td>
                    <td><?= $this->Number->format($dataset->dataset_type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dataset->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataset->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $dataset->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $dataset->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
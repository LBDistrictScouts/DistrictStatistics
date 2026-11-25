<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dataset $dataset
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dataset'), ['action' => 'edit', $dataset->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dataset'), ['action' => 'delete', $dataset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataset->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Datasets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dataset'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="datasets view content">
            <h3><?= h($dataset->dataset_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($dataset->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dataset Name') ?></th>
                    <td><?= h($dataset->dataset_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dataset Type') ?></th>
                    <td><?= $this->Number->format($dataset->dataset_type) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
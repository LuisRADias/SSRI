<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $login->usuario],
                ['confirm' => __('Tem certeza que deseja deletar # {0}?', $login->usuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="login form large-10 medium-9 columns">
    <?= $this->Form->create($login); ?>
    <fieldset>
        <legend><?= __('Editar Usuário') ?></legend>
        <?php
            echo $this->Form->input('senha');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>

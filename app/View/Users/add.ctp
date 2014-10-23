<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Usuario'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Administrador', 'teacher' => 'Profesor', 'student' => 'Estudiante')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
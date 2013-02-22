<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
    
    <?php echo $this->Facebook->login(array('perms' => 'email,publish_stream')); ?>
    
    <?php echo $this->Facebook->registration(array(
                'fields' => 'name,gender,location,email',
                'width' => 600,
                'redirect-uri' => 'http://localhost/posts/index'
            )); ?>
</div>
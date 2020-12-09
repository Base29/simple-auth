<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Register</h2>
        <?= $this->Form->create($user); ?>
        <?= $this->Form->control('name', ['type' => 'text']); ?>
        <?= $this->Form->control('email', ['type' => 'email']); ?>
        <?= $this->Form->control('password', ['type' => 'password']); ?>
        <?= $this->Form->submit('Register', ['class' => 'button']); ?>
        <?= $this->Form->end(); ?>
    </div>
</div>
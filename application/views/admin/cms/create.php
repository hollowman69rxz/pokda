<?php $this->load->view('admin/templates/header'); ?>

<div class="container">
    <h4><?= $title; ?></h4>
    <form action="<?= base_url('cms/store'); ?>" method="POST">
        <div class="input-field">
            <input type="text" name="title" id="title" required>
            <label for="title">Title</label>
        </div>
        <div class="input-field">
            <textarea name="content" id="content" class="materialize-textarea" required></textarea>
            <label for="content">Content</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Save</button>
    </form>
</div>

<?php $this->load->view('admin/templates/footer'); ?>
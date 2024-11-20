<?php $this->load->view('admin/templates/header'); ?>

<div class="container">
    <h4><?= $title; ?></h4>
    <form action="<?= base_url('cms/update/' . $content->id); ?>" method="POST">
        <div class="input-field">
            <input type="text" name="title" id="title" value="<?= $content->title; ?>" required>
            <label for="title" class="active">Title</label>
        </div>
        <div class="input-field">
            <textarea name="content" id="content" class="materialize-textarea" required><?= $content->content; ?></textarea>
            <label for="content" class="active">Content</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Update</button>
    </form>
</div>

<?php $this->load->view('admin/templates/footer'); ?>
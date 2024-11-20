<?php $this->load->view('admin/templates/header'); ?>

<div class="container">
    <h4><?= $title; ?></h4>
    <a href="<?= base_url('cms/create'); ?>" class="btn waves-effect waves-light">Add New Content</a>
    <table class="striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contents as $content): ?>
                <tr>
                    <td><?= $content->title; ?></td>
                    <td><?= substr($content->content, 0, 50) . '...'; ?></td>
                    <td>
                        <a href="<?= base_url('cms/edit/' . $content->id); ?>" class="btn-small blue">Edit</a>
                        <a href="<?= base_url('cms/delete/' . $content->id); ?>" class="btn-small red" onclick="return confirm('Delete this content?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->load->view('admin/templates/footer'); ?>

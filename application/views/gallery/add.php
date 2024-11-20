<div class="container">
    <h4>Tambah Gambar</h4>
    <?php if ($this->session->flashdata('error')): ?>
        <div class="red-text"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>
    <form action="<?= base_url('gallery/store'); ?>" method="POST" enctype="multipart/form-data">
        <div class="input-field">
            <input type="text" name="title" id="title" required>
            <label for="title">Judul Gambar</label>
        </div>
        <div class="file-field input-field">
            <div class="btn">
                <span>Upload</span>
                <input type="file" name="image" required>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload gambar">
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Simpan</button>
    </form>
</div>

<div class="container">
    <h4>Galeri</h4>
    <a href="<?= base_url('gallery/add'); ?>" class="btn waves-effect waves-light">Tambah Gambar</a>
    <br><br>
    <div class="row">
        <?php foreach ($gallery as $image): ?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url('uploads/gallery/' . $image['image']); ?>" alt="<?= $image['title']; ?>">
                    </div>
                    <div class="card-content">
                        <p><?= $image['title']; ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?= base_url('gallery/delete/' . $image['id']); ?>" class="red-text" 
                           onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">Hapus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

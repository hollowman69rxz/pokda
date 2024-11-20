<div class="container">
    <h4>Hubungi Kami</h4>
    <form action="<?= base_url('contact/send'); ?>" method="POST">
        <div class="input-field">
            <input type="text" name="name" id="name" required>
            <label for="name">Nama</label>
        </div>
        <div class="input-field">
            <input type="email" name="email" id="email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-field">
            <textarea name="message" id="message" class="materialize-textarea" required></textarea>
            <label for="message">Pesan</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Kirim</button>
    </form>
</div>

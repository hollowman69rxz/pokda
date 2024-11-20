<div class="container">
    <!-- Tentang Kami -->
    <h4 class="center-align">Tentang Kami</h4>
    
    <div class="row">
        <div class="col s12 m6">
            <div class="card uniform-card">
                <div class="card-content">
                    <span class="card-title">Visi</span>
                    <p>
                        <?= $about['vision']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card uniform-card">
                <div class="card-content">
                    <span class="card-title">Misi</span>
                    <ul class="browser-default">
                        <?php foreach (explode("\n", $about['mission']) as $mission): ?>
                            <li><?= $mission; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <!-- <span class="card-title">Tentang Pokdakan Ululai Sejati</span> -->
                    <p>
                        <b>Pokdakan Ululai Sejati</b> merupakan kelompok pembudidaya ikan air tawar yang berdiri sejak tahun 2024. 
                        Kami berkomitmen untuk menyediakan solusi inovatif bagi budidaya ikan yang ramah lingkungan dan berkelanjutan. 
                        Melalui usaha ini, kami tidak hanya meningkatkan hasil panen, tetapi juga mendukung kesejahteraan anggota komunitas kami.
                    </p>
                </div>
                <div class="card-action">
                    <a href="<?= base_url('gallery'); ?>" class="blue-text">Kunjungi Galeri Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
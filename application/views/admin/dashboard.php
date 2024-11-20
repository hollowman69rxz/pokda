<?php $this->load->view('admin/templates/header'); ?>

<div class="container">
    <h4>Selamat Datang, <?= $this->session->userdata('user_name'); ?>!</h4>
    <div class="row">
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Total Pengguna</span>
                    <p>Jumlah pengguna terdaftar: <strong>123</strong></p>
                </div>
                <div class="card-action">
                    <a href="#">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Pesan Kontak</span>
                    <p>Pesan baru: <strong>10</strong></p>
                </div>
                <div class="card-action">
                    <a href="#">Lihat Pesan</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Statistik</span>
                    <p>Kunjungan hari ini: <strong>45</strong></p>
                </div>
                <div class="card-action">
                    <a href="#">Lihat Statistik</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/templates/footer'); ?>
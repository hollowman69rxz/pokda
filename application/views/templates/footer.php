<footer class="footer">
    <div class="container">
        <p>&copy; 2024 POKDAKAN ULULAI SEJATI. All rights reserved.</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?= base_url('assets/js/materialize.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const sliders = document.querySelectorAll('.slider');
    M.Slider.init(sliders, {
        indicators: true, // Menampilkan titik navigasi
        height: 500,      // Tinggi slider
        interval: 6000,   // Interval antar slide
        duration: 500     // Durasi transisi
        });
    });

    // Initialize Sidenav
    document.addEventListener('DOMContentLoaded', function () {
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
    });

    // Inisialisasi Dropdown
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(elems, {
            constrainWidth: false, // Membuat dropdown mengikuti lebar konten
            coverTrigger: false    // Agar dropdown tidak menutupi trigger
        });
    });

</script>

</body>
</html>

</div> <!-- End of container -->

<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Admin Panel</h5>
                <p class="grey-text text-lighten-4">Manage your website efficiently with the admin panel.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Quick Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></li>
                    <li><a class="grey-text text-lighten-3" href="<?= base_url('cms'); ?>">CMS</a></li>
                    <li><a class="grey-text text-lighten-3" href="<?= base_url('users'); ?>">Users</a></li>
                    <li><a class="grey-text text-lighten-3" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © <?= date('Y'); ?> POKDAKAN Admin Panel
            <a class="grey-text text-lighten-4 right" href="#!">More Info</a>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    // Initialize mobile navigation
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        M.Sidenav.init(elems);
    });
</script>
</body>
</html>

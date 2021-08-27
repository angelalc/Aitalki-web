<?php wp_footer(); ?>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__links">
            <nav>
                <ul>
                    <li>
                        <a href="<?= get_permalink(15); ?>">Platform</a>
                    </li>
                    <li>
                        <a href="#">Plan</a>
                    </li>
                    <li>
                        <a href="#">Enterprise</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer__logo">
            <p>Proyecto realizado por</p>
            <div class="footer__logo-img">
                <a href="#">
                    <img src="<?php bloginfo('template_url') ?>/dist/img/logo_02.png" alt="Essedi">
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Bodymovin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js" type="text/javascript"></script>
<!-- End Bodymovin -->
<!-- JS -->
<script src="<?php bloginfo('template_url') ?>/dist/js/main.js"></script>
<!-- End JS -->

</body>
</html>

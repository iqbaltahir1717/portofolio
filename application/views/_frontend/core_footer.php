        <footer id="footer" class="main-font" style="background-color: #272727;">
            <div class="footer-top" style="background-color: #272727;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 footer-info">
                            <h2 class="color-1 weight-600 second-font">Get in touch</h2>
                            <p style="color:#A6A6A6;margin-right:50px"><?php echo $setting[0]->setting_running_text; ?></p>
                            <p style="margin-top:10px">Total Visit : <?= $setting[0]->setting_kunjungan; ?>x</p>

                        </div>
                        <div class="col-lg-3 col-md-3 footer-links">
                            <h4 class="color-1">Other Pages</h4>
                            <ul>
                                <?php foreach ($link as $l) { ?>
                                    <li><i class="bx bx-chevron-right" style="color:#fff"></i> <a target="_blank" href="<?php echo $l->link_url; ?>"><?php echo $l->link_name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright color-1">
                    &copy; Build with 🔥 <strong><span> by <?php echo $setting[0]->setting_owner_name; ?></span></strong>
                </div>
            </div>
        </footer><!-- End Footer -->
        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
        <div id="preloader"></div>
        <!-- Vendor JS Files -->
        <script src="<?php echo base_url() ?>assets/core-front/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/php-email-form/validate.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/venobox/venobox.min.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/aos/aos.js"></script>
        <script src="<?php echo base_url() ?>assets/core-front/vendor/glightbox/js/glightbox.min.js"></script>
        <!-- Template Main JS File -->
        <script src="<?php echo base_url() ?>assets/core-front/js/main.js"></script>
        <script language="JavaScript" type="text/javascript">
            $(document).ready(function() {
                $('.carousel').carousel({
                    interval: 5000
                })
            });
        </script>
        <script>
            var lightbox = GLightbox();
            lightbox.on('open', (target) => {
                console.log('lightbox opened');
            });
            var lightboxDescription = GLightbox({
                selector: '.glightbox2'
            });
            var lightboxVideo = GLightbox({
                selector: '.glightbox3'
            });
            lightboxVideo.on('slide_changed', ({
                prev,
                current
            }) => {
                console.log('Prev slide', prev);
                console.log('Current slide', current);
                const {
                    slideIndex,
                    slideNode,
                    slideConfig,
                    player
                } = current;
                if (player) {
                    if (!player.ready) {
                        // If player is not ready
                        player.on('ready', (event) => {
                            // Do something when video is ready
                        });
                    }
                    player.on('play', (event) => {
                        console.log('Started play');
                    });
                    player.on('volumechange', (event) => {
                        console.log('Volume change');
                    });
                    player.on('ended', (event) => {
                        console.log('Video ended');
                    });
                }
            });
            var lightboxInlineIframe = GLightbox({
                selector: '.glightbox4'
            });
        </script>
        </body>

        </html>
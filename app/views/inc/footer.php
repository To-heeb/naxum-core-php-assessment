<!--**********************************
	Content body end
***********************************-->
<!--**********************************
	Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Developed by <a href="https://github.com/To-heeb/naxum-core-php-assessment.git" target="_blank">Oyekola Toheeb </a> <?= date('Y') ?></p>
    </div>
</div>
<!--**********************************
	Footer end
***********************************-->
</div>

<script src="<?= BASE_URL ?>/public/assets/vendor/global/global.min.js"></script>
<script src="<?= BASE_URL ?>/public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<script src="<?= BASE_URL ?>/public/assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?= BASE_URL ?>/public/assets/vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?= BASE_URL ?>/public/assets/vendor/peity/jquery.peity.min.js"></script>
<script src="<?= BASE_URL ?>/public/assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
<script src="<?= BASE_URL ?>/public/assets/js/dashboard/dashboard-1.js"></script>

<script src="<?= BASE_URL ?>/public/assets/js/custom.js"></script>
<script src="<?= BASE_URL ?>/public/assets/js/deznav-init.js"></script>
<!-- <script src="<?= BASE_URL ?>/public/assets/js/demo.js"></script>
<script src="<?= BASE_URL ?>/public/assets/js/styleSwitcher.js"></script> -->
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    function carouselReview() {
        /*  testimonial one function by = owl.carousel.js */
        function checkDirection() {
            var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
            if (htmlClassName == 'rtl') {
                return true;
            } else {
                return false;

            }
        }
        jQuery('.testimonial-one').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 15,
            nav: false,
            dots: false,
            left: true,
            rtl: checkDirection(),
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },
                991: {
                    items: 2
                },

                1200: {
                    items: 2
                },
                1600: {
                    items: 2
                }
            }
        })
        jQuery('.testimonial-two').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 15,
            nav: false,
            dots: true,
            left: true,
            rtl: checkDirection(),
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                991: {
                    items: 3
                },

                1200: {
                    items: 3
                },
                1600: {
                    items: 4
                }
            }
        })
    }
    jQuery(window).on('load', function() {
        setTimeout(function() {
            carouselReview();
        }, 1000);
    });
</script>

<!--**********************************
        Main wrapper end
    ***********************************-->
</body>

</html>
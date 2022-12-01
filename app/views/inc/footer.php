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

<script src="<?= BASE_URL ?>/public/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= BASE_URL ?>/public/assets/js/plugins-init/jquery.validate-init.js"></script>

<script src="<?= BASE_URL ?>/public/assets/js/custom.js"></script>
<script src="<?= BASE_URL ?>/public/assets/js/deznav-init.js"></script>
<!-- <script src="<?= BASE_URL ?>/public/assets/js/demo.js"></script>
<script src="<?= BASE_URL ?>/public/assets/js/styleSwitcher.js"></script> -->
<script src="//unpkg.com/alpinejs" defer></script>

<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()




    var country_select = document.querySelector("#countries");

    fetch('https://restcountries.com/v2/all')
        .then((response) => response.json())
        .then((countries) => {
            //console.log(countries)
            var output = '<option value="">Select Your Country</option>'
            countries.forEach((country_data) => {
                output += `
                <option value="${country_data.name}">${country_data.name}</option>
                    `;
            })
            country_select.innerHTML = output;
            //console.log(country_select.innerHTML)
        })
        .catch((error) => {
            console.log('Error:', error);
        })
    //console.log(output)



    // country_select.addEventListener("change", (event) => {
    //     alert('msg');
    //     alert(event.target.innerHTML);
    //     fetch('https://restcountries.com/v2/all')
    //         .then((response) => response.json())
    //         .then((countries) => {
    //             console.log(countries)
    //             let output = '<option value="">Select Your Country</option>'
    //             countries.forEach((country_data) => {
    //                 console.log(country_data)
    //                 output += `
    //             <option value="${country_data.name}">${country_data.name}</option>
    //                 `;
    //             })
    //             event.target.innerHTML = output;
    //         })
    //         .catch((error) => {
    //             console.log('Error:', error);
    //         })
    // })
</script>

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
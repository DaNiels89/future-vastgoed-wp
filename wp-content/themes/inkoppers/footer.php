<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;
?>

<?php wp_footer(); ?>

<?php if ( is_page("Home") ): ?>
    <footer class="bgc-dark pt-lg-5">
        <!-- Mobile -->
        <div class="container-fluid top-footer-mobile d-lg-none">
            <div class="row">
                <div class="col-3">
                    <img src="/future-vastgoed/wp-content/uploads/2021/07/footer-logo-small.svg" alt="" class="pt-2" />
                </div>
                <div class="col-8">
                    <address class="">
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Future vastgoed
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-3">
                    <address class="">
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            <a
                                href="mailto:info@futurevast.com"
                                class="footer-a-light clr-light fs-2030"
                            >
                                Info@futurevast.com
                            </a>
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
            </div>
        </div>
        <!-- Desktop -->
        <div class="container-fluid top-footer-desktop py-lg-5 d-none d-lg-block">
            <div class="row my-lg-5">
                <div class="col-lg-1 offset-lg-1">
                    <img src="/future-vastgoed/wp-content/uploads/2021/07/footer-logo.svg" alt="" class="pt-3 mw-100" />
                </div>
                <div class="col-lg-3">
                    <address class="">
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Future vastgoed
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
                <div class="col-lg-3">
                    <address>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            <a
                                href="mailto:info@futurevast.com"
                                class="footer-a-light clr-light fs-2030"
                            >
                                Info@futurevast.com
                            </a>
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
                <div class="col-lg-2 offset-lg-1 d-flex flex-column">
                    <a href="#about-us" class="fs-2030 clr-gray-4 fw-extra-light"
                        >Over ons</a
                    >
                    <a href="#projects" class="fs-2030 clr-gray-4 fw-extra-light"
                        >Projecten</a
                    >
                    <a href="#team-div" class="fs-2030 clr-gray-4 fw-extra-light"
                        >Team</a
                    >
                </div>
            </div>
        </div>

        <!-- Mobile bottom footer -->
        <div class="container-fluid bottom-footer-mobile d-lg-none">
            <div class="row my-4 mx-0">
                <a href="#" class="fs-1520 clr-gray-4 fw-extra-light mr-4"
                    >Voorwaarden</a
                >
                <a href="#" class="fs-1520 clr-gray-4 fw-extra-light">Disclaimer</a>
            </div>
            <div class="row mx-0">
                <a href="#" class="fs-1520 clr-gray-4 fw-extra-light mr-4"
                    >Privacyverklaring</a
                >
                <p class="fs-1520 clr-gray-4 fw-extra-light">
                    &copy; Future Vastgoed <?php echo date("Y"); ?>
                </p>
            </div>
        </div>

        <!-- Desktop bottom footer -->
        <div
            class="container-fluid bottom-footer-desktop py-lg-5 d-none d-lg-block"
        >
            <div class="row">
                <div class="col-lg-4 offset-lg-1 d-flex justify-content-between">
                    <a href="#" class="fs-1520 clr-gray-4 fw-extra-light"
                        >Voorwaarden</a
                    >
                    <a href="#" class="fs-1520 clr-gray-4 fw-extra-light ml-4"
                        >Privacyverklaring</a
                    >
                    <a href="#" class="fs-1520 clr-gray-4 fw-extra-light ml-4"
                        >Disclaimer</a
                    >
                </div>
                <div class="col-lg-3 offset-4">
                    <p class="fs-1520 clr-gray-4 fw-extra-light">
                        &copy; Future Vastgoed <?php echo date("Y"); ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

<?php else: ?>

    <footer class="bgc-gray-5 pt-lg-5">
        <!-- Mobile -->
        <div class="container-fluid top-footer-mobile d-lg-none">
            <div class="row">
                <div class="col-3">
                    <img src="/future-vastgoed/wp-content/uploads/2021/07/footer-logo-small.svg" alt="" class="pt-2" />
                </div>
                <div class="col-8">
                    <address class="">
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Future vastgoed
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-3">
                    <address class="">
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            <a
                                href="mailto:info@futurevast.com"
                                class="footer-a-light clr-light fs-2030"
                            >
                                Info@futurevast.com
                            </a>
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
            </div>
        </div>
        <!-- Desktop -->
        <div class="container-fluid top-footer-desktop py-lg-5 d-none d-lg-block">
            <div class="row my-lg-5">
                <div class="col-lg-1 offset-lg-1">
                    <img src="/future-vastgoed/wp-content/uploads/2021/07/footer-logo.svg" alt="" class="pt-3 mw-100" />
                </div>
                <div class="col-lg-3">
                    <address class="">
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Future vastgoed
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
                <div class="col-lg-3">
                    <address>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            <a
                                href="mailto:info@futurevast.com"
                                class="footer-a-light clr-light fs-2030"
                            >
                                Info@futurevast.com
                            </a>
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            Habraken 2321M
                        </p>
                        <p class="fs-2030 mb-0 clr-light fw-extra-light">
                            5507 TK Veldhoven
                        </p>
                    </address>
                </div>
                <div class="col-lg-2 offset-lg-1 d-flex flex-column">
                    <a href="#about-us" class="fs-2030 clr-gray-4 fw-extra-light"
                        >Over ons</a
                    >
                    <a href="#projects" class="fs-2030 clr-gray-4 fw-extra-light"
                        >Projecten</a
                    >
                    <a href="#team-div" class="fs-2030 clr-gray-4 fw-extra-light"
                        >Team</a
                    >
                </div>
            </div>
        </div>

        <!-- Mobile bottom footer -->
        <div class="container-fluid bottom-footer-mobile d-lg-none">
            <div class="row my-4 mx-0">
                <a href="#" class="fs-1520 clr-gray-4 fw-extra-light mr-4"
                    >Voorwaarden</a
                >
                <a href="#" class="fs-1520 clr-gray-4 fw-extra-light">Disclaimer</a>
            </div>
            <div class="row mx-0">
                <a href="#" class="fs-1520 clr-gray-4 fw-extra-light mr-4"
                    >Privacyverklaring</a
                >
                <p class="fs-1520 clr-gray-4 fw-extra-light">
                    &copy; Future Vastgoed <?php echo date("Y"); ?>
                </p>
            </div>
        </div>

        <!-- Desktop bottom footer -->
        <div
            class="container-fluid bottom-footer-desktop py-lg-5 d-none d-lg-block"
        >
            <div class="row">
                <div class="col-lg-4 offset-lg-1 d-flex justify-content-between">
                    <a href="#" class="fs-1520 clr-gray-4 fw-extra-light"
                        >Voorwaarden</a
                    >
                    <a href="#" class="fs-1520 clr-gray-4 fw-extra-light ml-4"
                        >Privacyverklaring</a
                    >
                    <a href="#" class="fs-1520 clr-gray-4 fw-extra-light ml-4"
                        >Disclaimer</a
                    >
                </div>
                <div class="col-lg-3 offset-4">
                    <p class="fs-1520 clr-gray-4 fw-extra-light">
                        &copy; Future Vastgoed <?php echo date("Y"); ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <?php endif; ?>
    

    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            offset: 80
        });
    </script>

</body>
</html> 
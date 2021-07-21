<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

$footerLogo = get_field("footer_logo", "option");
$footerAddress1 = get_field("footer_address_1", "option");
$footerAddress2 = get_field("footer_address_2", "option");
$footerLink1 = get_field("footer_link_1", "option");
$footerLink2 = get_field("footer_link_2", "option");
$footerLink3 = get_field("footer_link_3", "option");
$footerTerms = get_field("footer_terms_and_conditions", "option");
$footerPrivacy = get_field("footer_privacy_declaration", "option");
$footerDisclaimer = get_field("footer_disclaimer", "option");
$footerCopyright = get_field("footer_copyright", "option");

?>

<?php wp_footer(); ?>

<footer class="bgc-gray-5 <?php if ( is_page( 1 ) ): ?><?php echo "bgc-dark"; ?><?php endif; ?> pt-lg-5">
    <!-- Mobile -->
    <div class="container-fluid top-footer-mobile d-lg-none">
        <div class="row">
            <div class="col-3">
                <img src="/future-vastgoed/wp-content/uploads/2021/07/footer-logo-small.svg" alt="" class="pt-2" />
            </div>
            <div class="col-8">
                <?php if ($footerAddress1): ?>
                    <address class="footer-address">
                        <?php echo $footerAddress1; ?>
                    </address>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-3">
                <?php if ($footerAddress2): ?>
                    <address class="footer-address">
                        <?php echo $footerAddress2; ?>
                    </address>
                <?php endif; ?>
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
                <?php if ($footerAddress1): ?>
                    <address class="footer-address">
                        <?php echo $footerAddress1; ?>
                    </address>
                <?php endif; ?>
            </div>
            <div class="col-lg-3">
                <?php if ($footerAddress1): ?>
                    <address>
                        <?php echo $footerAddress2; ?>
                    </address>
                <?php endif; ?>
            </div>
            <div class="col-lg-2 offset-lg-1 d-flex flex-column">
                <?php if ($footerLink1): ?>
                    <a href="<?php echo $footerLink1["url"]; ?>" target="<?php echo $footerLink1["target"]; ?>" class="fs-2030 clr-gray-4 fw-extra-light"
                        ><?php echo $footerLink1["title"];?></a
                    >
                <?php endif; ?>
                <?php if ($footerLink2): ?>
                    <a href="<?php echo $footerLink2["url"]; ?>" target="<?php echo $footerLink2["target"]; ?>" class="fs-2030 clr-gray-4 fw-extra-light"
                        ><?php echo $footerLink2["title"];?></a
                    >
                <?php endif; ?>
                <?php if ($footerLink3): ?>
                    <a href="<?php echo $footerLink3["url"]; ?>" target="<?php echo $footerLink3["target"]; ?>" class="fs-2030 clr-gray-4 fw-extra-light"
                        ><?php echo $footerLink3["title"];?></a
                    >
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Mobile bottom footer -->
    <div class="container-fluid bottom-footer-mobile d-lg-none">
        <div class="row my-4 mx-0">
            <?php if ($footerTerms): ?>
                <a href="<?php echo $footerTerms["url"]; ?>" target="<?php echo $footerTerms["target"]; ?>" class="fs-1520 clr-gray-4 fw-extra-light mr-4">
                    <?php echo $footerTerms["title"] ?>
                </a>
            <?php endif; ?>
            <?php if ($footerDisclaimer): ?>
                <a href="<?php echo $footerDisclaimer["url"]; ?>" target="<?php echo $footerDisclaimer["target"]; ?>" class="fs-1520 clr-gray-4 fw-extra-light">
                    <?php echo $footerDisclaimer["title"] ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="row mx-0">
            <?php if ($footerPrivacy): ?>
                <a href="<?php echo $footerPrivacy["url"]; ?>" target="<?php echo $footerPrivacy["target"]; ?>" class="fs-1520 clr-gray-4 fw-extra-light mr-4"
                    ><?php echo $footerPrivacy["title"] ?></a
                >
            <?php endif; ?>
            <?php if ($footerCopyright): ?>
                <p class="fs-1520 clr-gray-4 fw-extra-light">
                    <?php echo $footerCopyright; ?> 
                    <?php echo date("Y"); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Desktop bottom footer -->
    <div
        class="container-fluid bottom-footer-desktop py-lg-5 d-none d-lg-block"
    >
        <div class="row">
            <div class="col-lg-4 offset-lg-1 d-flex justify-content-between">
                <?php if ($footerTerms): ?>
                    <a href="<?php echo $footerTerms["url"]; ?>" target="<?php echo $footerTerms["target"]; ?>" class="fs-1520 clr-gray-4 fw-extra-light"
                        ><?php echo $footerTerms["title"] ?></a
                    >
                <?php endif; ?>
                <?php if ($footerPrivacy): ?>
                    <a href="<?php echo $footerPrivacy["url"]; ?>" target="<?php echo $footerPrivacy["target"]; ?>" class="fs-1520 clr-gray-4 fw-extra-light ml-4"
                        ><?php echo $footerPrivacy["title"] ?></a
                    >
                <?php endif; ?>
                <?php if ($footerDisclaimer): ?>
                    <a href="<?php echo $footerDisclaimer["url"]; ?>" target="<?php echo $footerDisclaimer["target"]; ?>" class="fs-1520 clr-gray-4 fw-extra-light ml-4"
                        ><?php echo $footerDisclaimer["title"] ?></a
                    >
                <?php endif; ?>
            </div>
            <div class="col-lg-3 offset-4">
                <p class="fs-1520 clr-gray-4 fw-extra-light">
                    <?php if ($footerCopyright): ?>
                        <?php echo $footerCopyright; ?>
                    <?php endif; ?>
                    <?php echo date("Y"); ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        offset: 80
    });
</script>

</body>
</html>
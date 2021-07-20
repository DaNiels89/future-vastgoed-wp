<?php get_header(); ?>

<?php
    $backgroundImage = get_field("project_main_background_image");
    $titleLight = get_field("project_title_light");
    $titleGray = get_field("project_title_gray");
 
    $contactImage = get_field("project_contact_image");
    $contactTitle = get_field("project_contact_title");
    $contactText = get_field("project_contact_text");

    $phoneNumber = get_field("phone_number", "option");
    $emailAddress = get_field("email_address", "option");
?>

<main class="main-header">
    <div class="header__background-image position-relative">
        <!-- Mobile -->
        <img
            src="/future-vastgoed/wp-content/uploads/2021/07/header-overlay-mob-01.svg"
            alt=""
            class="header__image-overlay w-100 d-md-none"
        />
        <div class="container-fluid header-text-mobile d-md-none">
            <div class="row">
                <div class="col">
                    <div class="header__image-title">
                        <h1 class="main-future-title-mobile fs-4080 clr-gray-4 mb-0">
                            <?php if ($titleLight): ?>
                                <span class="clr-light"><?php echo $titleLight; ?></span><br />
                            <?php endif; ?>
                            <?php if ($titleGray): ?>
                                <?php echo $titleGray; ?>
                            <?php endif; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tablet -->
        <img
            src="/future-vastgoed/wp-content/uploads/2021/07/header-overlay-tablet.svg"
            alt=""
            class="header__image-overlay w-100 d-none d-md-block d-lg-none"
        />
        <div
            class="container-fluid header-text-mobile d-none d-md-block d-lg-none"
        >
            <div class="col px-0">
                <div class="header__image-title">
                    <h1 class="main-future-title-mobile clr-gray-4 mb-0">
                        <?php if ($titleLight): ?>
                            <span class="clr-light"><?php echo $titleLight; ?></span><br />
                        <?php endif; ?>
                        <?php if ($titleGray): ?>
                            <?php echo $titleGray; ?>
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
        </div>
        <!-- Desktop -->
        <img
            src="/future-vastgoed/wp-content/uploads/2021/07/header-overlay.svg"
            alt=""
            class="header__image-overlay w-100 d-none d-lg-block"
        />
        <div class="container-fluid header-text d-none d-lg-flex">
                <div class="col-lg-4">
                    <div class="header__image-title">
                        <h1 class="fs-4080 clr-gray-4 mb-0">
                            <?php if ($titleLight): ?>
                                <span class="clr-light"><?php echo $titleLight; ?></span><br />
                            <?php endif; ?>
                            <?php if ($titleGray): ?>
                                <?php echo $titleGray; ?>
                            <?php endif; ?>
                        </h1>
                    </div>
                </div>
                <div
                    class="
                        col-lg-4
                        d-flex
                        justify-content-center
                        align-items-end
                    "
                >
                    <div class="div-a-scroll-down">
                        <a href="#about-us" class="a-scroll-down clr-gray-2"
                            ><img
                                src="/future-vastgoed/wp-content/uploads/2021/07/scroll-down-light.svg"
                                alt=""
                                class="mr-4"
                            />Scroll down</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "flexible-content.php"; ?>

    <!-- Contact -->
    <div
        tabindex="-1"
        id="contact"
        class="bgi-gray-dark-diagonal contact-container"
    >
        <!-- Mobile -->
        <div class="container-fluid no-px-small d-lg-none">
            <div class="row">
                <div class="col-lg-6 bgi-contact">
                    <div class=""></div>
                </div>
                <div
                    class="
                        col-lg-6
                        p-lg-5
                        d-flex
                        flex-column
                        justify-content-center
                        bgc-gray-1
                    "
                >
                    <div
                        class="
                            project-interest-div
                            px-4 px-lg-5
                            d-flex
                            flex-column
                            justify-content-center
                        "
                    >
                        <?php if ($contactTitle): ?>
                            <h2 class=""><?php echo $contactTitle ?></h2>
                        <?php endif; ?>
                        <?php if ($contactText): ?>
                            <p class="my-5">
                                <?php echo $contactText; ?>
                            </p>
                        <?php endif; ?>
                        <div class="d-flex">
                            <a
                                href="tel:<?php echo $phoneNumber; ?>"
                                class="a-btn a-btn-dark rounded-pill mr-4"
                                >Bel ons</a
                            >
                            <a
                                href="mailto:<?php echo $emailAddress ?>"
                                class="a-btn a-btn-dark rounded-pill"
                                >Mail ons</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Desktop -->
        <div class="container-fluid interesse-div d-none d-lg-block">
            <div class="row mx-0">
                <div class="col-lg-6 bgi-contact">
                    <div class=""></div>
                </div>
                <div
                    class="
                        col-lg-6
                        p-lg-5
                        d-flex
                        flex-column
                        justify-content-center
                        bgc-gray-1
                    "
                >
                    <div
                        class="
                            project-interest-div
                            px-4 px-lg-5
                            d-flex
                            flex-column
                            justify-content-center
                        "
                    >
                        <?php if ($contactTitle): ?>
                            <h2 class=""><?php echo $contactTitle ?></h2>
                        <?php endif; ?>
                        <?php if ($contactText): ?>
                            <p class="my-5">
                                <?php echo $contactText; ?>
                            </p>
                        <?php endif; ?>
                        <div class="d-flex">
                            <a
                                href="tel:<?php echo $phoneNumber; ?>"
                                class="a-btn a-btn-dark rounded-pill mr-4"
                                >Bel ons</a
                            >
                            <a
                                href="mailto:<?php echo $emailAddress ?>"
                                class="a-btn a-btn-dark rounded-pill"
                                >Mail ons</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php
    $backgroundImage = get_field("project_main_background_image");
    $titleLight = get_field("project_title_light");
    $titleGray = get_field("project_title_gray");

    $darkParagraph = get_field("project_text_dark_background");

    $image1 = get_field("project_image_1");

    $image2 = get_field("project_image_2");

    $titleLeft = get_field("project_subtitle");
    $textRight = get_field("project_text");

    $image3 = get_field("project_image_3");

    $image4 = get_field("project_image_4");
    $textImage4 = get_field("project_image_4_text_overlay");
    $image5 = get_field("project_image_5");
    $textImage5 = get_field("project_image_5_text_overlay");

    $detailsTitle = get_field("project_detail_title");
    $detail1 = get_field("project_detail_1");
    $description1 = get_field("project_description_1");
    $detail2 = get_field("project_detail_2");
    $description2 = get_field("project_description_2");
    $detail3 = get_field("project_detail_3");
    $description3 = get_field("project_description_3");
    $detail4 = get_field("project_detail_4");
    $description4 = get_field("project_description_4");
    $detail5 = get_field("project_detail_5");
    $description5 = get_field("project_description_5");
    $detail6 = get_field("project_detail_6");
    $description6 = get_field("project_description_6");
    $detail7 = get_field("project_detail_7");
    $description7 = get_field("project_description_7");
    $detail8 = get_field("project_detail_8");
    $description8 = get_field("project_description_8");
    
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

    <div tabindex="-1" id="about-us" class="container-fluid bgc-dark">
        <div class="row py-lg-5">
            <div tabindex="-1" class="col-lg-6 offset-lg-4 py-lg-5">
                <?php if ($darkParagraph): ?>
                    <p class="bgc-dark py-5 mb-lg-5">
                        <?php echo $darkParagraph; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="bgi-dark-overlay pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <img
                        src="<?php echo $image1['sizes']['large']; ?>"
                        alt="<?php echo $image1['alt']; ?>"
                        class="pb-5 mb-lg-5 w-100"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img
                    src="<?php echo $image2['sizes']['large']; ?>"
                    alt="<?php echo $image2['alt']; ?>"
                    class="w-100"
                />
            </div>
        </div>
    </div>

    <div class="container-fluid title-left-text-right">
        <div class="row">
            <div class="col-lg-6">
                <?php if ($titleLeft): ?>
                    <h2 class="mb-5">
                        <?php echo $titleLeft; ?>
                    </h2>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if ($textRight): ?>
                    <p class="">
                        <?php echo $textRight; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Mobile image without padding -->
    <img
        src="<?php echo $image3['sizes']['large']; ?>"
        alt="<?php echo $image3['alt']; ?>"
        class="d-lg-none w-100"
    />

    <!-- Desktop image -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row">
            <div class="col">
                <img
                    src="<?php echo $image3['sizes']['large']; ?>"
                    alt="<?php echo $image3['alt']; ?>"
                    class="w-100"
                />
            </div>
        </div>
    </div>

    <div class="container-fluid old-new-situation-div">
        <div class="row">
            <div class="col-lg-6">
                <div class="position-relative my-4 my-lg-0">
                    <img 
                        src="<?php echo $image4['sizes']['large']; ?>"
                        alt="<?php echo $image4['alt']; ?>"
                        class="w-100">
                    <?php if ($textImage4): ?>
                        <p
                            class="
                                situation-overlay
                                fs-1520
                                bgc-light
                                clr-dark
                                rounded-pill
                            "
                        >
                            <?php echo $textImage4; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative my-4 my-lg-0">
                    <img 
                        src="<?php echo $image5['sizes']['large']; ?>"
                        alt="<?php echo $image5['alt']; ?>"
                        class="w-100">
                    <?php if ($textImage5): ?>
                        <p
                            class="
                                situation-overlay
                                fs-1520
                                bgc-light
                                clr-dark
                                rounded-pill
                            "
                        >
                            <?php echo $textImage5; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid project-details-div bgc-dark">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 pl-lg-0">
                <?php if ($detailsTitle): ?>
                    <h2 class="clr-gray-4 mb-5"><?php echo $detailsTitle; ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-lg-3 col-border-top">
                        <?php if ($detail1): ?>
                            <p class="clr-gray-4 detail-above-description first-detail mb-0"><?php echo $detail1; ?></p>
                        <?php endif; ?>
                        <?php if ($description1): ?>
                            <p class="clr-light description-border"><?php echo $description1; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-border-top">
                        <?php if ($detail2): ?>
                            <p class="clr-gray-4 detail-above-description mb-0"><?php echo $detail2; ?></p>
                        <?php endif; ?>
                        <?php if ($description2): ?>
                            <p class="clr-light description-border"><?php echo $description2; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-border-top">
                        <?php if ($detail3): ?>
                            <p class="clr-gray-4 detail-above-description mb-0"><?php echo $detail3; ?></p>
                        <?php endif; ?>
                        <?php if ($description3): ?>
                            <p class="clr-light description-border"><?php echo $description3; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-border-top">
                        <?php if ($detail4): ?>
                            <p class="clr-gray-4 detail-above-description mb-0"><?php echo $detail4; ?></p>
                        <?php endif; ?>
                        <?php if ($description4): ?>
                            <p class="clr-light description-border"><?php echo $description4; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-lg-3 col-border-top col-border-bottom">
                        <?php if ($detail5): ?>
                            <p class="clr-gray-4 detail-above-description mb-0"><?php echo $detail5; ?></p>
                        <?php endif; ?>
                        <?php if ($description5): ?>
                            <p class="clr-light description-border"><?php echo $description5; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-border-top col-border-bottom">
                        <?php if ($detail6): ?>
                            <p class="clr-gray-4 detail-above-description mb-0"><?php echo $detail6; ?></p>
                        <?php endif; ?>
                        <?php if ($description6): ?>
                            <p class="clr-light description-border"><?php echo $description6; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-border-top col-border-bottom">
                        <?php if ($detail7): ?>
                            <p class="clr-gray-4 detail-above-description mb-0"><?php echo $detail7; ?></p>
                        <?php endif; ?>
                        <?php if ($description7): ?>
                            <p class="clr-light description-border"><?php echo $description7; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-border-top col-border-bottom">
                        <?php if ($detail8): ?>
                            <p class="clr-gray-4 detail-above-description mb-0"><?php echo $detail8; ?></p>
                        <?php endif; ?>
                        <?php if ($description8): ?>
                            <p class="clr-light description-border"><?php echo $description8; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
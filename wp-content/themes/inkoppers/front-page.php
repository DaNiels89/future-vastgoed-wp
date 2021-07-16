<?php
// Exit if accessed directly.
defined("ABSPATH") || exit;

get_header();
?>

<?php
    $upperTitleGray = get_field("upper_title_gray");
    $upperTitleLight = get_field("upper_title_light");
    $lowerTitleGray = get_field("lower_title_gray");

    $textDarkBackground = get_field("text_dark_background");

    $projects = "";

    $titleUnderProjects = get_field("title_under_projects");
    $textUnderProjects = get_field("text_under_projects");

    $teamImage1 = get_field("image_team_member_1");
    $teamName1 = get_field("name_team_member_1");
    $teamFunction1 = get_field("function_team_member_1");
    $teamImage2 = get_field("image_team_member_2");
    $teamName2 = get_field("name_team_member_2");
    $teamFunction2 = get_field("function_team_member_2");
    $teamImage3 = get_field("image_team_member_3");
    $teamName3 = get_field("name_team_member_3");
    $teamFunction3 = get_field("function_team_member_3");
    $teamImage4 = get_field("image_team_member_4");
    $teamName4 = get_field("name_team_member_4");
    $teamFunction4 = get_field("function_team_member_4");

    $contactImage = get_field("contact_image");
    $contactTitle = get_field("contact_title");
    $contactText = get_field("contact_text");
    
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
            <div class="col px-0">
                <div class="header__image-title">
                    <h1 class="main-future-title-mobile clr-gray-4 mb-0">
                        <?php if ($upperTitleGray): ?>
                            <?php echo $upperTitleGray; ?> 
                        <?php endif; ?>
                        <?php if ($upperTitleGray): ?>
                            <span class="clr-light"><?php echo $upperTitleLight; ?></span><br />
                        <?php endif; ?>
                        <?php if ($lowerTitleGray): ?>
                            <?php echo $lowerTitleGray; ?>
                        <?php endif; ?>
                    </h1>
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
                        <?php if ($upperTitleGray): ?>
                            <?php echo $upperTitleGray; ?> 
                        <?php endif; ?>
                        <?php if ($upperTitleGray): ?>
                            <span class="clr-light"><?php echo $upperTitleLight; ?></span><br />
                        <?php endif; ?>
                        <?php if ($lowerTitleGray): ?>
                            <?php echo $lowerTitleGray; ?>
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
                <div class="header__image-title text-center">
                    <h1 class="clr-gray-4 mb-0">
                        <?php if ($upperTitleGray): ?>
                            <?php echo $upperTitleGray; ?> 
                        <?php endif; ?>
                        <?php if ($upperTitleGray): ?>
                            <span class="clr-light"><?php echo $upperTitleLight; ?></span><br />
                        <?php endif; ?>
                        <?php if ($lowerTitleGray): ?>
                            <?php echo $lowerTitleGray; ?>
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-end">
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

    <div class="waypoint-animation">
        <div
            tabindex="-1"
            id="about-us"
            class="container-fluid bgc-dark about-us-container"
        >
            <div class="row">
                <div tabindex="-1" class="col-lg-6 offset-lg-3">
                    <?php if ($textDarkBackground): ?>
                        <p class="bgc-dark rise-animation">
                            <?php echo $textDarkBackground; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div
        tabindex="-1"
        id="projects"
        class="container-fluid bgc-dark pb-5 projects-container"
    >
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h1 class="h1-projects fs-4080 fw-medium mb-0">
                    Projecten 
                    <sup class="projects-sup fs-1525 fw-light">
                        <?php
                            $args = array( 'post_type' => 'projects', 'order' => 'ASC' );
                            $query = new WP_Query( $args );
                            $count = $query->post_count;
                            echo $count;
                            wp_reset_query();
                        ?>
                    </sup>
                </h1>
            </div>
            <div class="col-lg-5 d-flex align-items-end mt-3 mt-lg-0">
                <a href="#" class="a-gray-4 fs-1525 clr-gray-4 mr-5"
                    >Nieuwe projecten</a
                >
                <a href="#" class="a-gray-4 fs-1525 clr-gray-4"
                    >Lopende projecten</a
                >
            </div>
        </div>
    </div>

    <!-- Mobile projects -->
    <div class="container-fluid bgc-dark d-lg-none">
        <div class="row">
            <div class="col">
                <div class="bgi-projects-mobile first-project">
                    <div class="bgi-projects-mobile-text">
                        <span class="clr-light fs-2530 fw-extra-light"
                            >Projectnaam</span
                        >
                        <span class="clr-light fs-1520 fw-extra-light"
                            >Project detail</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bgi-dark-overlay d-lg-none">
        <div class="row">
            <div class="col">
                <div class="bgi-projects-mobile">
                    <div class="bgi-projects-mobile-text">
                        <span class="clr-light fs-2530 fw-extra-light"
                            >Projectnaam</span
                        >
                        <span class="clr-light fs-1520 fw-extra-light"
                            >Project detail</span
                        >
                    </div>
                </div>
                <div class="bgi-projects-mobile">
                    <div class="bgi-projects-mobile-text">
                        <span class="clr-light fs-2530 fw-extra-light"
                            >Projectnaam</span
                        >
                        <span class="clr-light fs-1520 fw-extra-light"
                            >Project detail</span
                        >
                    </div>
                </div>
                <div class="bgi-projects-mobile">
                    <div class="bgi-projects-mobile-text">
                        <span class="clr-light fs-2530 fw-extra-light"
                            >Projectnaam</span
                        >
                        <span class="clr-light fs-1520 fw-extra-light"
                            >Project detail</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop projects -->
    <div class="bgi-dark-overlay pt-5 d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <?php
                    $query = new WP_Query(['post_status' => 'publish', 'post_type' => 'projects', 'orderby' => 'ID', 'order' => 'ASC']);
                    $i = 0;
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    <?php if ($i % 2 == 0): ?>
                        <div class="col-lg-5 offset-lg-1">
                    <?php elseif ($i % 2 == 1): ?>
                        <div class="col-lg-5">
                    <?php endif; ?>   
                        <div class="project-detail-inner" id="project<?php echo $i; ?>" onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer">
                            <div class="col bgi-project"></div>
                            <img src="/future-vastgoed/wp-content/uploads/2021/07/plus-symbol.svg" alt="" class="plus-symbol" />
                            <div class="col bgc-gray-5 py-4 px-5">
                                <div class="row">
                                    <div class="col-lg-6 d-flex flex-column px-0 px-lg-3">
                                        <span class="clr-light fs-2530 fw-extra-light"
                                            ><?php the_title(); ?></span
                                        >
                                        <span class="clr-light fs-1520 fw-extra-light"
                                            ><?php the_field("project_home_subtitle"); ?></span
                                        >
                                    </div>
                                    <div
                                        class="
                                            col-6
                                            d-flex
                                            align-items-center
                                            justify-content-end
                                        "
                                    >
                                        <a
                                            href="#"
                                            class="a-btn a-btn-light rounded-pill d-none d-xl-block"
                                            >Nieuw project</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                

                        <!-- <div class="project-detail-inner" id="project2">
                            <div class="col bgi-project"></div>
                            <img src="/future-vastgoed/wp-content/uploads/2021/07/plus-symbol.svg" alt="" class="plus-symbol" />
                            <div class="col bgc-gray-5 py-4 px-5">
                                <div class="row">
                                    <div class="col-lg-6 d-flex flex-column px-0 px-lg-3">
                                        <span class="clr-light fs-2530 fw-extra-light"
                                            >Projectnaam</span
                                        >
                                        <span class="clr-light fs-1520 fw-extra-light"
                                            >Project detail</span
                                        >
                                    </div>
                                    <div
                                        class="
                                            col-6
                                            d-flex
                                            align-items-center
                                            justify-content-end
                                        "
                                    >
                                        <a
                                            href="#"
                                            class="a-btn a-btn-light rounded-pill d-none d-xl-block"
                                            >Nieuw project</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>
                <!-- <div class="col-lg-5">
                    <div class="project-detail-inner" id="project3">
                        <div class="col bgi-project"></div>
                        <img src="/future-vastgoed/wp-content/uploads/2021/07/plus-symbol.svg" alt="" class="plus-symbol" />
                        <div class="col bgc-gray-5 py-4 px-5">
                            <div class="row">
                                <div class="col-lg-6 d-flex flex-column px-0 px-lg-3">
                                    <span class="clr-light fs-2530 fw-extra-light"
                                        >Projectnaam</span
                                    >
                                    <span class="clr-light fs-1520 fw-extra-light"
                                        >Project detail</span
                                    >
                                </div>
                                <div
                                    class="
                                        col-6
                                        d-flex
                                        align-items-center
                                        justify-content-end
                                    "
                                >
                                    <a
                                        href="#"
                                        class="a-btn a-btn-light rounded-pill d-none d-xl-block"
                                        >Nieuw project</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-detail-inner" id="project4">
                        <div class="col bgi-project"></div>
                        <img src="/future-vastgoed/wp-content/uploads/2021/07/plus-symbol.svg" alt="" class="plus-symbol" />
                            <div class="col bgc-gray-5 py-4 px-5">
                                <div class="row">
                                    <div class="col-lg-6 d-flex flex-column px-0 px-lg-3">
                                        <span class="clr-light fs-2530 fw-extra-light"
                                            >Projectnaam</span
                                        >
                                        <span class="clr-light fs-1520 fw-extra-light"
                                            >Project detail</span
                                        >
                                    </div>
                                    <div
                                        class="
                                            col-6
                                            d-flex
                                            align-items-center
                                            justify-content-end
                                        "
                                    >
                                        <a
                                            href="#"
                                            class="a-btn a-btn-light rounded-pill d-none d-xl-block"
                                            >Nieuw project</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                <?php
                    $i++;
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>

    <div class="waypoint-animation">
        <div class="container-fluid project-main-text">
            <div class="row">
                <div class="col-lg-7 offset-lg-1 slide-right-animation">
                    <?php if ($titleUnderProjects): ?>
                        <h2 class="">
                            <?php echo $titleUnderProjects; ?>
                        </h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="waypoint-animation">
        <div class="container-fluid project-main-paragraph">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 slide-right-animation">
                    <?php if ($textUnderProjects): ?>
                        <p class="">
                            <?php echo $textUnderProjects; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div tabindex="-1" id="team-div" class="light-gray-1-bgc-div">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>

    <div
        tabindex="-1"
        id="team"
        class="container-fluid half-bgc-light-gray-3 px-lg-3"
    >
        <div class="row no-mx-mobile">
            <!-- Mobile and tablet slider team -->
            <div class="col d-xl-none first-mobile-center-slider-div px-0">
                <div class="mobile-center-slider">
                    <div>
                        <img
                            src="<?php echo $teamImage1['sizes']['large']; ?>"
                            alt="<?php echo $teamImage1['alt']; ?>"
                            class="d-block w-100"
                        />
                        <div class="">
                            <div class="col bgc-dark d-flex flex-column py-4 px-4">
                                <?php if ($teamName1): ?>
                                    <span class="clr-light fs-2530 fw-extra-light">
                                        <?php echo $teamName1; ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ($teamFunction1): ?>
                                    <span class="clr-light fs-1520 fw-extra-light"
                                        ><?php echo $teamFunction1; ?></span
                                    >
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img
                            src="<?php echo $teamImage2['sizes']['large']; ?>"
                            alt="<?php echo $teamImage2['alt']; ?>"
                            class="d-block w-100"
                        />
                        <div class="">
                            <div class="col bgc-dark d-flex flex-column py-4 px-4">
                                <?php if ($teamName2): ?>
                                    <span class="clr-light fs-2530 fw-extra-light">
                                        <?php echo $teamName2; ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ($teamFunction2): ?>
                                    <span class="clr-light fs-1520 fw-extra-light"
                                        ><?php echo $teamFunction2; ?></span
                                    >
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img
                            src="<?php echo $teamImage3['sizes']['large']; ?>"
                            alt="<?php echo $teamImage3['alt']; ?>"
                            class="d-block w-100"
                        />
                        <div class="">
                            <div class="col bgc-dark d-flex flex-column py-4 px-4">
                                <?php if ($teamName3): ?>
                                    <span class="clr-light fs-2530 fw-extra-light">
                                        <?php echo $teamName3; ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ($teamFunction3): ?>
                                    <span class="clr-light fs-1520 fw-extra-light"
                                        ><?php echo $teamFunction3; ?></span
                                    >
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img
                            src="<?php echo $teamImage4['sizes']['large']; ?>"
                            alt="<?php echo $teamImage4['alt']; ?>"
                            class="d-block w-100"
                        />
                        <div class="">
                            <div class="col bgc-dark d-flex flex-column py-4 px-4">
                                <?php if ($teamName4): ?>
                                    <span class="clr-light fs-2530 fw-extra-light">
                                        <?php echo $teamName4; ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ($teamFunction4): ?>
                                    <span class="clr-light fs-1520 fw-extra-light"
                                        ><?php echo $teamFunction4; ?></span
                                    >
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- desktop -->
            <div class="col-xl-10 offset-xl-1 team-container d-none d-xl-block">
                <div class="row">
                    <div class="col-xl-3">
                        <img 
                            src="<?php echo $teamImage1['sizes']['large']; ?>"
                            alt="<?php echo $teamImage1['alt']; ?>"
                            class="w-100"
                        >
                        <div class="col bgc-dark d-flex flex-column py-4 px-5">
                            <?php if ($teamName1): ?>
                            <span class="clr-light fs-2530 fw-extra-light"
                                ><?php echo $teamName1; ?></span
                            >
                            <?php endif; ?>
                            <?php if ($teamFunction1): ?>
                                <span class="clr-light fs-1520 fw-extra-light"><?php echo $teamFunction1; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <img 
                            src="<?php echo $teamImage2['sizes']['large']; ?>"
                            alt="<?php echo $teamImage2['alt']; ?>"
                            class="w-100"
                        >
                        <div class="col bgc-dark d-flex flex-column py-4 px-5">
                            <?php if ($teamName2): ?>
                            <span class="clr-light fs-2530 fw-extra-light"
                                ><?php echo $teamName2; ?></span
                            >
                            <?php endif; ?>
                            <?php if ($teamFunction2): ?>
                                <span class="clr-light fs-1520 fw-extra-light"><?php echo $teamFunction2; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <img 
                            src="<?php echo $teamImage3['sizes']['large']; ?>"
                            alt="<?php echo $teamImage3['alt']; ?>"
                            class="w-100"
                        >
                        <div class="col bgc-dark d-flex flex-column py-4 px-5">
                            <?php if ($teamName3): ?>
                            <span class="clr-light fs-2530 fw-extra-light"
                                ><?php echo $teamName3; ?></span
                            >
                            <?php endif; ?>
                            <?php if ($teamFunction3): ?>
                                <span class="clr-light fs-1520 fw-extra-light"><?php echo $teamFunction3; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <img 
                            src="<?php echo $teamImage4['sizes']['large']; ?>"
                            alt="<?php echo $teamImage4['alt']; ?>"
                            class="w-100"
                        >
                        <div class="col bgc-dark d-flex flex-column py-4 px-5">
                            <?php if ($teamName4): ?>
                            <span class="clr-light fs-2530 fw-extra-light"
                                ><?php echo $teamName4; ?></span
                            >
                            <?php endif; ?>
                            <?php if ($teamFunction4): ?>
                                <span class="clr-light fs-1520 fw-extra-light"><?php echo $teamFunction4; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div tabindex="-1" class="" id="contact-div">
        <div class="light-gray-1-bgc-div h-11em d-lg-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="light-gray-3-bgc-div d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        tabindex="-1"
        id="contact"
        class="bgi-light-dark-diagonal contact-container"
    >
        <!-- Mobile -->
        <div class="container-fluid no-px-small d-lg-none">
            <div class="row">
                <div class="col-lg-6 bgi-building" style="background-image: url('<?php echo $contactImage["sizes"]["large"]; ?>')">
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
                <div class="col-lg-6 bgi-building p-lg-0" style="background-image: url('<?php echo $contactImage["sizes"]["large"]; ?>')">
                    <div class=""></div>
                </div>
                <div
                    class="
                        contact-right-div
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

<?php get_footer();
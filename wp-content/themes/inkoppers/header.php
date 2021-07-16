<?php
// Exit if accessed directly.
defined( "ABSPATH" ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action("wp_body_open"); ?>

<?php if ( is_page("home") ): ?>
    <header class="">
        <!-- Mobile top -->
        <div class="container-fluid d-md-none bgi-mobile">
            <div class="row row-mobile-header">
                <div class="col nav-header-mobile">
                    <a href="/" class="">
                        <img
                            src="/future-vastgoed/wp-content/uploads/2021/07/logo-header-mobile.svg"
                            alt=""
                            class=""
                            width="115.24"
                            height="40.69"
                        />
                    </a>
                </div>
            </div>
        </div>
        <!-- Mobile bottom -->
        <div class="navigation-bottom d-md-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="navigation-bottom__ul">
                            <li class="navigation-bottom__ul-li active">
                                <a data-scroll href="#about-us" class="navigation-bottom__ul-li-a"
                                    >Over ons</a
                                >
                            </li>
                            <li class="navigation-bottom__ul-li">
                                <a data-scroll href="#projects" class="navigation-bottom__ul-li-a"
                                    >Projecten</a
                                >
                            </li>
                            <li class="navigation-bottom__ul-li">
                                <a data-scroll href="#team-div" class="navigation-bottom__ul-li-a"
                                    >Team</a
                                >
                            </li>
                            <li class="navigation-bottom__ul-li">
                                <a data-scroll href="#contact-div" class="navigation-bottom__ul-li-a"
                                    >Contact</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop -->
        <div class="container-fluid bgc-light nav-top-block d-none d-md-block">
            <div class="row">
                <div class="col nav__div">
                    <div class="nav__logo">
                        <a href="/" class="">
                            <img src="/future-vastgoed/wp-content/uploads/2021/07/nav-logo.svg" alt="" class="nav__logo-img" />
                        </a>
                    </div>
                    <div class="nav__ul-div">
                        <ul class="nav__ul">
                            <li class="nav__ul-li">
                                <a href="#about-us" class="nav__ul-li-a mx-4">Over ons</a>
                            </li>
                            <li class="nav__ul-li">
                                <a href="#projects" class="nav__ul-li-a mx-4">Projecten</a>
                            </li>
                            <li class="nav__ul-li">
                                <a href="#team-div" class="nav__ul-li-a mx-4">Team</a>
                            </li>
                            <li class="nav__ul-li">
                                <a href="#contact-div" class="nav__ul-li-a mx-4">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
<?php else: ?>

    <header class="project-width">
        <!-- Mobile top -->
        <div class="container-fluid d-md-none bgi-mobile project-page-nav">
            <div class="row row-mobile-header">
                <div class="">
                    <a href="/" class="">
                        <img
                            src="/future-vastgoed/wp-content/uploads/2021/07/logo-header-mobile.svg"
                            alt=""
                            class=""
                            width="115.24"
                            height="40.69"
                        />
                    </a>
                </div>
                <div class="">
                    <a href="/" class="header-close-a fs-1530"
                        >Terug
                        <img src="/future-vastgoed/wp-content/uploads/2021/07/dark-close-circle-mobile.svg" alt="" class="ml-2"
                    /></a>
                </div>
            </div>
        </div>
        <!-- Mobile bottom -->
        <div class="navigation-bottom d-md-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="navigation-bottom__ul">
                            <li class="navigation-bottom__ul-li active">
                                <a href="#about-us" class="navigation-bottom__ul-li-a"
                                    >Over ons</a
                                >
                            </li>
                            <li class="navigation-bottom__ul-li">
                                <a href="#projects" class="navigation-bottom__ul-li-a"
                                    >Projecten</a
                                >
                            </li>
                            <li class="navigation-bottom__ul-li">
                                <a href="#team-div" class="navigation-bottom__ul-li-a"
                                    >Team</a
                                >
                            </li>
                            <li class="navigation-bottom__ul-li">
                                <a href="#contact-div" class="navigation-bottom__ul-li-a">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop -->
        <div class="container-fluid bgc-light project-desktop-header d-none d-md-block">
            <div class="row">
                <div class="col nav__div">
                    <div class="nav__logo">
                        <a href="/" class="">
                            <img src="/future-vastgoed/wp-content/uploads/2021/07/nav-logo.svg" alt="" class="nav__logo-img" />
                        </a>
                    </div>
                    <div class="nav__ul-div">
                        <a href="/" class="header-close-a fs-1530"
                            >Terug
                            <img src="/future-vastgoed/wp-content/uploads/2021/07/dark-close-circle.svg" alt="" class="ml-4"
                        /></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php endif; ?>
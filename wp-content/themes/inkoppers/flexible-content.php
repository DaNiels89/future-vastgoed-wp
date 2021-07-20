<?php if (have_rows("blocks")): ?>
    <?php while (have_rows("blocks")): the_row(); ?>

        <?php if (get_row_layout() == "padding"): ?>
            <?php
                $bgc = get_sub_field("padding-background-color");
            ?>

            <div class="padding bgc-<?php echo $bgc;?>"></div>

        <?php elseif (get_row_layout() == "text_dark_background"): ?>

            <?php
                $text = get_sub_field("text");
            ?>

            <div tabindex="-1" id="about-us" class="waypoint-animation">
                <div class="container-fluid bgc-dark">
                    <div class="row py-lg-5 mg-top-1">
                        <div class="col-lg-6 offset-lg-4 py-lg-5 slide-right-animation">
                            <?php if ($text): ?>
                                <p class="bgc-dark py-5 mb-lg-5">
                                    <?php echo $text; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "image_partially_dark_background"): ?>
            
            <?php
                $imgDarkBG = get_sub_field("image_with_partially_dark_background");
            ?>

            <div class="waypoint-animation">
                <div class="bgi-dark-overlay pt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 rise-animation-alt">
                                <img
                                    src="<?php echo $imgDarkBG['sizes']['large']; ?>"
                                    alt="<?php echo $imgDarkBG["alt"]; ?>"
                                    class="pb-5 mb-lg-5 w-100"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "single_image"): ?>

            <?php
                $singleImage = get_sub_field("single_image");
            ?>

            <div class="waypoint-animation">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col rise-animation-alt">
                            <img
                                src="<?php echo $singleImage['sizes']['large']; ?>"
                                alt="<?php echo $singleImage['alt']; ?>"
                                class="w-100"
                            />
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "title_left_text_right"): ?>

            <?php
                $titleLeft = get_sub_field("left_title");
                $textRight = get_sub_field("right_text");
            ?>

            <div class="waypoint-animation">
                <div class="container-fluid title-left-text-right">
                    <div class="row">
                        <div class="col-lg-6 slide-right-animation">
                            <?php if ($titleLeft): ?>
                                <h2 class="mb-5">
                                    <?php echo $titleLeft; ?>
                                </h2>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 slide-left-animation">
                            <?php if ($textRight): ?>
                                <p class="">
                                    <?php echo $textRight; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "image_no_padding_mobile"): ?>

            <?php
                $imgNoPaddingMobile = get_sub_field("image_no_padding_mobile");
            ?>

            <!-- Mobile image without padding -->
            <div class="waypoint-animation">
                <img
                    src="<?php echo $imgNoPaddingMobile['sizes']['large']; ?>"
                    alt="<?php echo $imgNoPaddingMobile['alt']; ?>"
                    class="d-lg-none w-100 rise-animation"
                />
            </div>

            <!-- Desktop image -->
            <div class="waypoint-animation">
                <div class="container-fluid d-none d-lg-block">
                    <div class="row">
                        <div class="col rise-animation">
                            <img
                                src="<?php echo $imgNoPaddingMobile['sizes']['large']; ?>"
                                alt="<?php echo $imgNoPaddingMobile['alt']; ?>"
                                class="w-100"
                            />
                        </div>
                    </div>
                </div>
            </div>


        <?php elseif (get_row_layout() == "two_images"): ?>

            <?php
                $imageLeft = get_sub_field("image_left");
                $imageLeftText = get_sub_field("image_left_text");
                $imageRight = get_sub_field("image_right");
                $imageRightText = get_sub_field("image_right_text");
            ?>

            <div class="waypoint-animation">
                <div class="container-fluid old-new-situation-div">
                    <div class="row">
                        <div class="col-lg-6 slide-right-animation">
                            <div class="position-relative my-4 my-lg-0">
                                <img 
                                    src="<?php echo $imageLeft['sizes']['large']; ?>"
                                    alt="<?php echo $imageLeft['alt']; ?>"
                                    class="w-100">
                                <?php if ($imageLeftText): ?>
                                    <p
                                        class="
                                            situation-overlay
                                            fs-1520
                                            bgc-light
                                            clr-dark
                                            rounded-pill
                                        "
                                    >
                                        <?php echo $imageLeftText; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 slide-left-animation">
                            <div class="position-relative my-4 my-lg-0">
                                <img 
                                    src="<?php echo $imageRight['sizes']['large']; ?>"
                                    alt="<?php echo $imageRight['alt']; ?>"
                                    class="w-100">
                                <?php if ($imageLeftText): ?>
                                    <p
                                        class="
                                            situation-overlay
                                            fs-1520
                                            bgc-light
                                            clr-dark
                                            rounded-pill
                                        "
                                    >
                                        <?php echo $imageLeftText; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == "details"): ?>

            <?php
                $detailsTitle = get_sub_field("details_title");
            ?>

        <div class="waypoint-animation">
            <div class="container-fluid project-details-div bgc-dark">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 pl-lg-0 rise-animation">
                        <?php if ($detailsTitle): ?>
                            <h2 class="clr-gray-4 mb-5 h2-border-bottom"><?php echo $detailsTitle; ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php elseif (get_row_layout() == "details_descriptions"): ?>

        <?php
            $detail1 = get_sub_field("detail_1");
            $description1 = get_sub_field("description_1");
            $detail2 = get_sub_field("detail_2");
            $description2 = get_sub_field("description_2");
            $detail3 = get_sub_field("detail_3");
            $description3 = get_sub_field("description_3");
            $detail4 = get_sub_field("detail_4");
            $description4 = get_sub_field("description_4");
        ?>

        <div class="waypoint-animation details-description">
            <div class="container-fluid bgc-dark">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 rise-animation">
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
            </div>
        </div>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
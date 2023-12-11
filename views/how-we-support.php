<?php
$headingTitle = get_field('how_heading_container')['title'];
$headingSubTitle = get_field('how_heading_container')['subtitle'];
$headingDescription = get_field('how_heading_container')['short_description'];

$sliderArray = get_field('slider_section');


?>


<div id="how-we-support" class="how-we-support-section">
    <div class="section-heading-wrapper">
        <?php if ($headingSubTitle) : ?>
            <h3 class="subtitle">
                <?php echo $headingSubTitle ?>
            </h3>
        <?php endif; ?>
        <?php if ($headingTitle) : ?>
            <h2 class="title">
                <?php echo $headingTitle ?>
            </h2>
        <?php endif; ?>
        <?php if ($headingDescription) : ?>
            <p class="short-description">
                <?php echo $headingDescription ?>
            </p>
        <?php endif; ?>
    </div>
    <?php if ($sliderArray) : ?>
        <div class="slider-wrapper">
            <div class="slide-nav">
                <?php foreach ($sliderArray as $single_slide) {
                    $numerator = $single_slide['numerator'];
                    $title = $single_slide['title'];
                ?>
                    <div class="slider-title-wrapper">
                        <?php if ($numerator) : ?>
                            <p class="numerator">
                                <?php echo $numerator . "." ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($title) : ?>
                            <p class="title">
                                <?php echo $title ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php  } ?>
            </div>
            <div class="sliders">
                <?php foreach ($sliderArray as $single_slide) {
                    $image_description = $single_slide['image_description'];
                    $image_id = $single_slide['image'];
                ?>
                    <div class="single-slide">
                        <div class="text-img-container">
                            <?php if ($image_description) : ?>
                                <p class="img-description">
                                    <?php echo  $image_description ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($image_id) : ?>
                                <div class="img_container">
                                    <?php echo wp_get_attachment_image($image_id, 'full'); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    <?php endif; ?>
</div>
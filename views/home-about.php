<?php
$headingTitle = get_field('about_heading_container')['title'];
$headingSubTitle = get_field('about_heading_container')['subtitle'];
$headingDescription = get_field('about_heading_container')['short_description'];


$img = get_field('about_img_&_text_container')['image'];
$textTitle = get_field('about_img_&_text_container')['title'];
$textDescription = get_field('about_img_&_text_container')['description'];
$iconSectionArray = get_field('about_icon_container');



?>


<div id="about" class="about-section">
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
    <div class="img-text-wrapper">
        <?php if ($img) : ?>
            <div class="img-container" style="background: url('<?php echo $img ?>')">

            </div>
        <?php endif; ?>

        <div class="text-container">
            <?php if ($textTitle) : ?>
                <h3 class="text-title ">
                    <?php echo $textTitle  ?>
                </h3>
            <?php endif; ?>
            <?php if ($textDescription ) : ?>
                <div class="text">
                    <?php echo $textDescription  ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
    <?php if ($iconSectionArray) : ?>
        <div class="icon-wrapper">
            <?php foreach ($iconSectionArray as $single_item) {
                $icon = $single_item['icon'];
                $title = $single_item['title'];
                $description = $single_item['description'];
            ?>
                <div class="icon-container">
                    <?php if ($icon) : ?>
                        <div class="img_container">
                            <?php echo wp_get_attachment_image($icon, 'full'); ?>
                        </div>
                    <?php endif; ?>

                        <?php if ($title) : ?>
                            <p class="icon-title">
                                <?php echo  $title ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <p class="icon-description">
                                <?php echo  $description ?>
                            </p>

                <?php endif; ?>
                </div>
            <?php  } ?>
        </div>
    <?php endif; ?>
</div>
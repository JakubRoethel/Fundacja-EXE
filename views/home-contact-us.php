<?php
$title = get_field('contact_title');
$description = get_field('contact_description');
$button_link = get_field('contact_button_link');
$img = get_field('after_section_image');
?>

<div class="contact-us">
    <div class="contact-us-wrapper">
        <div class="content-wrapper">
            <div class="text-container">
                <?php if ($title) : ?>
                    <h2 class="title">
                        <?php echo $title ?>
                    </h2>
                <?php endif; ?>
                <?php if ($description) : ?>
                    <p class="description">
                        <?php echo $description ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if ($button_link) : ?>
                <div class="button-wrapper">
                    <a href="<?php echo $button_link['url'] ?>"><?php echo $button_link['title'] ?></a>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($img) : ?>
            <div class="img_container">
                <?php echo wp_get_attachment_image($img, 'full'); ?>
            </div>
        <?php endif; ?>
    </div>

</div>
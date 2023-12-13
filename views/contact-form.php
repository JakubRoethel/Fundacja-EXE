<?php
$title = get_field('contact_form')['title'];
$subTitle = get_field('contact_form')['subtitle'];
$contactFormShortCode = get_field('contact_form')['contact_form_short_code'];
?>



<div class="contact-form-section" id="contact">
    <div class="contact-form-container">
        <div class="contact-form-heading">
            <?php if ($title) : ?>
                <h2 class="title">
                    <?php echo $title ?>
                </h2>
            <?php endif; ?>
            <?php if ($subTitle) : ?>
                <p class="subtitle">
                    <?php echo $subTitle ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($contactFormShortCode) : ?>
            <div class="contact-form">
                <?php echo do_shortcode($contactFormShortCode); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php
$title = get_field('hero_section')['title'];
$description = get_field('hero_section')['description'];
$text_background = get_field('hero_section')['text_background'];
$hero_img = get_field('hero_section')['image'];
$button_link = get_field('hero_section')['button_link'];
?>

<div class="hero">
    <div class="content-wrapper" style="background: url('<?php echo $text_background ?>')">
        <?php if ($title) : ?>
            <h1><?php echo $title ?></h1>
        <?php endif; ?>
        <?php if ($description) : ?>
            <p><?php echo $title ?></p>
        <?php endif; ?>
        <?php if ($button_link) : ?>
            <div class="button-wrapper">
                <a href="<?php echo $button_link['url'] ?>"><?php echo $button_link['title'] ?></a>
            </div>
        <?php endif; ?>
    </div>
    <?php if ($hero_img) : ?>
        <div class="img-wrapper" style="background: url('<?php echo $hero_img ?>')">

        </div>
    <?php endif; ?>
</div>
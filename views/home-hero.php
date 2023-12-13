<?php
$title = get_field('hero_section')['title'];
$color_title = get_field('hero_section')['title_color_text'];
$description = get_field('hero_section')['description'];
$hero_img = get_field('hero_section')['image'];
$button_link = get_field('hero_section')['button_link'];
?>

<div class="hero" style="background: url('<?php echo $hero_img ?>')">
    <div class="content-wrapper" >
        <?php if ($title) : ?>
            <h1> <span class="special-color-text"><?php echo $color_title ?></span><?php echo $title ?></h1>
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
</div>
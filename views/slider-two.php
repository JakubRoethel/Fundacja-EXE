<?php

$title = get_field('blog_post_category_slider_two')['title'];
$subTitle = get_field('blog_post_category_slider_two')['subtitle'];
$description = get_field('blog_post_category_slider_two')['short_description'];
$chosenCategory = get_field('blog_post_category_slider_two')['choose_blog_post_category'];

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6, // Pobierz 6 postów
    'order' => 'DESC', // Pokaż najnowsze posty jako pierwsze
    'orderby' => 'date', // Uporządkuj wg daty postów
    'cat' => $chosenCategory // Kategoria do filtrowania postów
);
$query = new WP_Query($args);

?>

<div class="sliders sliders-section slider-one">
    <div class="section-heading-wrapper">
        <?php if ($subTitle) : ?>
            <h3 class="subtitle">
                <?php echo $subTitle ?>
            </h3>
        <?php endif; ?>
        <?php if ($title) : ?>
            <h2 class="title">
                <?php echo $title ?>
            </h2>
        <?php endif; ?>
        <?php if ($description) : ?>
            <p class="short-description">
                <?php echo $description ?>
            </p>
        <?php endif; ?>
    </div>
    <div class="swiper-container ">
        <div class="swiper">
            <div class="swiper-wrapper">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="swiper-slide">
                            <?php  get_template_part('entry'); ?>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</div>  
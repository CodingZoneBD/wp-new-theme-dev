<?php
/*
* The template for displaying attachment
*/
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 post_page">
                <?php get_template_part('template_part/post_setup'); ?>
                <?php var_export($post); ?>
                <p><a href="<?php echo $post->guid; ?>">Download</a></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
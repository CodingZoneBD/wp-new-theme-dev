<?php get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php the_content(); ?>
            </div>
            <div class="col-md-3">
                <h2>This is sidebar</h2>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
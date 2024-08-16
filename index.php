    <?php

    /**
     * Theme Header
     */
    get_header();
    ?>


    <section id="body_area">
        <div class="container">
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <?php
    /**
     * Theme Footer
     */
    get_footer();

    ?>
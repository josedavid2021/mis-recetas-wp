<?php get_header(); ?>

<?php if (have_posts()): while(have_posts()):the_post(); // LOOP ?>

    <main class="w-96 p-6 mx-auto px-10 text-xl mb-16">

        <!--<h1 class="text-3xl uppercase"><?php the_title(); ?></h1>-->

        <?php the_content(); ?>

    </main>

<?php endwhile;endif; ?>

<?php get_footer(); ?>
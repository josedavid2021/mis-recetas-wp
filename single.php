<?php get_header(); ?>

<main class="container mx-auto px-10">

    <?php if (have_posts()): while(have_posts()):the_post(); // LOOP ?>
        <article>
            <h1 class="text-4xl uppercase text-center mb-6"><?php the_title(); ?></h1>
            
            <div class="mb-2 text-xl text-center mb-12">
                <?php the_author(); ?> 
                <span class="text-gray-300">|</span> 
                <span class="text-gray-500"><?php echo get_the_date(); ?></span>
            </div>

            <div class="flex justify-center mb-12">
                <img class="w-full" src="<?php echo get_the_post_thumbnail_url(false, 'large'); ?>" alt="Receta">
            </div>           

            <div class="text-xl mx-auto w-full sm:w-11/12 md:w-10/12 lg:9/12 text-justify mb-24">
            <?php the_content(); ?>
            </div>
        </article> 
    <?php endwhile;endif; ?>    
    
</main>


<?php get_footer(); ?>


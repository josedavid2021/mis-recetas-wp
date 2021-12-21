<?php /* Template name: recetas */ ?>

<?php get_header(); ?>


<main class="container mx-auto px-10"> 

    <?php

    $args = array(
        'posts_per_page' => 2,
        'post_status' => 'publish',
        'post_type' => 'post',
        'paged' => $paged
    );

    $the_query = new WP_Query($args);

    ?>

    <?php if ($the_query->have_posts()): ?>

        <?php while($the_query->have_posts()): $the_query->the_post(); // LOOP ?>

            <article class="mb-12 border-b pb-10 border-gray-300">
                <h2 class="text-2xl uppercase mb-3 hover:underline">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="grid grid-cols-12 gap-6">
                    <a class="col-span-full sm:col-span-5 md:col-span-4" href="<?php the_permalink(); ?>">
                        <img class="hover:opacity-80" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>" alt="Vichyssoise de esparragos blancos">
                    </a>
                    <div class="col-span-full sm:col-span-7 mb:col-span-8"> <!-- el resto! -->
                        <div class="mb-2"><?php the_author(); ?> <span class="text-gray-300">|</span> <span class="text-gray-500"><?php echo get_the_date(); ?></span></div>
                        <div class="text-lg mb-6"><?php the_excerpt(); ?></div>
                        <div><a class="text-white px-3 py-2 hover:bg-green-900 rounded-md uppercase text-sm bg-green-700" href="<?php the_permalink(); ?>">Ver receta</a></div>
                    </div>                    
                </div>               
            </article>   

        <?php endwhile; ?>


    <?php else: ?>

        <div>No hay recetas</div>
    
    <?php endif; ?>

        <div class="mt-16 mb-20 text-lg text-center">
            <?php        
                echo paginate_links(
                    array (
                        'current' => max(1, $paged),
                        'total' => $the_query->max_num_pages,
                        'show_all' => true,
                        'prev_text' => '<',
                        'next_text' => '>',
                        'after_page_number' => '<span class="mx-3">|</span>'
                    )
                );
            ?>
        </div>

        <!--<div class="mt-16 mb-20 text-lg text-center">  
            <a class="hover:underline" href="recetas.html"><</a>
            <span class="text-gray-400">1</span> 
            <span class="text-gray-500 mx-2 text-base">|</span>
            <a class="hover:underline" href="recetas.html">2</a>
            <span class="text-gray-500 mx-2 text-base">|</span>
            <a class="hover:underline" href="recetas.html">3</a>
            <span class="text-gray-500 mx-2 text-base">...</span>
            <a class="hover:underline" href="recetas.html">12</a>
            <a class="hover:underline" href="recetas.html">></a>           
        </div>   --> 

    </main>

<?php get_footer(); ?>
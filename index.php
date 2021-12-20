<?php get_header(); ?>

<div class="container mx-auto px-10 mb-20">

        <?php
        $args = array (
            'posts_per_page' => 6,
            'post_status' => 'publish',
            'post_type' => 'post'
        );

        $the_query = new WP_Query($args);
        ?>

        <main class="grid grid-cols-12 gap-8 items-start">
        <?php if ($the_query->have_posts()): ?>
            <section class="col-span-full sm:col-span-8 md:col-span-9">

                <div class="grid grid-cols-2 gap-6">

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="border border-gray-400 p-2 sm:p-4">                        
                            <h2 class="text-xl sm:text-2xl uppercase text-center mb-3 hover:underline">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <a href="<?php the_permalink(); ?>">
                                <img class="hover:opacity-80 rounded-2xl" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>" alt="imagen1">
                            </a>
                        </div>

                    <?php endwhile;wp_reset_postdata(); ?>                   
                                 
                </div>

            </section>
        <?php endif; ?>
            <?php
            $args = array (
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post_type' => 'post'
            );

            $the_query = new WP_Query($args);
            ?>

            <aside class="col-span-full sm:col-span-4 md:col-span-3 bg-gray-200 p-4">
                <h2 class="text-2xl uppercase text-center mb-3">Menú del día</h2>
                <div>

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="flex items-center mb-3">  
                        <img class="w-28 mr-3" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>" alt="">
                        <a class="hover:underline" href="https://www.google.com/"><?php the_category(); ?></a>
                    </div>
                <?php endwhile;wp_reset_postdata(); ?>   
                  


                </divl>
            </aside>
        </main>
    </div>

<?php get_footer(); ?>
<?php /* Template Name: Cases */ ?>
<?php get_header(); ?>

<div class="w-full bg-[#EA5C14] h-28 md:h-52 grid place-content-center lg:place-content-start text-center lg:text-left relative">
    <img title="Seta laranja" class="seta-laranja-blog" src="<? echo tailpress_asset('resources/assets/Seta_Branca1.svg') ?>">
    <img title="Seta verde" class="seta-verde-blog" src="<? echo tailpress_asset('resources/assets/Seta_Branca2.svg') ?>">
    <p class="text-2xl text-center lg:text-left md:text-3xl lg:text-5xl font-bold pt-0 lg:pt-20 pl-0 tracking-wide lg:pl-80 text-white"><?php echo translation('casesSucesso'); ?></p>
</div>

<div class="w-full min-h-screen pt-16 mx-auto">
    <p class="text-center text-xl lg:text-2xl text-[#004F38]"><?php echo translation('resultadosComprovados'); ?></p>
    <p class="text-center text-xl md:text-2xl lg:text-4xl mt-10 font-medium"><?php echo translation('case1'); ?></p>
    <div class="container mx-auto grid place-content-start grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-4 xl:gap-x-36 space-x-10">
        <?php
        $args = array(
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'cases',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
                <a href="<?php echo esc_url(get_permalink(get_the_ID()));  ?>" class="select-none rounded-md shadow-sm w-full border border-gray-300 mx-auto mt-20">
                    <img class="w-full  object-cover h-40" src="<? echo $featured_img_url; ?>" alt="">
                    <div class="p-6">
                        <p class="text-sm"><?php the_title(); ?></p>
                        <button class="bg-[#41CBA5] hover:bg-green-700 w-full text-white rounded-md  h-10 mx-auto mt-4"><?php echo translation('saibaMais'); ?></button>
                    </div>
                </a>
        <?php
            endwhile;
        endif;
        ?>
    </div>

    <?php
    get_footer();

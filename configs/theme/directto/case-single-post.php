<?php
/*
 * Template Name: Single Case Post
 * Template Post Type: post
 */

get_header();

?>

<?php if (have_posts()) : ?>
    <?php
    while (have_posts()) :
        the_post();
        $posts = get_posts([]);
    ?>

        <div class="w-full bg-[#EA5C14] relative py-5">

            <section class="w-full h-min pb-5 relative">
                <img title="Seta laranja" class="seta-laranja-blog" style="--color_fill: #000;" src="<? echo tailpress_asset('resources/assets/Seta_Verde.svg') ?>">
                <img title="Seta verde" class="seta-verde-blog" src="<? echo tailpress_asset('resources/assets/Seta_Verde.svg') ?>">
                <nav class="bg-grey-light pl-4 lg:pl-28 z-30  text-white rounded-md w-full">
                    <ol class="list-reset flex">
                        <li><a href="/cases" class="text-white text-base md:text-xl hover:font-bold">Cases de Sucesso</a></li>
                        <li><span class="text-white mx-2 text-base md:text-xl">&gt;</span></li>
                    </ol>
                </nav>
                <p class="text-xl md:text-2xl lg:text:3xl xl:text-5xl font-bold mt-4 px-4 lg:pl-28 text-white">
                    <?php the_title(); ?>
                </p>
                <p class="text-base md:text-xl font-light pl-4 lg:pl-28 uppercase text-white">
                    <?php echo get_the_date('j/m/Y'); ?>
                </p>
            </section>

        </div>


        <article class="mt-10 select-none" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="container px-6 mx-auto text-xl md:text-2xl font-medium text-gray-500 text-justify indent-10 leading-8 space-y-6">
                <div class="w-full mb-4">
                    <img class="w-full h-full object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>

                <?php the_content(); ?>

            </div>

        </article>

        <div class="w-full mt-20 max-auto px-10">
            <div class="max-w-md mx-auto">
                <div class="w-full mx-auto h-0.5 bg-gray-300"></div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();

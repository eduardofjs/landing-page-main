<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<div class="w-full bg-[#EA5C14] h-28 md:h-64  grid place-content-center lg:place-content-start text-center lg:text-left relative">
    <img title="Seta laranja" class="seta-laranja-blog" src="<? echo tailpress_asset('resources/assets/Seta_Branca1.svg') ?>">
    <img title="Seta verde" class="seta-verde-blog" src="<? echo tailpress_asset('resources/assets/Seta_Branca2.svg') ?>">
    <p class="text-2xl text-center lg:text-left md:text-3xl lg:text-5xl font-bold pt-0 lg:pt-28 pl-0 lg:pl-80 tracking-wide text-white">Directto Blog</p>
</div>
<?php if (have_posts()) : ?>
    <?php
    the_post();
    $posts = get_posts([
        'numberposts' => 7,
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'post',
    ]);

    if (sizeof($posts) == 0) {
        get_template_part('template-parts/blog-empty');
    } else {

        $first_post = $posts[0];
    ?>
        <div class="w-full  px-5 lg:px-20 pt-20 pb-10 flex flex-wrap">
            <div class="w-full xl:w-6/12 px-5 lg:px-20 py-5">
                <a href="<?php echo get_permalink($first_post->ID) ?>">
                    <img title="Imagem do post" class="w-full h-[329px] hover:scale-105 hover:bg-gray-50 duration-300 ease-in-out hover:shadow-md object-cover" src="<?php echo get_the_post_thumbnail_url($first_post->ID, 'full') ?>">
                </a>
            </div>
            <div class="w-full xl:w-6/12  px-5 lg:px-20 py-5">
                <a href="<?php echo get_permalink($first_post->ID) ?>" class="hover:scale-105 hover:bg-gray-50 duration-300 ease-in-out hover:shadow-md">
                    <p class="text-xl md:text-[34px] text-justify font-medium text-black mb-10"><?php echo $first_post->post_title ?></p>
                    <p class="text-base md:text-[20px] text-[#B0B0B0]"><?php echo $first_post->post_date ?></p>
                    <p class="text-base md:text-[20px] mt-4 text-[#5F5F5F]"><?php echo $first_post->post_excerpt ?></p>
                </a>
            </div>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 px-10 lg:px-40 py-10 gap-x-10 gap-y-12">
            <?php foreach ($posts as $post) :
                if ($first_post->ID == $post->ID) {
                    continue;
                }
            ?>
                <div class="w-ful p-y-2 hover:bg-gray-50 hover:scale-105 duration-300 ease-in-out hover:shadow-md">
                    <div class="w-full ">
                        <a href="<?php echo get_permalink($post->ID) ?>">
                            <img title="Imagem do post" class="w-full h-[329px] object-cover" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>">
                        </a>
                    </div>
                    <div class="w-full p-4">
                        <a href="<?php echo get_permalink($post->ID) ?>">
                            <p class="text-xl md:text-[34px] text-justify font-medium text-black mb-10"><?php echo $post->post_title ?></p>
                            <p class="text-base md:text-[20px] text-[#B0B0B0]"><?php echo $post->post_date ?></p>
                            <p class="text-base md:text-[20px] mt-4 text-[#5F5F5F]"><?php echo $post->post_excerpt ?></p>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="w-full grid place-content-center">
            <div class="w-full flex flex-wrap px-6 md:px-24 lg:px-40">
                <div class="w-full lg:w-1/2 lg:pr-10">
                    <p class="text-black text-2xl font-medium">Ultimas postagens</p>
                    <div class="h-0.5 w-full bg-[#EA5C14] my-2">
                        <div class="w-[46px] h-1 bg-[#004F38]"></div>
                    </div>
                    <?php foreach ($posts as $post) :
                        if ($first_post->ID == $post->ID) {
                            continue;
                        }
                    ?>
                        <div class="w-full flex flex-wrap hover:scale-105 hover:bg-gray-50 duration-300 ease-in-out hover:shadow-md">
                            <div class="w-3/12 px-4">
                                <a href="<?php echo get_permalink($post->ID) ?>">
                                    <img title="Imagem do post" class="w-full object-cover" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>">
                                </a>
                            </div>
                            <div class="w-9/12">
                                <a href="<?php echo get_permalink($post->ID) ?>">
                                    <p class="text-sm text-justify font-medium text-black mb-10"><?php echo $post->post_title ?></p>
                                </a>
                            </div>
                        </div>
                        <div class="h-0.5 w-full bg-gray-300 my-2"></div>
                    <?php
                    endforeach;
                    ?>
                </div>
                <div class="w-full lg:w-1/2 lg:pl-10">
                    <p class="text-black text-2xl font-medium">Mais lidos</p>
                    <div class="h-0.5 w-full bg-[#EA5C14] my-2">
                        <div class="w-[46px] h-1 bg-[#004F38]"></div>
                    </div>
                    <?php foreach ($posts as $post) :
                        if ($first_post->ID == $post->ID) {
                            continue;
                        }
                    ?>
                        <div class="w-full flex flex-wrap hover:scale-105 hover:bg-gray-50 duration-300 ease-in-out hover:shadow-md">
                            <div class="w-3/12 px-4">
                                <a href="<?php echo get_permalink($post->ID) ?>">
                                    <img title="Imagem do post" class="w-full object-cover" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>">
                                </a>
                            </div>
                            <div class="w-9/12">
                                <a href="<?php echo get_permalink($post->ID) ?>">
                                    <p class="text-sm text-justify font-medium text-black mb-10"><?php echo $post->post_title ?></p>
                                </a>
                            </div>
                        </div>
                        <div class="h-0.5 w-full bg-gray-300 my-2"></div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    <?php
    }

    ?>

<?php endif; ?>

<?php
get_footer();

 <div class="w-full bg-[#EA5C14] flex flex-row justify-center items-center relative">
 	<section class=" container h-min py-10 relative">
 		<img title="Seta laranja" class="seta-laranja-blog" style="--color_fill: #000;" src="<? echo tailpress_asset('resources/assets/Seta_Verde.svg') ?>">
 		<img title="Seta verde" class="seta-verde-blog" src="<? echo tailpress_asset('resources/assets/Seta_Verde.svg') ?>">

 		<nav class="bg-grey-light pl-4 md:pl-28  text-white rounded-md w-full">
 			<ol class="list-reset flex">
 				<li><a href="/cases" class="text-white hover:text-blue-700">Cases de Sucesso</a></li>
 				<li><span class="text-white mx-2">&gt;</span></li>
 				<li class="text-white">Case</li>
 			</ol>
 		</nav>
 		<p class="text-xl md:text-2xl lg:text:3xl xl:text-5xl font-bold mt-4 pl-4 md:pl-28 text-white">
 			<?php the_title(); ?>
 		</p>
 		<p class="text-2xl font-light pl-4 md:pl-28 mt-10 uppercase text-white">
 			<?php echo get_the_date('j \d\e F \d\e Y'); ?>
 		</p>

 	</section>
 </div>


 <article class="mt-10" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
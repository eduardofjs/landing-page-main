<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<section class="min-h-screen w-full bg-[#E3E3E3] mx-auto hero relative grid place-content-center ">
    <img title="Seta laranja" class="seta-laranja" src="<? echo tailpress_asset('resources/assets/Seta Laranja.svg') ?>">
    <img title="Seta verde" class="seta-verde" src="<? echo tailpress_asset('resources/assets/Seta_Verde.svg') ?>">
    <div class="w-full inline-block py-20 px-10 lg:px-0 lg:max-w-[1036px] max-h-min">
        <h1 class="text-center text-xl lg:text-3xl uppercase text-[#EA5C14]"><?php echo translation('missao'); ?></h1>
        <h2 class="mt-10 text-center text-base lg:text-2xl  text-[#004F38]"><?php echo translation('sobreMissao'); ?></h2>
        <h1 class="text-center text-xl lg:text-3xl uppercase mt-20 text-[#EA5C14]"><?php echo translation('visao'); ?></h1>
        <h2 class="mt-10 text-center text-base lg:text-2xl  text-[#004F38]"><?php echo translation('sobreVisao'); ?></h2>
        <h1 class="text-center text-xl lg:text-3xl uppercase mt-20 text-[#EA5C14]"><?php echo translation('valores'); ?></h1>
        <h2 class="mt-10 text-center text-base lg:text-2xl  text-[#004F38]"><?php echo translation('sobreValores'); ?></h2>
    </div>
</section>
<section class="min-h-screen w-full py-16">
    <p class="text-[#004F38] font-medium text-4xl mb-4 text-center"><?php echo translation('time'); ?></p>
    <p class="text-[#004F38] font-medium text-2xl text-center"><?php echo translation('pessoasDirectto'); ?></p>
    <div class="w-full p-0 m-0 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-16 duration-300 justify-items-center gap-0 space-0">
        <a href="https://www.linkedin.com/in/andre-pretz-88250514" target="_blank" class="overflow-hidden w-full">
            <img class="object-cover w-full hover:scale-110 duration-300 easy-in-out" src="<? echo tailpress_asset('resources/assets/andre.png') ?>">
            <div class="team-info">
                <p>André Pretz</p>
                <h3>COO</h3>
            </div>
        </a>
        <a href="https://www.linkedin.com/in/adalbertovalente" target="_blank" class="overflow-hidden w-full">
            <img class="object-cover w-full hover:scale-110 duration-300 easy-in-out" src="<? echo tailpress_asset('resources/assets/adalberto_valente.png') ?>">
            <div class="team-info">
                <p>Adalberto Valente</p>
                <h3>CFO</h3>
            </div>
        </a>
        <a href="https://www.linkedin.com/in/rodrigo-gomes-a9a9aba2/" target="_blank" class="overflow-hidden w-full">
            <img class="object-cover w-full hover:scale-110 duration-300 easy-in-out" src="<? echo tailpress_asset('resources/assets/rodrigo.png') ?>">
            <div class="team-info">
                <p>Rodrigo Gomes</p>
                <h3>CEO e Co-founder</h3>
            </div>
        </a>
        <a href="https://www.linkedin.com/in/edyrsfgoes" target="_blank" class="overflow-hidden w-full">
            <img class="object-cover w-full hover:scale-110 duration-300 easy-in-out" src="<? echo tailpress_asset('resources/assets/edyr.png') ?>">
            <div class="team-info">
                <p>Edyr Góes</p>
                <h3>Head de Mercado<br>Internacional UE-FR</h3>
            </div>
        </a>
        <a href="https://www.linkedin.com/in/jesusedu/" target="_blank" class="overflow-hidden w-full">
            <img class="object-cover w-full hover:scale-110 duration-300 easy-in-out" src="<? echo tailpress_asset('resources/assets/eduardo.png') ?>">
            <div class="team-info">
                <p>Eduardo Felipe</p>
                <h3>Head de Produto</h3>
            </div>
        </a>
        <a href="https://www.linkedin.com/in/nei-oliveira-5214a2159/" target="_blank" class="overflow-hidden w-full">
            <img class="object-cover w-full hover:scale-110 duration-300 easy-in-out" src="<? echo tailpress_asset('resources/assets/nei.png') ?>">
            <div class="team-info">
                <p>Nei Oliveira</p>
                <h3>Co-founder</h3>
            </div>
        </a>
        <a href="https://www.linkedin.com/in/drauz-reis/" target="_blank" class="overflow-hidden w-full">
            <img class="object-cover w-full hover:scale-110 duration-300 easy-in-out" src="<? echo tailpress_asset('resources/assets/drauz_reis.png') ?>">
            <div class="team-info">
                <p>Drauz Reis</p>
                <h3>Board Member</h3>
            </div>
        </a>
    </div>
</section>


<?php
get_footer();

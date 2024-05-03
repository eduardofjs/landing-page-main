<?php /* Template Name: LandingPage */
get_header();
?>
<div class="select-none">
    <section class="min-h-screen w-full mx-auto  hero relative grid  justify-items-center " id="section-1">
        <img title="Seta laranja" class="seta-laranja" src="<? echo tailpress_asset('resources/assets/Seta Laranja.svg') ?>">
        <img title="Seta verde" class="seta-verde" src="<? echo tailpress_asset('resources/assets/Seta_Verde.svg') ?>">
        <div class="w-full pt-20 px-10 lg:px-0 lg:max-w-[1036px] md:pt-[329px]">
            <h1 class="text-center text-2xl font-bold leading-10 lg:text-6xl"><?php echo translation('hero1'); ?></h1>
            <h2 class="mt-10 text-center text-xl leading-10 text-[#004F38] lg:text-[32px]"><?php echo translation('hero2'); ?></h2>
            <div class="grid justify-items-center pt-20">
                <a href="https://marketplace.directto.io/" class="h-10 rounded-md pt-2 bg-[#009874] px-4 text-[15px] uppercase text-white duration-200 hover:scale-105 hover:bg-[#41CBA5]"><?php echo translation('heroBtn'); ?></a>
            </div>
        </div>
    </section>
    <section class="min-h-screen w-full grid place-content-center bg-[#EA5C14]">
        <div class="flex flex-wrap container lg:max-w-[1432px] xl:pt-[40px]">
            <div class="w-full p-10 lg:w-5/12">
                <h3 class="text-center text-3xl lg:text-[40px] mb-6 text-white xl:text-left"><?php echo translation('section1Title'); ?></h3>
                <div class="gap-y-4 grid">
                    <div class="rounded-md transition ease-in-out duration-300 hover:scale-105 hover:font-semibold bg-white w-full py-6 text-xl px-6 text-justify text-[#009874]">
                        <?php echo translation('section1Text1'); ?>
                    </div>
                    <div class="rounded-md transition ease-in-out duration-300 hover:scale-105 hover:font-semibold bg-white w-full py-6 text-xl px-6 text-justify text-[#009874]">
                        <?php echo translation('section1Text2'); ?>
                    </div>
                    <div class="rounded-md transition ease-in-out duration-300 hover:scale-105 hover:font-semibold bg-white w-full py-6 text-xl px-6 text-justify text-[#009874]">
                        <?php echo translation('section1Text3'); ?>
                    </div>
                    <div class="rounded-md transition ease-in-out duration-300 hover:scale-105 hover:font-semibold bg-white w-full py-6 text-xl px-6 text-justify text-[#009874]">
                        <?php echo translation('section1Text4'); ?>
                    </div>
                    <div class="rounded-md transition ease-in-out duration-300 hover:scale-105 hover:font-semibold bg-white w-full py-6 text-xl px-6 text-justify text-[#009874]">
                        <?php echo translation('section1Text5'); ?>
                    </div>
                    <div class="rounded-md transition ease-in-out duration-300 hover:scale-105 hover:font-semibold bg-white w-full py-6 text-xl px-6 text-justify text-[#009874]">
                        <?php echo translation('section1Text6'); ?>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-7/12 pl-5 lg:pl-10 pt-4 lg:pt-48">
                <lottie-player src="<? echo tailpress_asset('resources/assets/Ilustra_01-' . get_language() . '.json') ?>" background="transparent" speed="1" class="w-full"></lottie-player>
            </div>
        </div>
    </section>
    <section class="w-full bg-white pt-20" id="como-funciona">
        <h1 class="text-center text-2xl text-[#004F38] font-bold leading-10 lg:text-3xl"><?php echo translation('section2Text1'); ?></h1>
        <p class="text-2xl px-10 mt-5 text-center text-[#004F38]"><?php echo translation('section2Text2'); ?></p>
        <div class="w-full grid place-content-center mt-20">
            <div class="container  px-10 lg:px-20 flex flex-wrap ">
                <div class="w-full lg:w-6/12">
                    <h1 class="text-3xl lg:text-[42px] text-center lg:text-left mt-10 text-[#EA5C14]"><?php echo translation('section2Text3'); ?></h1>
                    <p class="text-2xl lg:text-[26px] text-justify lg:text-left text-[#6B6F78] mt-20"><?php echo translation('section2Text4'); ?></p>
                </div>
                <div class="w-full lg:w-6/12">
                    <lottie-player src="<? echo tailpress_asset('resources/assets/Ilustra_02-' . get_language() . '.json') ?>" background="transparent" speed="1" class="w-full"></lottie-player>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-white pt-20 " id="section-4">
        <div class="w-full grid place-content-center mt-20">
            <div class="container px-10 lg:px-20 flex flex-wrap ">
                <div class="w-full lg:w-6/12">
                    <lottie-player src="<? echo tailpress_asset('resources/assets/Ilustra_03-' . get_language() . '.json') ?>" background="transparent" speed="1" class="w-full"></lottie-player>
                </div>
                <div class="w-full lg:w-6/12">
                    <h1 class="text-3xl lg:text-[42px] text-center lg:text-right mt-10 text-[#004F38]"><?php echo translation('section3Text1'); ?></h1>
                    <p class="text-2xl lg:text-[26px] text-[#6B6F78] mt-20 text-justify lg:text-right"><?php echo translation('section3Text2'); ?></p>
                </div>

            </div>
        </div>
    </section>
    <section class="w-full pb-0 md:pb-20 bg-white pt-20 " id="section-5">
        <div class="w-full grid place-content-center mt-20">
            <div class="container px-10 lg:px-20 flex flex-wrap ">
                <div class="w-full  lg:w-6/12">
                    <h1 class="text-3xl text-center lg:text-left lg:text-[42px] mt-20 text-[#EA5C14]"><?php echo translation('section4Text1'); ?></h1>

                    <p class="text-2xl text-justify lg:text-left lg:text-[26px] text-[#6B6F78] mt-20"><?php echo translation('section4Text2'); ?></p>
                </div>
                <div class="w-full lg:w-6/12 text-right">
                    <lottie-player src="<? echo tailpress_asset('resources/assets/Ilustra_04-' . get_language() . '.json') ?>" background="transparent" speed="1" class="w-full"></lottie-player>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full grid place-content-center mt-20 pb-20 px-10 md:px-0">
        <hr class="my-8 w-[400px] xl:w-[1082px] border-[#2EB691] border-1 ">
    </section>
    <section class="w-full pb-20 mb-36 bg-white text-center">
        <div class="w-full text-center px-10 md:px-0">
            <h1 class="text-center text-2xl text-[#004F38] font-bold leading-10 lg:text-3xl"> <?php echo translation('section5Text1'); ?></h1>
            <p class="text-2xl mt-5 text-center text-[#004F38]"><?php echo translation('section5Text2'); ?></p>
        </div>
        <div class="w-full mx-auto mt-20 pt-10 px-10 md:px-0 animated-hover">
            <div class="mx-auto h-96  relative mt-20">
                <div class="relative mx-auto h-[394px] grid place-content-center">
                    <img src="<? echo tailpress_asset('resources/assets/angular_verde.svg') ?>" alt="" class="left-arrow-animated">
                    <div class="relative">
                        <span @mouseenter="setHoverValuesValue('conexao', true)" @mouseleave="setHoverValuesValue('conexao', false)" class="relative  uppercase font-bold duration-300 hover:scale-[1.01] hover:font-medium cursor-pointer text-base md:text-3xl  text-[#2EB691] hover:text-[#EA5C14]"><?php echo translation('section5Text3'); ?></span>
                        <span :class="{'absolute left-0 top-10 text-center  leading-7  text-base md:text-[24px] w-[130px] mt-4  text-[#009874]': true, 'hidden': !valuesHover.conexao}"><?php echo translation('section5Text4'); ?></span>
                    </div>
                    <img src="<? echo tailpress_asset('resources/assets/angular_laranja.svg') ?>" alt="" class="right-arrow-animated">
                </div>

                <div class="top-0 left-0 lg:left-40 absolute">
                    <p @mouseenter="setHoverValuesValue('consciencia', true)" @mouseleave="setHoverValuesValue('consciencia', false)" class="uppercase text-base md:text-2xl hover:cursor-pointer text-[#707070] hover:text-[#EA5C14] duration-300 hover:scale-105 hover:font-medium"><?php echo translation('section5Text8'); ?></p>
                    <h5 :class="{'mt-4 w-[130px] md:w-[216px] leading-7  text-justify absolute text-sm md:text-[21px] text-[#004F38] duration-1000 ease-in-out': true, 'hidden duration-1000 ease-in-out': !valuesHover.consciencia}"><?php echo translation('section5Text9'); ?></h5>
                </div>
                <div class="top-0 right-0 lg:right-40 absolute">
                    <p @mouseenter="setHoverValuesValue('inovacao', true)" @mouseleave="setHoverValuesValue('inovacao', false)" class="uppercase text-base md:text-2xl hover:cursor-pointer text-[#707070] hover:text-[#EA5C14] duration-300 hover:scale-105  hover:font-medium"><?php echo translation('section5Text5'); ?></p>
                    <h5 :class="{'mt-4 w-[130px] md:w-[216px] leading-7  text-justify absolute text-sm md:text-[21px] text-[#004F38] duration-1000 ease-in-out': true, 'hidden duration-1000 ease-in-out': !valuesHover.inovacao}"><?php echo translation('section5Text12'); ?></h5>
                </div>
                <div class="bottom-0 left-0 lg:left-40 absolute">
                    <p @mouseenter="setHoverValuesValue('transparencia', true)" @mouseleave="setHoverValuesValue('transparencia', false)" class="uppercase text-base md:text-2xl hover:cursor-pointer text-[#707070] hover:text-[#EA5C14] duration-300 hover:scale-105  hover:font-medium"><?php echo translation('section5Text10'); ?></p>
                    <h5 :class="{'mt-4 w-[130px] md:w-[216px] leading-7  text-justify absolute text-sm md:text-[21px] text-[#004F38] duration-1000 ease-in-out': true, 'hidden duration-1000 ease-in-out': !valuesHover.transparencia}"><?php echo translation('section5Text11'); ?></h5>
                </div>
                <div class="bottom-0 right-0 lg:right-40 absolute">
                    <p @mouseenter="setHoverValuesValue('facilidade', true)" @mouseleave="setHoverValuesValue('facilidade', false)" class="uppercase text-base md:text-2xl hover:cursor-pointer text-[#707070] hover:text-[#EA5C14] duration-300 hover:scale-105  hover:font-medium"><?php echo translation('section5Text6'); ?></p>
                    <h5 :class="{'mt-4 w-[130px] md:w-[216px] leading-7 text-justify absolute text-sm md:text-[21px] text-[#004F38] duration-1000 ease-in-out': true, 'hidden duration-1000 ease-in-out': !valuesHover.facilidade}"><?php echo translation('section5Text7'); ?></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq - Directto -->
    <section class="w-full  pb-20 " id="faq">
        <h1 style="padding-top: 60px; margin-top: -60px;">&nbsp;</h1>
        <h1 class="text-[#EA5C14] text-center mb-20 font-bold text-2xl md:text-3xl lg:text-[42px]">Directto</h1>
        <div class="w-full max-w-[1087px] mx-auto">
            <div class="w-full" v-if="!showAllFaqDirecto">
                <faq-item v-for="(item, idx) in faq.directto.slice(0, 4)" key="idx" :faq="item" />
            </div>
            <div class="w-full" v-else>
                <faq-item v-for="(item, idx) in faq.directto" key="idx" :faq="item" />
            </div>
            <div class="w-full grid place-content-center mt-20">
                <button @click="toggleAllFaqDirecto()" :class="(showAllFaqDirecto ? 'bg-white text-[#009874] border-2 border-[#009874]' : 'bg-[#009874]  text-white') + ' hover:-translate-y-2 ease-in-out duration-300 rounded-md px-4 py-1 uppercase text-base'">{{showAllFaqDirecto ? '<?php echo translation('mostrarMenos'); ?>' : '<?php echo translation('mostrarMais'); ?>' }}</button>
            </div>
        </div>
    </section>
    <!-- Faq - Buyers and Sellers -->
    <section class="w-full  pb-20 mt-20" id="faq-buyers">
        <h1 class="text-[#EA5C14] text-center mb-20 font-bold text-2xl md:text-3xl lg:text-[42px]"><?php echo translation('vendedoresCompradores'); ?></h1>
        <div class="w-full max-w-[1087px] mx-auto">
            <div class="w-full" v-if="!showAllFaqBuyer">
                <faq-item v-for="item in faq.buyer.slice(0, 4)" :faq="item" />
            </div>
            <div class="w-full" v-else>
                <faq-item v-for="item in faq.buyer" :faq="item" />
            </div>
            <div class="w-full grid place-content-center mt-20">
                <button @click="toggleAllFaqBuyer()" :class="(showAllFaqBuyer ? 'bg-white text-[#009874] border-2 border-[#009874]' : 'bg-[#009874]  text-white') + ' hover:-translate-y-2 ease-in-out duration-300 rounded-md px-4 py-1 uppercase text-base'">{{showAllFaqBuyer ? '<?php echo translation('mostrarMenos'); ?>' : '<?php echo translation('mostrarMais'); ?>' }}</button>
            </div>
        </div>
    </section>
    <!-- Contato -->
    <section class="w-full grid  place-content-center py-20 mt-20 contato-form-bg">
        <div class="w-full lg:w-[864px] flex flex-col justify-center px-10 md:px-0">
            <p class="text-white text-xl md:text-2xl lg:text-3xl text-center mb-20"><?php echo translation('formHeadertenhaAcesso'); ?></p>
            <div class="w-full md:w-[800px] bg-[#EA5C14] mx-auto rounded-xl px-4 md:px-36 py-10">
                <p class="text-center text-white mb-10 text-2xl"><?php echo translation('preenchaSeusDados'); ?></p>
                <form class="w-full">
                    <label class="text-white text-base" for="nome"><?php echo translation('nome'); ?></label>
                    <input type="text" name="nome" placeholder="Digite o seu nome completo" id="nome" class="px-4 py-2 mb-7 text-gray-500 bg-white rounded-md w-full" />
                    <label class="text-white text-base" for="telefone"><?php echo translation('phone'); ?></label>
                    <input type="phone" name="telefone" placeholder="55+(00) 00000 - 0000" id="telefone" class="px-4 py-2 mb-7 text-gray-500 bg-white rounded-md w-full" />
                    <label class="text-white text-base" for="email"><?php echo translation('email'); ?></label>
                    <input type="email" name="email" placeholder="email@email.com" id="email" class="px-4 py-2 mb-10 text-gray-500 bg-white rounded-md w-full" />
                    <section class="w-full grid place-content-center mt-2 mb-8">
                        <button @click="toggleAllFaqBuyer()" class="bg-[#E1B61A] text-center hover:-translate-y-2 text-white ease-in-out duration-300 rounded-md px-4 py-1 uppercase text-base"><?php echo translation('solicitarDemonstração'); ?></button>
                    </section>
                </form>
            </div>
        </div>
    </section>

    <?php
    get_footer();

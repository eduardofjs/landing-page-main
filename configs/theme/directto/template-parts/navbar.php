<?php
function is_active_route($route)
{
    $current_route =  get_post_field('post_name', get_post());
    echo  $current_route == $route ? 'font-black' : '';
}
?>

<nav class="px-2 bg-[#41CBA5] sticky shadow-md w-full z-20 top-0 ">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <div class="flex items-center">
            <a href="<?php echo get_bloginfo('url'); ?>" class="title-font bg-white h-[60px] md:h-[80px] w-[138px] items-center grid place-content-center">
                <img title="Directto - Logo" src="<? echo tailpress_asset('resources/assets/logo.png') ?>" class="w-20 inline-block cursor-pointer">
            </a>
            <p class="ml-20 hidden lg:flex text-white">

                <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbarLanguage" class="flex  mr-14 justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-white  rounded  xl:hover:bg-transparent xl:border-0  xl:p-0 xl:w-auto  hover:font-bold"><?php echo translation('idioma'); ?>: <?php echo get_language_full(); ?><svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg></button>
            <div id="dropdownNavbarLanguage" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow  " data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translation(0px, 805px);">
                <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="?lang=pt" class="block py-2 px-4">Português</a>
                    </li>
                    <li>
                        <a href="?lang=en" class="block py-2 px-4">Inglês</a>
                    </li>
                </ul>
            </div>

            </p>
        </div>

        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg xl:hidden  focus:outline-none focus:ring-2 focus:ring-blue-300" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Abrir menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="#FFF" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <div class="hidden w-full xl:block xl:w-auto duration-300 easy-in-out pb-4 xl:pb-0" id="mobile-menu">
            <ul class="flex flex-col p-4 mt-4rounded-lg border border-gray-100 xl:flex-row xl:space-x-8 xl:mt-0 text-base xl:font-medium xl:border-0 xl:bg-transparent ">
                <li>
                    <a href="/" class="block <?php is_active_route('inicio'); ?>  mr-14 py-2 pr-4 pl-3 text-white   hover:font-bold rounded  xl:hover:bg-transparent xl:border-0 xl:p-0"><?php echo translation('home'); ?></a>
                </li>

                <li>
                    <a href="http://marketplace.directto.io/" target="_blank" class="block <?php is_active_route('marketplace'); ?>   mr-14 py-2 pr-4 pl-3 text-white hover:font-bold  rounded  xl:hover:bg-transparent xl:border-0 xl:p-0"><?php echo translation('marketplace'); ?></a>
                </li>
                <li>
                    <a href="/sobre" class="block <?php is_active_route('sobre'); ?>  mr-14 py-2 pr-4 pl-3 text-white  hover:font-bold  rounded  xl:hover:bg-transparent xl:border-0  xl:p-0"><?php echo translation('sobre'); ?></a>
                </li>

                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex  mr-14 justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-white  rounded  xl:hover:bg-transparent xl:border-0  xl:p-0 xl:w-auto  hover:font-bold <?php is_active_route('conteudo'); ?> <?php is_active_route('cases'); ?> <?php is_active_route('blog'); ?> "><?php echo translation('conteudo'); ?><svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow  " data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translation(0px, 805px);">
                        <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/blog" class="block py-2 px-4">Blog</a>
                            </li>
                            <li>
                                <a href="/cases" class="block py-2 px-4">Cases</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="block lg:hidden">
                    <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbarLanguage" class="flex w-100 mr-14 justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-white  rounded  xl:hover:bg-transparent xl:border-0  xl:p-0 xl:w-auto  hover:font-bold"><?php echo translation('idioma'); ?>: <?php echo get_language_full(); ?><svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdownNavbarLanguage" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow  " data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translation(0px, 805px);">
                        <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="?lang=pt" class="block py-2 px-4">Português</a>
                            </li>
                            <li>
                                <a href="?lang=en" class="block py-2 px-4">Inglês</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <a href="https://marketplace.directto.io/login" class="items-center hidden lg:flex bg-[#FAAE00] border-0 py-1 px-3 focus:outline-none hover:bg-[#FFD979] rounded text-base text-white mt-4 lg:mt-0 uppercase"><?php echo translation('login'); ?></a>
            </ul>
        </div>
    </div>
</nav>
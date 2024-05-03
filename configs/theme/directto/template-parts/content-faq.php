<div @click="showQuestion()" class="w-full relative mb-4 cursor-pointer px-4 py-2 shadow-slate-600 hover:rounded-md">
    <h3 class="mb-4 text-2xl text-[#004F38] font-semibold leading-normal  border-b-2 border-orange-400"><?php echo $args['pergunta']; ?></h3>
    <p data-question="<?php echo $args['id']; ?>" class="hidden mt-5 duration-700 ease-in-out leading-8 font-medium  text-xl text-[#B0B0B0]">
        <?php echo $args['resposta']; ?>
    </p>

    <span id="question-plus-<?php echo $args['id']; ?>" class="material-symbols-outlined w-12 h-12 text-gray-600 duration-300 ease-in-out absolute right-3 top-4 transform hover:scale-110">
        add
    </span>
    <span id="question-minus-<?php echo $args['id']; ?>" class="material-symbols-outlined hidden w-12 h-12 text-gray-600 duration-300 ease-in-out absolute right-3 top-4 transform hover:scale-110">
        remove
    </span>
</div>
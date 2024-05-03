export default {
  props: {
    faq: {
      type: Object,
      required: true,
    },
  },
  data() {
    return { isOpen: false }
  },
  methods: {
    toggle() {
      this.isOpen = !this.isOpen
    },
  },
  template: `<div  @click="toggle()" class="w-full relative mb-4 cursor-pointer px-4 py-2 shadow-slate-600 hover:rounded-md">
    <h3 class="mb-4 text-2xl text-[#004F38] font-semibold leading-normal  border-b-2 border-orange-400">{{ faq.pergunta }}</h3>
    <p v-if="isOpen" class=" mt-5 duration-700 ease-in-out leading-8 font-medium  text-xl text-[#B0B0B0]" v-html="faq.resposta">
       
    </p>

    <span v-if="!isOpen" class="material-symbols-outlined w-12 h-12 text-gray-600 duration-300 ease-in-out absolute right-3 top-4 transform hover:scale-110">
        add
    </span>
    <span v-if="isOpen" class="material-symbols-outlined w-12 h-12 text-gray-600 duration-300 ease-in-out absolute right-3 top-4 transform hover:scale-110">
        remove
    </span>
</div>`,
}

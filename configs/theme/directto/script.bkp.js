const lottie = document.querySelectorAll('lottie-player')
window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY
  lottie.forEach((el) => {
    const elementPosition = el.getBoundingClientRect().top
    if (elementPosition < window.innerHeight) {
      el.play()
    } else {
      el.pause()
    }
  })
})
const consciencia = document.getElementById('consciencia')
const transparencia = document.getElementById('transparencia')
const descInovacao = document.querySelector('.desc-consciencia')
const descTransparencia = document.querySelector('.desc-transparencia')
const facilidade = document.getElementById('facilidade')
const descFacilidade = document.querySelector('.desc-facilidade')
const inovacao = document.getElementById('inovacao')
const descConsciencia = document.querySelector('.desc-inovacao')
consciencia.addEventListener('mouseover', () => {
  descConsciencia.classList.toggle('hidden')
})
transparencia.addEventListener('mouseover', () => {
  descTransparencia.classList.toggle('hidden')
})
inovacao.addEventListener('mouseover', () => {
  descInovacao.classList.toggle('hidden')
})
facilidade.addEventListener('mouseover', () => {
  descFacilidade.classList.remove('hidden')
})

function showDescription(event) {
  console.log(event)
}

function showQuestion(id) {
  const question = document.querySelector(`[data-question="${id}"]`)
  question.classList.toggle('hidden')
  document.getElementById(`question-plus-${id}`).classList.toggle('hidden')
  document.getElementById(`question-minus-${id}`).classList.toggle('hidden')
}

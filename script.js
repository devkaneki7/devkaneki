document.addEventListener('DOMContentLoaded', function() {
    const elementsToTransition = document.querySelectorAll('.intro, .portfolio, .contact, .project'); // Seleciona os elementos que terão transição

    elementsToTransition.forEach(element => {
        element.classList.add('transition-element'); // Adiciona a classe
    });
});


const menuOpenButton = document.querySelector("#menu-open-button");
const menuCloseButton = document.querySelector("#menu-close-button");

menuOpenButton.addEventListener("click", () => {
    document.body.classList.toggle("show-mobile-menu");
});

menuCloseButton.addEventListener("click", () => menuOpenButton.click());

// Agregar desplazamiento suave
const links = document.querySelectorAll('.nav-link');

links.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Evitar el comportamiento por defecto del enlace
        const targetId = this.getAttribute('href'); // Obtener el ID del destino
        const targetElement = document.querySelector(targetId); // Seleccionar el elemento destino

        // Desplazamiento suave
        targetElement.scrollIntoView({
            behavior: 'smooth' // Hacer el desplazamiento suave
        });
    });
});
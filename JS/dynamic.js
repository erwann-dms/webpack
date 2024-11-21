// window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector('nav').classList.add('scrolled');
    } else {
        document.querySelector('nav').classList.remove('scrolled');
    }
}

function lightmodeToggle() {
       var element = document.body;
        element.classList.toggle("light-toggle");
} 

document.addEventListener("DOMContentLoaded", () => {
    // Sélection des éléments du carrousel
    const track = document.getElementById("carouselTrack");
    const items = document.querySelectorAll(".carousel-item");
    const prevButton = document.getElementById("prevBtn");
    const nextButton = document.getElementById("nextBtn");

    let currentIndex = 0; // Index actuel du carrousel

    // Fonction pour mettre à jour la position du carrousel
    const updateCarousel = () => {
        const itemWidth = items[0].offsetWidth; // Largeur de chaque élément
        track.style.transform = `translateX(-${currentIndex * itemWidth}px)`; // Translation du track

        // Gestion de l'état des boutons
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex === items.length - 1;
    };

    // Événements pour les boutons
    prevButton.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    nextButton.addEventListener("click", () => {
        if (currentIndex < items.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });

    // Mise à jour lors du redimensionnement de la fenêtre
    window.addEventListener("resize", updateCarousel);

    // Initialisation
    updateCarousel();
});


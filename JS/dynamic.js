// window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector('nav').classList.add('scrolled');
    } else {
        document.querySelector('nav').classList.remove('scrolled');
    }
}

function checklightmode() {
    var checkbox = document.getElementById("lightmode");
    setLightmode(checkbox.checked);
}

function setLightmode(param) {
       var element = document.body;
       if (param) {
        element.classList.add("light-toggle");
       } else {
        element.classList.remove("light-toggle");
       }
        
} 

document.addEventListener("DOMContentLoaded", () => {
    checklightmode() // check si la page doit etre initialisée avec le lightmode pré activé

    const track = document.getElementById("carouselTrack");
    const items = document.querySelectorAll(".carousel-item");
    const prevButton = document.getElementById("prevBtn");
    const nextButton = document.getElementById("nextBtn");

    let currentIndex = 0; 

    const updateCarousel = () => {
        const itemWidth = items[0].offsetWidth; 
        track.style.transform = `translateX(-${currentIndex * itemWidth}px)`; 

        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex === items.length - 1;
    };

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

    window.addEventListener("resize", updateCarousel);

    updateCarousel();
});
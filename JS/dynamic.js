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
    const track = document.getElementById("carouselTrack");
    const items = document.querySelectorAll(".carousel-item");
    const prevButton = document.getElementById("prevBtn");
    const nextButton = document.getElementById("nextBtn");

    let currentIndex = 0; 

    const updateCarousel = () => {
        const itemWidth = items[0].offsetWidth; 
        console.log('Item width:', itemWidth); 

        track.style.transform = `translateX(-${currentIndex * itemWidth}px)`; 
        console.log('Current index:', currentIndex);  

        prevButton.disabled = currentIndex === 0; 
        nextButton.disabled = currentIndex === items.length - 1;  
        console.log('Prev button disabled:', prevButton.disabled);
        console.log('Next button disabled:', nextButton.disabled);
    };

    prevButton.addEventListener("click", () => {
        console.log('Previous button clicked');
        if (currentIndex > 0) {
            currentIndex--; 
            console.log('New index after prev:', currentIndex);  
            updateCarousel();
        }
    });

    // Événement sur le bouton "Next"
    nextButton.addEventListener("click", () => {
        console.log('Next button clicked');
        if (currentIndex < items.length - 1) {
            currentIndex++; 
            console.log('New index after next:', currentIndex);  
            updateCarousel();
        }
    });

    window.addEventListener("resize", updateCarousel);

    updateCarousel();
});

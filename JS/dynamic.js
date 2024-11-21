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

const track = document.getElementById('carouselTrack');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentIndex = 0;

function updateButtons() {
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex === track.children.length - 1;
}

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        updateButtons();
    }
});

nextBtn.addEventListener('click', () => {
    if (currentIndex < track.children.length - 1) {
        currentIndex++;
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        updateButtons();
    }
});

updateButtons();

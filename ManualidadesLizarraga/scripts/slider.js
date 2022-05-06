const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.getElementsByClassName("carouselImage");

//botones
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//Counter
let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';

//botones listenners
nextBtn.addEventListener('click',() => {
    if(counter >= carouselImages.length - 1) return;
    carouselSlide.style.transition="transorm 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click',() => {
    if(counter <= 0) return;
    carouselSlide.style.transition="transorm 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';
});


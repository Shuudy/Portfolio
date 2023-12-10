
import '../css/app.scss';


const navbar = document.querySelector('.navbar');

function handleScroll() {
    const scrollY = window.scrollY;
    if (scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', handleScroll);

document.addEventListener('DOMContentLoaded', handleScroll);
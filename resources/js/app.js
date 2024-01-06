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

// Sidebar responsive javascript events
const sidebar = document.querySelector('.sidebar');
const navbarMenu = document.getElementById('navbar-menu');
const sidebarClose = document.getElementById('sidebar-close');
const mask = document.getElementById('mask');
if (sidebar && navbarMenu && mask && sidebarClose) {
    navbarMenu.addEventListener('click', () => {
        sidebar.classList.add('show');
        mask.classList.toggle('show', sidebar.classList.contains('show'));
        document.body.classList.toggle('overflow-hidden', sidebar.classList.contains('show'));
    });
    mask.addEventListener('click', () => {
        sidebar.classList.remove('show');
        mask.classList.remove('show');
        document.body.classList.remove('overflow-hidden');
    });

    sidebarClose.addEventListener('click', () => {
        sidebar.classList.remove('show');
        mask.classList.remove('show');
        document.body.classList.remove('overflow-hidden');
    });
}
const handleNavState = () => {
    let isOpen = false;
    const navToggle = document.getElementById('nav_toggle');
    navToggle.addEventListener('click', () => {
        isOpen = !isOpen;
        const nav = document.getElementById('nav_main');
        nav.classList.toggle('open');
    });
};

const closeNav = () => {
    const navToggle = document.getElementById('nav_toggle');
    const nav = document.getElementById('nav_main');
    if (nav.classList.contains('open')) {
        nav.classList.remove('open');
    }
}

const handleActiveNavLink = () => {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('#nav_main .nav-link');
    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');
        if (linkPath === currentPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
};

const handleBeforeAfterSliders = () => {
    const sliders = document.querySelectorAll('.slider');
    sliders.forEach((slider) => {
        const control = slider.querySelector('.slider-control');
        const after = slider.querySelector('.after');
        control.addEventListener('input', (e) => {
            after.style.width = `${e.target.value}%`;
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.toggle('loaded');
    handleNavState();
    handleActiveNavLink();
    handleBeforeAfterSliders();
});
// Ilustración Inicio Talki
const home = document.querySelector(".landing")

if (home) {
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('bm'),
        path: document.getElementById('data-json').value,
        renderer: 'svg',
        loop: false,
        autoplay: true
    })
}


// Menú Desktop animación scroll

const body = document.body;
const nav = document.querySelector(".header");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll == 0) {
        nav.classList.remove(scrollUp);
        return;
    }

    if (currentScroll > lastScroll && !nav.classList.contains(scrollDown)) {
        // down
        nav.classList.remove(scrollUp);
        nav.classList.add(scrollDown);
    } else if (currentScroll < lastScroll && nav.classList.contains(scrollDown)) {
        // up
        nav.classList.remove(scrollDown);
        nav.classList.add(scrollUp);
    }
    lastScroll = currentScroll;
});


// Menú responsive

const open = document.querySelector('#open');
const close = document.querySelector('#close');
const menuUl = document.querySelector('.header__menu-ul')


function openMenu() {
    menuUl.classList.remove('menu-close')
    menuUl.classList.add('menu-open')
    open.classList.add('responsive-none')
    close.classList.remove('responsive-none')
}

open.addEventListener("click", openMenu);

function closeMenu() {
    menuUl.classList.add('menu-close')
    menuUl.classList.remove('menu-open')
    open.classList.remove('responsive-none')
    close.classList.add('responsive-none')
}

close.addEventListener("click", closeMenu);
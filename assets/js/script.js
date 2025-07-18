const header = document.querySelector('#header');
const banner = document.querySelector('#banner');
const botao = document.querySelector('#user');
const menu = document.querySelector('#menupaginas')
// const drop = document.querySelector('#drop')

const headerHeight = header.offsetHeight;

if (banner) {
    banner.style.marginTop = `${-headerHeight}px`;
    banner.style.paddingTop = `${headerHeight}px`;

} else {
    header.classList.add('container-pages');
    botao.classList.remove('btn-outline-light');
    botao.classList.add('btn-outline-dark');
    menu.classList.remove('btn-outline-light');
    menu.classList.add('btn-outline-dark');
    // drop.classList.remove(':focus');
    // drop.classList.add('btn-dark text-dark');

}

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 3000
    },
    breakpoints: {
        '768': {
            slidesPerView: 2
        },
        '1024': {
            slidesPerView: 3
        }
    }
});
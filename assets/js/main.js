//Menu Toggler

let toggler = document.querySelector('.menu__toggler');
let menu = document.querySelector('.menu__list');

let menu_items = document.querySelectorAll('.menu__item');

toggler.addEventListener('click', () => {
    menu.classList.toggle('open');
    toggler.classList.toggle('open');
})

menu_items.forEach((item) => {

    item.addEventListener('click', () => {
        menu.classList.remove('open');
        toggler.classList.remove('open');    
    })
})


// Search form toggler

let search_btn = document.querySelector('.search-icon');
let search_form = document.querySelector('.search-form');

search_btn.addEventListener('click', () => {
    search_form.classList.toggle('open');
})

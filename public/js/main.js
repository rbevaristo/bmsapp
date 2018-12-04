let sideMenuToggler = document.getElementById('sideMenu--toggler');

sideMenuToggler.addEventListener('click', toggleSideMenu);

function toggleSideMenu() {
    let aside = document.getElementById('sideMenu');
    let headerNav = document.getElementById('headerNav');

    if (aside.classList.contains('isOpen')) {
        aside.classList.remove('isOpen');
    } else {
        aside.classList.add('isOpen');
    }

}

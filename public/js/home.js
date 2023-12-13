const menu = document.getElementById('menu')
const main = document.getElementById('main')
const btnMenu = document.getElementById('btnMenu')

function toggleMenu() {
    
    if (menu.style.left === '-350px') {
      menu.style.left = '0';
      main.style.marginLeft = '350px';
    } else {
      menu.style.left = '-350px';
      main.style.marginLeft = '0';
    }
}

btnMenu.addEventListener("click", () => toggleMenu())
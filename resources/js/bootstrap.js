import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//the following script is used to open and close the menu in mobile view (small display)
document.addEventListener('DOMContentLoaded', function() {

    const menuButton = document.getElementById('menu-open-button');
    const closeButton = document.getElementById('menu-close-button');
    const mobileMenu = document.getElementById('mobile-menu');
  
    if (menuButton && closeButton && mobileMenu) {
       
        function openMenu() {
            mobileMenu.classList.remove('hidden');
        }

    
        function closeMenu() {
            mobileMenu.classList.add('hidden');
        
        }

       
        menuButton.addEventListener('click', openMenu);

      
        closeButton.addEventListener('click', closeMenu);
    }
});



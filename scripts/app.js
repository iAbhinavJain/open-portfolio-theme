/* Function being called on click of menu icon */
function toggleMenu() {
    /* Storing Nav items and menu icon in variables */
    var menu_items = document.querySelector('#mobile-header ul');
    var menu_icon = document.querySelector('.menu-icon i');
    /* On click of Menu Toggle Icon, we are Checking if the menu is closed/hidden, 
    if so, making it display and vice versa. Also, switching fontawesome icon respectively to improve UX  */
    if (menu_items.style.display == 'none') {
        menu_items.style.display = 'block';
        menu_icon.classList.remove('fa-bars');
        menu_icon.classList.add('fa-xmark');
    } else {
        menu_items.style.display = 'none';
        menu_icon.classList.remove('fa-xmark');
        menu_icon.classList.add('fa-bars');
    }
}
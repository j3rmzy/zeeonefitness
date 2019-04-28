const mobileMenuBtn = document.querySelector('.burger-btn-js');
const menu = document.getElementById('site-title');

mobileMenuBtn.addEventListener('click', () => {
  if (menu.classList.contains('open')) {
    menu.classList.remove('open');
  } else {
    menu.classList.add('open');
  }
});
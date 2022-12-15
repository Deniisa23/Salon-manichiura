let nav = document.querySelector('nav');

window.addEventListener('scroll', function () {
  if(window.pageYOffset > 720) {
    nav.classList.add('bg-white', 'shadow');
  } else {
      nav.classList.remove('bg-white', 'shadow');
  }
});
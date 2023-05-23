/* Kreativny kod */
const goTopBtn = document.querySelector('.go-top');

window.addEventListener('scroll', (e) => {
  if (window.scrollY > 800) {
    goTopBtn.classList.remove('hide');
  } else {
    goTopBtn.classList.add('hide');
  }
});

goTopBtn.addEventListener('click', () => {
  document.body.scrollIntoView();
});

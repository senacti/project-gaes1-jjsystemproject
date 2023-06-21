const botonPopup = document.querySelector('.botonLogin');
const contenedorPrincipal= document.querySelector('.contenedorPrincipal');
const iconoCerrar = document.querySelector('.icon-close');

botonPopup.addEventListener('click', () => {
    contenedorPrincipal.classList.add('activate-popup');
});
iconoCerrar.addEventListener('click', () => {
    contenedorPrincipal.classList.remove('activate-popup');
    setTimeout(() => {
        location.reload();
      }, 500);
});

const linkRegister = document.querySelector('#registrar');
const contenedorLogin = document.querySelector(".contenedor-login");
const contenedorRegister = document.querySelector(".contenedor-register");

linkRegister.addEventListener("click", function(event) {
  event.preventDefault();
contenedorLogin.style.display = "none";
contenedorRegister.style.display = "block";
});

const linklogin = document.querySelector('#login');

linklogin.addEventListener("click", function(event) {
  event.preventDefault();

contenedorRegister.style.display = "none";
contenedorLogin.style.display = "block";
});


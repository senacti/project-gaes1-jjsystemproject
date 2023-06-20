const botonContinuar = document.getElementById('Continuar');
const parte1 = document.querySelector('.parte1');
const parte2 = document.querySelector('.Parte2');

botonContinuar.addEventListener('click', function() {
  parte1.style.display = 'none';
  parte2.style.display = 'block';
});
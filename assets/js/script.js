$(document).ready(() => {
  
  
 
});

// COOKIE
$(document).on('scroll', e => {
  if (window.scrollY > 200)
    $("#cookie").addClass('hide');
  else
    $("#cookie").removeClass('hide');
})

// BUTTON CATEGORIA
function hiddenCategoria(button, indice) {
  button.classList.toggle('hide');
  let paragrafos = $('.container-categoria p');
  paragrafos[indice].classList.toggle('hide');
}
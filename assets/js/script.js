$(document).ready(() => {
  let open = false;
  $('#button-burguer').on('click', () => {
    $('.navbar-menu').toggleClass('hide');
    $('.logo').toggleClass('invisible');
    // if(open) //ABERTO -> FECHAR
    //   $('html, body').css({ 'overflow': 'visible' });
    // else
    //   $('html, body').css({ 'overflow': 'hidden' });

    open = !open;
  });
  
 
});

// COOKIE
$(document).on('scroll', e => {
  e.preventDefault();
  if (window.scrollY > 200)
    $("#cookie").addClass('hide');
  else
    $("#cookie").removeClass('hide');
  
  console.log($(".navbar-menu").scrollY);
})

// BUTTON CATEGORIA
function hiddenCategoria(button, indice) {
  button.classList.toggle('hide');
  let paragrafos = $('.container-categoria p');
  paragrafos[indice].classList.toggle('hide');
}
$(document).ready(() => {
  var open = false;
  $('#button-burguer').on('click', e => {
    $('.navbar-menu').toggleClass('hide');
    if(window.screen.width > 992 && !open)
      $('.logo').addClass('invisible');
    
    if (open) {
      $('.logo').removeClass('invisible');
      $('html, body').css({ 'overflow': 'visible' });
      $('.menu').removeClass('background-header');
    }
      else
      $('html, body').css({ 'overflow': 'hidden' });
    
    $('#button-burguer').toggleClass('hide');
    open = !open;
  });

  // FOOTER
  $('.container-h5 h5').on('click', function () {
    $(this).parent().toggleClass('hide')
  })

  // CERTIFICAÇÃO
  $('.container-certificacao h5').on('click', () => $('.container-certificacao').toggleClass('hide'));
  
});

// COOKIE
$(document).on('scroll', e => {
  e.preventDefault();
  if (window.scrollY > 200)
    $("#cookie").addClass('hide');
  else
    $("#cookie").removeClass('hide');
    
})


// BUTTON CATEGORIA
function hiddenCategoria(button, indice) {
  button.classList.toggle('hide');
  let paragrafos = $('.container-categoria');
  paragrafos[indice].classList.toggle('hide');
}
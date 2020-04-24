//initialisation du slide de la page d'index
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.slider');
  var instances = M.Slider.init(elems,{
      height: 350,
      indicators:true,
  });
});
///////page d'accueil

//la barre latterale

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);
});

///// pages programmes

//initialisation du carrousel des agences

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.carousel');
  var instances = M.Carousel.init(elems,{
    indicators:true,
    fullwidth:true
  });
});
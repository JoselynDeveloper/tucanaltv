// work in progress - needs some refactoring and will drop JQuery i promise :)
var instance = $(".hs__wrapper"), x;
$.each( instance, function(key, value) {
    
    var arrows = $(instance[key]).find(".arrow"),
        box = $(instance[key]).find(".hs"), x,
        mx = 0,
        maxScrollWidth = box[0].scrollWidth - box[0].clientWidth / 2 - 10;
    
  $(arrows).on('click', function() {
      
    if ($(this).hasClass("arrow-next")) {
      x = ((box.width() / 2)) + box.scrollLeft() - 10;
      box.animate({
        scrollLeft: x,
      })
      if(x < maxScrollWidth - (box.width() / 2)) {
       $(this).prev().removeClass('disabled');
      } else {
       $(this).addClass('disabled');
      }
    } else {
      x = ((box.width() / 2)) - box.scrollLeft() -10;
      box.animate({
        scrollLeft: -x,
      })
      if(x > -10) {
        $(this).addClass('disabled');
      } else {
        $(this).next().removeClass('disabled');
      }
    }
      
  });
    
  $(box).on({
    mousemove: function(e) {
      var mx2 = e.pageX - this.offsetLeft;
      if(mx) this.scrollLeft = this.sx + mx - mx2;
    },
    mousedown: function(e) {
      this.sx = this.scrollLeft;
      mx = e.pageX - this.offsetLeft;
    }
  });

  $(document).on("mouseup", function(){
    mx = 0;
  });
    
});




$(document).ready(function () {

    var o = window.location.pathname
    console.log(o)
    if (o == '/proyectotucanaltv/index.php' || o == '/proyectotucanaltv/') {
        $('body').css({
            background: 'url("https://mdbootstrap.com/img/Photos/Others/img (40).jpg")no-repeat center center',
            backgroundSize: 'cover'
        })
    }


    //NABVAR COLOR CONTACTO
    if(o == '/proyectotucanaltv/contact.php'){
      $('nav').addClass('colorNC')
    }

    //Evento de slider
    new WOW().init();

    pruebalastpage();
})


function pruebalastpage(){
  $('.deportes').click(function(){
    $('.categoryPageTitle').html('Deportes');
  })
}
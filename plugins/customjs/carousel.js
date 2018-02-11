$(document).ready(function(e) {
          $(".carousel-indicators").click(function(){ 
            $(".carousel").carousel('prev');
          })
          $(".left").click(function(){ 
            $(".carousel").carousel('prev');
          })
          $(".right").click(function(){ 
            $(".carousel").carousel('next');
          })
        });
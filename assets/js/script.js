// dropdown---------------------------------------------------------------------

$(".dropdown-trigger").dropdown();




// Parallax start--------------------------------------------------------------------

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, null);
  });

// Parallax end--------------------------------------------------------------------


// Sidenav start--------------------------------------------------------------------

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, null);
  });


  $(document).ready(function(){
    $('.carousel').carousel({fullWidth: true,}).height(500);

    setInterval(function(){
    $('.carousel').carousel('next');
  
    },4000);

  });

// Sidenav end--------------------------------------------------------------------


// Review Modal start ---------------------------------------------------------
  
  
$(document).ready(function(){
  $('.modal').modal();
});

   // Review Modal end ---------------------------------------------------------

// init materialize tab---------------------------------------------------------

    var elem = document.querySelector('.tabs');
     var options = {}
     var instance = M.Tabs.init(elem, options);

// init forms destination select--------------------------------------------------
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, null);
  });
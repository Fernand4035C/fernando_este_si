$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    toggler = $("#toggler-clas");
    navbarDash = $("#navbarDash");
    console.log(toggler.text());
    if (" - Matutino " === toggler.text()) {
        navbarDash.removeClass("navbar-dark bg-dark");
        $("body").removeClass("bg-dark")
        navbarDash.addClass("navbar-light bg-light");
        $("body").addClass("bg-light");
    }
    toggler.on("click", function () {
        if (" - Matutino " === toggler.text()) {
            toggler.html('<i class="fas fa-sync-alt"></i> - Nocturno <i class="fas fa-circle"></i>');
            getColor(toggler.text());
        } else {
            toggler.html('<i class="fas fa-sync-alt"></i> - Matutino <i class="far fa-circle"></i>');
            
            getColor(toggler.text());
        }
    })
    function getColor(color) {
        if (color === " - Matutino ") {
            navbarDash.removeClass("navbar-dark bg-dark");
            $("body").removeClass("bg-dark")
            navbarDash.addClass("navbar-light bg-light");
            $("body").addClass("bg-light");
            $("#logo-icon").css("color", "white");
        } else if (color === " - Nocturno ") {
            navbarDash.removeClass("navbar-light bg-light");
            $("body").removeClass("bg-light")
            navbarDash.addClass("navbar-dark bg-dark");
            $("body").addClass("bg-secondary");
            $("#logo-icon").css("color", "black");
        }
    }
//  if(toggler.value){
//      
//  }
})
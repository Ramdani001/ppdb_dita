$(document).ready(() => {
    $('#textProfile').addClass('text-left');
    // Active Event Button Profile
        changeProf("p");

});

function changeProf(e){
    var active = $('#active-bg');

    if(e == "p"){

        $('#btnProfile').addClass('active-chose');

        active.removeClass('d-none');

        $('#textProfile').removeClass('d-none');
        $('#textSambutan').addClass('d-none');
        
        active.removeClass('active-sambutan');
        active.addClass('active-profile');
    }else{
        
        $('#btnProfile').removeClass('active-chose');

        $('#textProfile').addClass('d-none');
        $('#textSambutan').removeClass('d-none');
        $('#textSambutan').addClass('activeText');
        
        active.removeClass('d-none');
        active.removeClass('active-profile');
        active.addClass('active-sambutan');
        
        console.log("Console Event Sambutan");
    }

}
$(document).ready(function(){

    $('.navbar-toggler').click(function () {
            $('.navbar-toggler').toggleClass('change')
    });

    //sticky navbar less paddin
    $(window).scroll(function(){
        let position =$(this).scrollTop();
        console.log(position);
    })

    $("#header , .info").ripples({
        dropRadius: 20,
        perturbance: 0.015,
    
    });

    $('.parent-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        // other options
        gallery : {
            enabled :true
        }

      });

    

});
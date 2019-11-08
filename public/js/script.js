function ReLoadImages(){
    $('img[data-src]').each( function(){
        //* set the img src from data-src
        //$(this).attr('src', $(this).attr('data-src'));
    });
}
$(document).ready(function() {
    $('.nav-button').click(function(){
        $("#navbarSupportedContent").hasClass("collapsing") 
            || ($('.nav-button').toggleClass('change') && $('.collapse a').toggleClass('fromLeft'));
    });

    ReLoadImages();
})

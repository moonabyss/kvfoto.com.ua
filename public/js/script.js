$(document).ready(function() {
    $('.nav-button').click(function(){
        $("#navbarSupportedContent").hasClass("collapsing") || $('.nav-button').toggleClass('change');
    });
})
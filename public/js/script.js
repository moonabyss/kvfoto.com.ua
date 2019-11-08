function ReLoadImages(){
    $('img[data-src]').each( function(){
        //* set the img src from data-src
        //$(this).attr('src', $(this).attr('data-src'));
    });
}

function resizeAllMasonryItems() {
    let allItems = document.getElementsByClassName('card');
    for (let i = 0; i < allItems.length; i++) {
        this.resizeMasonryItem(allItems[i]);
    }
}

function resizeMasonryItem(item) {
    let grid = $('.masonry')[0];
    let rowGap = parseInt($(grid).css('grid-row-gap'));
    let rowHeight = parseInt($(grid).css('grid-auto-rows'));

    /*
     * Spanning for any brick = S
     * Grid's row-gap = G
     * Size of grid's implicitly create row-track = R
     * Height of item content = H
     * Net height of the item = H1 = H + G
     * Net height of the implicit row-track = T = G + R
     * S = H1 / T
     */

    let rowSpan = Math.ceil((item.querySelector('.card-content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap))+8;

    /* Set the spanning as calculated above (S) */
    item.style.gridRowEnd = 'span ' + rowSpan;
}

$(document).ready(function() {
    $('.nav-button').click(function(){
        $("#navbarSupportedContent").hasClass("collapsing") 
            || ($('.nav-button').toggleClass('change') && $('.collapse a').toggleClass('fromLeft'));
    });


    window.addEventListener('resize', resizeAllMasonryItems);

    ReLoadImages();

    resizeAllMasonryItems ();

    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({ wrapping: true, alwaysShowClose: false });
    });
});

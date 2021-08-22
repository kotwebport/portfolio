$('document').ready(function () {

    /**
     * Слайдер навигации
     */

    $('div.direction').on('click', function () {
        $('div#work-nav-best').css('display', 'none');
        $('div.work-nav-open').removeClass('work-nav-open');
        var directionId = $(this).data('id');
        var workNav = $('div.work-nav[data-id=' + directionId + ']');
        workNav.addClass('work-nav-open');
    });


});


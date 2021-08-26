$('document').ready(function () {

    /**
     * Слайдер навигации
     */
    var bestWorks = $('div#work-nav-best a.work');
    setMargin(bestWorks);
    $('div#work-nav-best').css('display', 'inline-block');


    $('div.direction').on('click', function () {
        $('div#work-nav-best').css('display', 'none');
        $('div.work-nav-open').removeClass('work-nav-open');
        var directionId = $(this).data('id');
        $('div.work-nav[data-id=' + directionId + ']').addClass('work-nav-open');
        var openWorks = $('div.work-nav-open a.work');
        setMargin(openWorks);

    });
});

/**
 * Функция автоматической установки полей для представленных работ
 * @param works
 */
function setMargin(works) {
    var margin = -((30 * works.length - 70) / works.length * 1.09) / 2 + '%';
    works.css({'margin-left': margin, 'margin-right': margin});
}



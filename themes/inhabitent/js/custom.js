(function ($) {
    $(document).ready(function () {
$searchField = $('.search-field');
$iconSearch = $('.icon-search');
        //your code here
        $iconSearch.on('click', function () {
        $searchField.addClass('search-slide');
        $searchField.focus();

        });
        $searchField.on('blur', function () {
        $searchField.removeClass('search-slide');

        })
    });

})(jQuery);

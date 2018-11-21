(function ($) {

    $(document).ready(function () {

        //your code here
        $('.icon-search').on('click', function () {
            $('.search-field').addClass('search-slide');
            $('.search-field').focus();

        });
        $('.search-field').on('blur', function () {
            $('.search-field').removeClass('search-slide');

        })
    });

})(jQuery);

(function ($) {

    $(document).ready(function () {

        
    });

})(jQuery);
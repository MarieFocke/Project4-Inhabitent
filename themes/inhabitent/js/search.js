(function($){
    $('.icon-search').on('click', function(event){
        event.preventDefault()
    $('.search-field').animate({ width: 'toggle' });
    $('.search-field').focus();
 });
    $('.search-field').on('blur', function(event){
        if($('.search-field').val()===''){
            $('.search-field').animate({ width: 'hide' });
        }
});
})(jQuery);

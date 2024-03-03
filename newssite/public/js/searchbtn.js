function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper1');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder1').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input1').val('');
        }
}

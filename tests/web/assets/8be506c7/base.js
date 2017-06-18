var fontawesomeWidgetInit = function(el){
    var rootEl = $('#'+el);
    var dropdownEl = rootEl.find('.dropdown-menu');
    var dropdownIcons = dropdownEl.find('i');
    var dropdownHandlerValueEl = rootEl.find('.dropdown-handler .value');
    var dropdownHandlerIconEl = rootEl.find('.dropdown-handler i');
    var hiddenInputEl = rootEl.find('input');
    var searchInputEl = dropdownEl.find('.search input');
    dropdownIcons.click(function(){
        var value = $(this).data('value');
        dropdownHandlerValueEl.text(value.substring(3).replace('-', ' '));
        dropdownHandlerIconEl.removeClass();
        dropdownHandlerIconEl.addClass('fa '+value);
        hiddenInputEl.val(value);
    });
    searchInputEl.bind('keyup change', function(){
        var searchStr = searchInputEl.val();
        dropdownIcons.hide();
        dropdownIcons.each(function(){
            if ( this.className.search(searchStr) !== -1 ) {
                $(this).show();
            }
        });
    });
};

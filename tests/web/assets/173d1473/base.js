var fontawesomeWidgetInit = function(el){
    var rootEl = $('#'+el);
    var dropdownEl = rootEl.find('.dropdown-menu');
    var dropdownHandlerValueEl = rootEl.find('.dropdown-handler .value');
    var dropdownHandlerIconEl = rootEl.find('.dropdown-handler i');
    var hiddenInputEl = rootEl.find('input');
    dropdownEl.find('i').click(function(){
        var value = $(this).data('value');
        dropdownHandlerValueEl.text(value.substring(3).replace('-', ' '));
        dropdownHandlerIconEl.removeClass();
        dropdownHandlerIconEl.addClass('fa '+value);
        hiddenInputEl.val(value);
    });
    dropdownEl.find('.search input').keyup(function(){
        alert('ok');
    });
};

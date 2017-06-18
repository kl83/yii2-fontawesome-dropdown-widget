var fontawesomeWidgetInit = function(el){
    var rootEl = $('#'+el);
    var dropdownEl = rootEl.find('.dropdown-menu');
    var dropdownHandlerValueEl = rootEl.find('.dropdown-handler .value');
    var dropdownHandlerIconEl = rootEl.find('.dropdown-handler .value');
    var hiddenInputEl = rootEl.find('input');
    dropdownEl.find('i').click(function(){
        alert('ok');
        dropdownHandlerValueEl.text($(this).className);
    });
};
jQuery(function($){
    
});

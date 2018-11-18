
$(document)
    .ready(function() {
    // fix menu when passed
    $('.masthead')
        .visibility({
        once: false,
        onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
        }
        });
    // create sidebar and attach to menu open
    $('.ui.sidebar').sidebar('attach events', '.toc.item');
    })
;


function menu_semantic(){
    div = ".ui.vertical.menu";
    div_html = "ui vertical menu";
    $('.categories').replaceWith( '<div class="' + div_html + '">' + $('.categories').html() + "</div>" );
    ul = div + ' > ul';
    $(ul).replaceWith( '' + $( ul ).html() + "" );
    li = div + ' > li';
    qts = $( li );
    $( li ).remove();

    for(i=0; qts.length > i ; i++){
        opcao = qts[i]['innerHTML'];
        $(div).append(opcao);
    }
    a = div + ' > a';
    $( a ).addClass('item');
}

$(function(){
    menu_semantic();
});
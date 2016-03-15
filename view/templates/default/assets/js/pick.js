var grayBox;   // box gris qui apparait devant les tuilles
var grayBoxText;

$(document).ready(function () {
    initGrayBox();
    showGrayBox();
});
// le div gris qui va cacher les tuilles pendant que Player1 attends la rep de Player2
function initGrayBox() {
    grayBox = $('<div></div>');
    grayBoxText = $('<span id="grayBoxText"></span>');

    $('#middleDiv').prepend(grayBox);
    grayBox.append('<div id="loadingCircle"><div class="circle"></div><div class="circle1"></div></div>');
    grayBox.append(grayBoxText);

    grayBox.addClass("darkCover");
    grayBoxText.text('Waiting for %Player2_Nickname%');
}
function showGrayBox() {
    grayBox.show();
}
function hideGrayBox() {
    grayBox.hide();
}
// suite à l'appuie sur l'image
function kickMap(el) {
    var container = $(el);   // div containing img&text
    griserImage(container);
}
function griserImage(container) {
    container.attr('data-value', 0);    // change div's value, to avoid it change css on mouseHower
    // faire disparaitre l'effet de survol, car après avoir changé 'data-value' l'effet "mouseLeave" 
    // n'a plus d'effet. Du coup on le fait ici à la main
    container.children('div').css('background-color', 'rgba(0,0,0,0)');
    // griser le champ de texte
    container.css('background-color', 'rgba(0,0,0,0.8)');
    // griser l'image
    container.children('img').css({
        '-webkit-filter': 'grayscale(1)',
        'filter': 'grayscale(100%)'
    });
    // cacher les tuilles
    setTimeout(function () {
        showGrayBox();
    }, 400);
}
// highlighting text 
function highlightUp(el) {
    var container = $(el);              // div containing img&text
    var val = $(el).attr('data-value'); // get its custom value
    if (val == 1)
        container.children('div').css('background-color', 'rgba(214,251,251,0.3)');
}
function highlightDown(el) {
    var container = $(el);
    var val = $(el).attr('data-value');
    if (val == 1)
        container.children('div').css('background-color', 'rgba(214,251,251,0)');
}

window.onload = function () {
    var height = $(window).height();

    $("#left-panel").css({ "height": height })

    var labelPanelHeight = $("#label-panel").css("height")
    var headerPanelHeight = $("#header-panel").css("height")
    var footerPanelHeight = $("#footer-panel").css("height")
    $("#right-panel").css({ "height": height })
    var articlePanelHeight = parseInt(height) - parseInt(labelPanelHeight) - parseInt(headerPanelHeight) - parseInt(footerPanelHeight)
    console.log(height, labelPanelHeight, headerPanelHeight, articlePanelHeight, footerPanelHeight)
    $("#article-panel").css({ "height": articlePanelHeight })
}
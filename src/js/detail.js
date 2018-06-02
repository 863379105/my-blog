 //markDown转HTMl的方法
 function mdToHml(){
    var content=$("#demo1").val();//获取需要转换的内容
    $("#demo1").val(content);//将需要转换的内容加到转换后展示容器的textarea隐藏标签中
    console.log(content)
    //转换开始,第一个参数是上面的div的id
    editormd.markdownToHTML("detail-panel", {
        htmlDecode: "style,script,iframe", //可以过滤标签解码
        emoji: true,
        taskList:true,
        tex: true,               // 默认不解析
        flowChart:true,         // 默认不解析
        sequenceDiagram:true,  // 默认不解析
    });
}
function rollBack(){
    history.back();
}
window.onload = function () {
    var height = $(window).height();
    $("#left-panel").css({ "height": height })
    $("#right-panel").css({ "height": height })
    var labelPanelHeight = $("#label-panel").css("height")
    var headerPanelHeight = $("#header-panel").css("height")
     
    var articlePanelHeight = parseInt(height) - parseInt(labelPanelHeight) - parseInt(headerPanelHeight)
    $("#article-panel").css({ "height": articlePanelHeight })
    mdToHml()
    $(".rollbackBTN").on("click",rollBack)
 }
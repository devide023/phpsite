// 初始化 app
var myApp = new Framework7({
    modalTitle:'WebApp',
    modalButtonOk:'确定',
    modalButtonCancel:'取消',
    onAjaxStart:function (xhr) {
        myApp.showPreloader('');
    },
    onAjaxComplete:function (xhr) {
        myApp.hidePreloader();
    }
});

// 为便于使用，自定义DOM库名字为$$
var $$ = Dom7;

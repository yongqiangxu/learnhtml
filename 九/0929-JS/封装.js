/**
 * Created by inter on 2017/9/29.
 */

var dialog = {
    success : function (num,tit,message) {
        layer.open({
            icon : num,
            title : tit,
            content : message,
            yes : function () {
                window.location.href = url;

            }
        });
    },
     error : function (message) {
        layer.open({
            icon : 2,
            title : '错误',
            content : message
        })

     }
};
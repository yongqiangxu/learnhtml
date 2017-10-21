/**
 * Created by inter on 2017/9/30.
 */

var dialog = {

    success : function (num, text,url) {
        layer.open({
            coin : num,
            content : text,
            yes : function () {

                window.location.href = url;


            }


        })




    }

};
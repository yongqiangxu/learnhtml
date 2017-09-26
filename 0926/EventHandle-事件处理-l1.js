/**
 * Created by inter on 2017/9/26.
 */

var EventHandle = {
    //添加事件

    addevent: function (element, type, eventhandle) {
        if (element.addEventListener) {
            element.addEventListener(type, eventhandle, false);


        } else {
            element.attachEvent('on' + type, eventhandle);
        }


    },
    //移除事件
    removeevent: function (element, type, eventhandle) {
        if (element.removeEventListener) {
            element.removeEventListener(type, eventhandle, false);

        }else {
            element.attachEvent('on' + type, eventhandle);
        }

    }


};


/**
 * Created by inter on 2017/9/26.
 */
var Eventhadle = {


    //添加事件监听;

    addEvent: function (element, type, eventhandle) {
        if (element.addEventListener) {
            console.log(element);
            element.addEventListener(type, eventhandle, false);


        } else {
            element.attachEven('on' + type, eventhandle);
        }

    },


    //移除事件;
    removeEvent : function (element,type,eventhandle) {
        if (element.removeEventListener) {
            element.removeEventListener(type,eventhandle,false);

        }else {
            element.attachEvent('on' + type, eventhandle);
        }

    }

};













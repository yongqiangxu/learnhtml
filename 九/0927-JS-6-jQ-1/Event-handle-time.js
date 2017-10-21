/**
 * Created by inter on 2017/9/27.
 */

var EventHandle = {

    addevent : function (element, type, event) {
        if (ele.addEventListener) {
            element.addEventListener(type, event, false);
        }else {
            element.attachEvent('on' + type, event);
        }



    },

    removeevent : function (element, type, event) {

        if (element.removeEventListener) {
            element.removeEventListener(type, event, false);

        }else {
            element.detachEvent('on' + type, event);
        }
    }


};
/**
 * Created by inter on 2017/9/30.
 */


$(document).ready(function () {
//TODO 搜索框
    $('#search .sou .sousou .kuang')
        .focus(function () {
        $(this).val('');})

        .blur(function () {
        $(this).val('123')
    });

    //todo 京东小金库

    var dhtuIndex = 1;
setInterval(function () {
    $('#daohang .dhright .dhtu ul li').eq(1).addClass('on')
        .siblings().removeClass('on');
    dhtuIndex = !dhtuIndex;



}, 2000);

//TODO 浏览商品区域右侧

    $('#main .mainleft .liulan .liuright').hover(function () {
        $('#main .mainleft .liulan .liuright .righttu').css({
           ' background-image' : 'url(images/15/.pgn)'
        });
        $(this).css({
            'backgroundColor' : '#f2f2f2'
        })
    })








});
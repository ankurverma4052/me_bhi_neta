"use strict";$(document).ready(function(){$("#esp-user-profile").easyPieChart({barColor:"#0667D6",trackColor:"rgba(0,0,0,0)",scaleColor:!1,scaleLength:0,lineCap:"round",lineWidth:2,size:104,animate:{duration:2e3,enabled:!0}}),$(".header-color").on("click",function(){var a=$(this).attr("data-color"),o=$("body").attr("data-header-color");$("body").removeClass(o).addClass(a).attr("data-header-color",a)}),$(".sidebar-color").on("click",function(){var a=$(this).attr("data-color"),o=$("body").attr("data-sidebar-color");$("body").removeClass(o).addClass(a).attr("data-sidebar-color",a)})});
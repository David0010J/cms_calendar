$(document).ready(function () {
    var isRotation = false;
    new Propeller(document.getElementById("wrapper-propeller"), {
        inertia: 0,
        speed: 0,
        step: 0,
        onRotate: function () {
            /*console.log("rotate");*/
            isRotation = false;
        },
        onDragStop: function () {
            /* console.log("stop");*/
            if (!isRotation) {
                setTimeout(function () {
                    isRotation = true;
                }, 500);
            }
        },
        onDragStart: function () {},
    });
    var degree = localStorage.getItem("key");
    $("#wrapper-propeller").css(
        "transform",
        "rotate(" + degree + ") translateZ(0px)"
    );
    /*$("#wrapper1").css("transform", "'rotate(' + degree +') translateZ(0px) !important;'" );*/
    setInterval(function () {
        var transform = $("#wrapper-propeller").attr("style");
        var res = transform.split("(")[1];
        res = res.split(")")[0];
        localStorage.setItem("key", res);
    }, 1000);

    var isSmall = false;
    var clickRight = false;
    $(".link-setting").click(function () {
        var route = $(this).attr("data-page");
        if (route == "" || route == location.hash) {
            return false;
        }
        if (route != undefined) {
            window.location.href = route;
        }
    });

    $(".piece").click(function () {
        var route = $(this).attr("data-page");
        if (route == "" || route == location.hash) {
            return false;
        }
        if (route != undefined) {
            $(".tab-content").css("display", "none");
            $(".wrapper").css("display", "none");
            $(".blg-table").css("height", "99vh");
            $(".slider-switch").css("display", "none");
            window.location.href = route;
        }

        if (route.substring(2) == "schedule") {
            for (var i = 0; i < $(".layerPath").length; i++) {
                var savedTop = $(".layerPath").eq(i).attr("data-top");
                $(".layerPath").eq(i).animate({ top: savedTop }, 0);
            }
            animatedLayer(4, 0);
            sessionStorage.setItem("click_index", 4);
            // style="display: none"
        } else if (route.substring(2) == "all-form") {
            for (var i = 0; i < $(".layerPath").length; i++) {
                var savedTop = $(".layerPath").eq(i).attr("data-top");
                $(".layerPath").eq(i).animate({ top: savedTop }, 0);
            }
            animatedLayer(9, 0);
            sessionStorage.setItem("click_index", 9);
        } else if (route.substring(2) == "attendance-info") {
            for (var i = 0; i < $(".layerPath").length; i++) {
                var savedTop = $(".layerPath").eq(i).attr("data-top");
                $(".layerPath").eq(i).animate({ top: savedTop }, 0);
            }
            animatedLayer(6, 0);
            sessionStorage.setItem("click_index", 6);
        }
        // do_small_module(isRotation,isSmall,route);
    });
    var getUrl = window.location;
    var baseUrl =
        getUrl.protocol +
        "//" +
        getUrl.host +
        "/" +
        getUrl.pathname.split("/")[1];
    // window.onhashchange = function() {
    // 	var routeNme = window.location.hash;
    // 	var strUrl = window.location.toString();
    // 	if(strUrl.indexOf("smart-office") != -1){
    // 		$(".smart-grid").css("display", "block");
    // 		return false;
    // 	}
    // }
    // $(".layerPath").click(function () {
    //     var route = $(this).attr("data-page");
    //     if (
    //         route == "" ||
    //         route == location.hash ||
    //         route == "undefined" ||
    //         route == null
    //     ) {
    //         return false;
    //     }
    //     if (route != undefined) {
    //         $(".cssplay-menu").css("display", "none");
    //         $(".wrapper").css("display", "none");
    //         $(".blg-table").css("height", "99vh");

    //         window.location.href = baseUrl + route;
    //         var curIndex = $(this).index();
    //         sessionStorage.setItem("click_index", curIndex);
    //     }
    //     // alert(route);
    //     if (route.substring(2) == "schedule") {
    //         for (var i = 0; i < $(".layerPath").length; i++) {
    //             var savedTop = $(".layerPath").eq(i).attr("data-top");
    //             $(".layerPath").eq(i).animate({ top: savedTop }, 0);
    //         }
    //         animatedLayer(4, 0);
    //     } else if (route.substring(2) == "all-form") {
    //         for (var i = 0; i < $(".layerPath").length; i++) {
    //             var savedTop = $(".layerPath").eq(i).attr("data-top");
    //             $(".layerPath").eq(i).animate({ top: savedTop }, 0);
    //         }
    //         animatedLayer(9, 0);
    //     } else if (route.substring(2) == "attendance-info") {
    //         for (var i = 0; i < $(".layerPath").length; i++) {
    //             var savedTop = $(".layerPath").eq(i).attr("data-top");
    //             $(".layerPath").eq(i).animate({ top: savedTop }, 0);
    //         }
    //         animatedLayer(6, 0);
    //     }
    //     // do_small_module(isRotation,isSmall,route);
    // });

    var routeNme = window.location.hash;
    // var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    if (routeNme.substring(2) != "smart-office") {
        $(".cssplay-menu").css("display", "none");
        $(".wrapper").css("display", "none");
        $(".blg-table").css("height", "99vh");
    } else if (routeNme.substring(2) == "") {
        $(".cssplay-menu").css("display", "block");
        $(".wrapper").css("display", "block");
        $(".blg-table").css("height", "99vh");
    }
    if (routeNme == "") {
        $(".cssplay-menu").css("display", "block");
        $(".wrapper").css("display", "block");
        $(".blg-table").css("height", "99vh");
        // $(".slider-switch").css("display","none");
    }

    if (window.location.hash == "") {
        $(".cssplay-menu").css("display", "none");
        $(".wrapper").css("display", "none");
        $(".blg-table").css("height", "99vh");
    }
    $(".main-logo").click(function () {
        // var getUrl = window.location;
        // var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        // window.location.href = baseUrl + "/public/";
        window.location.href = "#";
        sessionStorage.removeItem("click_index");
    });

    function animatedLayer(index, speed) {
        for (var i = index; i >= 0; i--) {
            var layer = $(".layerPath").eq(i);
            var layerTop = parseInt(layer.css("top").replace("px", ""));
            $(layer).animate({ top: layerTop + 120 + "px" }, speed);
            isOpen = true;
        }
        // localStorage.setItem("click_index",index);
        startedIdx = index;
    }
    function do_small_module(isRotation, isSmall, route) {
        if (isRotation) {
            if (!isSmall) {
                isSmall = true;
                // $(".top-left").css("margin-top","80px");

                $(".h2-schedule").velocity(
                    {
                        opacity: 1,
                    },
                    {
                        complete: function () {
                            $(this).css("display", "block");
                        },
                    }
                );

                var sCircle = $("#small-circle");

                $(".blg-table").velocity(
                    {
                        height: "99vh",
                        bottom: 0,
                    },
                    {
                        delay: 300,
                        complete: function () {
                            $(this).css("display", "block");
                        },
                    }
                );
                $(".module").css({ display: "block" });
                $(".module").velocity({ opacity: 1 });
            }
            if (route != undefined) {
                window.location.href = route;
            }
            //var h2_ = document.getElementById("h2-iframe");
            //h2_.innerHTML = $(this).attr("data-head");
        }
        $("#is_small_module").val("true");
    }
    var isSmall;
    $(".clickRight").click(function () {
        !isSmall ? isBigOpen() : isBigClose();
        isSmall = !isSmall;
        if (!isSmall) {
            localStorage.getItem("keyRightClose");
        }
    });
    //});
    $("body").click(function () {
        $(".wrap-button-swipe").css("right", "-180%");
        // 	if(!$(evt.target).is('.blg-right') && !$(evt.target).is('.clickRight')) {
        // 		if(isSmall){
        // 			isBigClose();isSmall = !isSmall;
        // 		}
        // 	 }
    });
    $(".blg-main,.blg-left").click(function (evt) {
        if (
            !$(evt.target).is(".blg-right") &&
            !$(evt.target).is(".clickRight")
        ) {
            if (isSmall) {
                isBigClose();
                isSmall = !isSmall;
            }
        }
    });
    function isBigClose() {
        localStorage.setItem("keyRightClose", 0);
        clickRight = true;
        $(".blg-right").children().css("display", "none");
        //    $(".slimScrollBar").css({"display":"none"});
        $(".clickRight").css({
            display: "block",
            // "transform":"rotate(5deg)",
            // "-webkit-transform":"rotate(5deg)",
        });
        $(".blg-right").velocity(
            {
                width: "1.5%",
            },
            {
                complete: function () {
                    $(".slimScrollBar").css("right", "1.5%");
                    //   $(".slimScrollBar").css({"display":"block"});
                },
            }
        );
        // $(".blg-main").css("width","80%");
    }
    function isBigOpen() {
        localStorage.setItem("keyRightClose", 1);
        clickRight = false;
        // $(".slimScrollBar").css({"display":"none"});
        $(".clickRight").css({
            display: "block",
            // "transform":"rotate(0)",
            // "-webkit-transform":"rotate(0)",
        });
        $(".blg-right").velocity(
            {
                width: "20%",
            },
            {
                complete: function () {
                    $(".slimScrollBar").css({ right: "1.5%%" });
                    // $(".slimScrollBar").css({"display":"block"});
                },
            }
        );
        setTimeout(function () {
            $(".blg-right").children().css("display", "block");
        }, 200);
        // $(".blg-main").css("width","80%");
    }
    function isSmallClose() {
        localStorage.setItem("keyRightClose", 0);
        clickRight = true;
        $(".blg-right").children().css("display", "none");
        //    $(".slimScrollBar").css({"display":"none"});

        $(".clickRight").css({
            display: "block",
            // "transform":"rotate(5deg)",
            // "-webkit-transform":"rotate(5deg)",
        });
        $(".blg-right").velocity(
            {
                width: "1.5%",
            },
            {
                complete: function () {
                    $(".cssplay-menu").css("display", "none");
                    $(".slimScrollBar").css({ right: "1.5%" });
                },
            }
        );
        // $(".blg-main").css("width","80%");
    }
    function isSmallOpen() {
        localStorage.setItem("keyRightClose", 1);
        clickRight = false;

        // $(".slimScrollBar").css({"display":"none"});

        $(".clickRight").css({
            display: "block",
            // 	"transform":"rotate(0)",
            //   "-webkit-transform":"rotate(0)",
        });
        $(".blg-right").velocity(
            {
                width: "20%",
            },
            {
                complete: function () {
                    $(".slimScrollBar").css({ right: "1.5%" });
                    //   $(".slimScrollBar").css({"display":"block"});
                },
            }
        );
        setTimeout(function () {
            $(".blg-right").children().css("display", "block");
        }, 200);
    }
    function showLibraryInfo() {
        if (window.libInfoShown !== true) {
            var windStuff = document.getElementsByClassName("wind");
            var libStuff = document.getElementsByClassName("propeller");
            for (var i = 0; i < windStuff.length; i++) {
                var obj = windStuff[i];
                obj.style.display = "none";
            }
            for (var j = 0; j < libStuff.length; j++) {
                var objs = libStuff[j];
                objs.style.display = "inline-block";
            }
            window.libInfoShown = true;
        }
    }
    $(function () {
        $(".blg-main").slimscroll({
            distance: "1.5%",
            alwaysVisible: true,
        });
        var keyRightClose = localStorage.getItem("keyRightClose");

        if (keyRightClose == null) {
            localStorage.setItem("keyRightClose", 1);
        }
        //	if(keyRightClose == 0){
        var url = window.location.href;
        if (url.indexOf("smart-office") !== -1 || url == baseUrl) {
            if (keyRightClose == 0) {
                isBigClose();
            }
        } else {
            if (keyRightClose == 0) {
                isSmallClose();
            }
            //
        }
        //}
    });
    var clickLeft = false;
    var sourceLogo = $(".main-logo img").attr("data-src");
    var oldSourceLogo = $(".main-logo img").attr("src");
    var keyLeftClose = localStorage.getItem("keyLeftClose");
    if (keyLeftClose) {
        if (
            window.location.href.indexOf("/login") === -1 &&
            window.location.href.indexOf("/register") === -1
        ) {
            toggleLeftPanel(1);
        }
    }
    $(".clickLeft").click(function () {
        if (!clickLeft) {
            localStorage.setItem("keyLeftClose", 0);
            toggleLeftPanel(1);
        } else {
            toggleLeftPanel(0);
            localStorage.removeItem("keyLeftClose");
        }
    });
    function toggleLeftPanel(isOpen) {
        if (isOpen) {
            clickLeft = true;
            $(".clickLeft").css({ left: "65px" });
            $(".blg-left").css({ width: "65px" });
            $(".ministry-title").css("display", "none");
            $(".photo").css({
                width: "50px",
                height: "50px",
                "margin-left": "0",
            });
            $(".main-logo img").attr("src", sourceLogo);
            $(".main-logo").css("padding", "5px");
            $(".profile-info").css("display", "none");
            $(".link-feature li").css("background-size", "35px");
            $(".link-feature li a").css("opacity", "0");
            $(".link-feature li").css("padding", "0");
            $(".link-feature").css({ width: "100%", "margin-left": "-10px" });
            $(".copy-right p").html("២០១៨");
            $(".blg-main").css("margin-left", "65px");
            $(".layerPath p span").css("display", "none");
            $(".layerPath p").css({ left: "6%", bottom: "6%" });
            $(".clickLeft img").css("transform", "rotate(180deg)");
        } else {
            clickLeft = false;
            $(".blg-left").css({ width: "350px" });
            $(".clickLeft").css({ left: "350px" });
            $(".ministry-title").css("display", "block");
            $(".photo").css({
                width: "66px",
                height: "66px",
                "margin-left": "10px",
            });
            $(".main-logo img").attr("src", oldSourceLogo);
            $(".main-logo").css("padding", "0");
            $(".profile-info").css("display", "block");
            $(".link-feature li").css("background-size", "24px");
            $(".link-feature li a").css("opacity", "1");
            $(".link-feature li").css("padding", "2px 0 2px 30px");
            $(".link-feature").css({ width: "70%", "margin-left": "0" });
            $(".copy-right p").html(
                "&copy; ២០២៤ រក្សាសិទ្ធិដោយ៖ <br />អគ្គនាយកដ្ឋានបច្ចេកវិទ្យាព័ត៌មានគ្រប់គ្រងហិរញ្ញវត្ថុសាធារណៈ"
            );
            $(".blg-main").css("margin-left", "350px");
            $(".layerPath p span").css("display", "inline-block");
            $(".layerPath p").css({ left: "0", bottom: "9%" });
            $(".clickLeft img").css("transform", "rotate(0deg)");
        }
    }
    /*resize screen*/
    $(window).on("resize", function () {
        var win = $(window).width();
        if (keyLeftClose) {
            if (
                window.location.href.indexOf("/login") === -1 &&
                window.location.href.indexOf("/register") === -1
            ) {
                if (win >= 960) {
                    // toggleLeftPanel(false);
                }
                if (win < 960) {
                    $(".blg-main").css("margin-left", "0");
                }
            }
        }
    });
    $(document).on("click", ".menuDot", function () {
        $(".wrap-button-swipe").css("right", "-180%");
        $(this).parent().children(".wrap-button-swipe").css("right", "0");
    });
    $(".slider-switch .switch-grid").click(function () {
        $(".square").css("transform", "translateX(46.5px)");
    });
    $(".slider-switch .switch-circle").click(function () {
        $(".square").css("transform", "translateX(0)");
    });
    adv_search = 1;
    $(document).on("click", "#adv-search", function () {
        if (adv_search) {
            $(".adv-search-in-module").animate(
                {
                    height: "240px",
                },
                200,
                function () {}
            );
            adv_search = 0;
        } else {
            $(".adv-search-in-module").animate(
                {
                    height: "0",
                },
                200,
                function () {}
            );
            adv_search = 1;
        }
    });
});

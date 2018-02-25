$(document).ready(function () {
    var b = document.createElement("audio");
    $("#img-cover-track").each(function () {
        var a = $(this).attr("src");
        $("#player-cover").append('<img alt="" src="' + a + '"/>');
    });
    $("#title-track").each(function () {
        var a = $(this).attr("title");
        $("#player-title").append('<p>دموی آهنگ ' + a + '</p>');
    });

    $(".play-control").click(function () {
        $("#Bol-Player").addClass("Bol-Player-Open");
        var a = $(this).attr("data-src");
        b.onplaying || (b.setAttribute("src", "product/music/" + a),
        b.play(),
        $("#play").addClass("playing"),
        $("#playTrack").addClass("playing"),
        $("#pause").addClass("pausing"),
        $("#pauseTrack").addClass("play-control-pause pausing"),
        $("#status").html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
        );
        b.volume = 1;
        b.addEventListener("ended", function () {
            this.play()
        }, !1);
        b.addEventListener("canplay", function () {
            $("#status").empty();
            var a = Math.round(b.duration);
            if (a > 60) {
                var c = (a / 60).toFixed(2);
                c = c.replace(".", ":");
                $("#durationTime").text("0:30");
            } else {
                $("#durationTime").text("0:" + a);
            }
        });
        b.addEventListener("timeupdate", function () {
            var a = Math.round(b.currentTime);
            // var c = Math.round(b.duration);
            var c = 30;
            var d = a / c * 100;
            if ($("#Bol-Player-Duration").stop().animate({width: d + "%"}, 500), a <= 9) {
                $("#currentTime").html("0:0" + a);
            }
            else if (a < 60) {
                $("#currentTime").html("0:" + a);
            }
            else {
                var e = (a / 60).toFixed(2);
                e = e.replace(".", ":");
                $("#currentTime").html(e)
            }
        });
        $("#play").click(function () {
            b.play();
            $(this).addClass("playing");
            $("#playTrack").addClass("playing");
            $("#pause").addClass("pausing");
            $("#pauseTrack").addClass("play-control-pause pausing");
            $("#status").html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
        });
        $("#playTrack").click(function () {
            b.play();
            $(this).addClass("playing");
            $("#play").addClass("playing");
            $("#pause").addClass("pausing");
            $("#pauseTrack").addClass("play-control-pause pausing");
            $("#status").html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
        });
        $("#pause").click(function () {
            b.pause();
            $(this).removeClass("pausing");
            $("#play").removeClass("playing");
            $("#playTrack").removeClass("playing");
            $("#pauseTrack").removeClass("play-control-pause pausing");
            $("#status").empty()
        });
        $("#pauseTrack").click(function () {
            b.pause();
            $(this).removeClass("play-control-pause pausing");
            $("#play").removeClass("playing");
            $("#playTrack").removeClass("playing");
            $("#pause").removeClass("pausing");
            $("#status").empty()
        });
        $("#previous, #next").click(function () {
            b.currentTime = 0;
        });
        $("#Bol-Player-Exit").click(function () {
            $("#Bol-Player").removeClass("Bol-Player-Open");
            b.pause();
            $("#pauseTrack").removeClass("play-control-pause pausing");
            $("#play").removeClass("playing");
            $("#playTrack").removeClass("playing");
            $("#pause").removeClass("pausing");
            $("#status").empty();
            b.currentTime = 0;

        });
        $("#mute").mouseover(function () {
            $("#volumrange").stop().slideDown()
        });
        $("#mute").mouseleave(function () {
            $("#volumrange").stop().slideUp()
        });
        $("#Volum").on("change", function () {
            a = $("#Volum").val();
            b.volume = a;
            b.volume == 0 ? $("#mute").find(".fa").removeClass("fa-volume-up").addClass("fa-volume-off") : $("#mute").find(".fa").removeClass("fa-volume-off").addClass("fa-volume-up");
        });
        b.onwaiting = function () {
            $("#status").html('<i class="fa fa-refresh fa-spin" aria-hidden="true"></i>')
        };
        b.onplaying = function () {
            $("#status").html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>')
        };
        b.onerror = function () {
            $("#status").html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>')
        }
    });
});
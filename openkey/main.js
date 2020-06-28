$(document).ready(function () {
    $("#sbmt").click(function (){
        $("#err").fadeOut("fast");
        $("#url").css("backgroundImage", "url('images/urlhov.png')");
        $("#out").slideUp("fast");
        $("#share").fadeOut("fast");
        $("#twitter").fadeOut("slow");
        if (valid($("#url").val()) == false) {
            alert("Enter a valid URL, please!");
            $("#url").focus();
        } else {
            var url = $("#url").val();
            if ($("#out").css("display") == "inline") {
                $("#url").css("backgroundImage", "url('images/urlhov.png')");
                $("#out").slideUp("fast");
                $("#url").val("");
                $("#share").val("");
                $("#share").fadeOut("slow");
                $("#twitter").fadeOut("slow");
                $("#load").fadeIn("fast");
                $("#gourl").fadeOut("fast");
                $("#err").fadeOut("fast");
            }
            with(u = new XMLHttpRequest()) open("GET", "new.php?url=" + url, false),
            send(null);
            ur = u.responseText;
            code = ur.match(/code:(.*)/)[1];
            err = ur.match(/error:(.*)/)[1];
            if (err == "null") {
                $("#url").css("backgroundImage", "url('images/url.png')");
                $("#share").fadeIn("slow");
                $("#out").slideDown("slow");
                $("#load").fadeOut("fast");
                setTimeout(function () {
                    $("#gourl").fadeIn("fast");
                    $("#out").val(code);
                    $("#share").val(code + "-");
                    $("#twitter").attr("href", "http://twitter.com/timeline/home?status=" + code);
                    $("#twitimg").fadeIn("slow");
                    $("#shorturl").attr("href", code);
                }, 800);
            } else {
                $("#error").html(err);
                $("#err").fadeIn("slow");
            }
        }
    });

    $("#close").click(function () {
        $("#cont").animate({
            marginTop: "-700px"
        }, "fast");
    });
    $("#closeerr").click(function () {
        $("#err").fadeOut("slow");
        $("#url").focus();
    });
});

function valid(url) {
    val = true;
    if (url.replace(/\s\s+/gi, "") == "") val = false;
    if (url.match(/^[\w]{3,6}:\/\//) == null) val = false;
    if (url.match(/\./g) == null) val = false;
    return val;
}
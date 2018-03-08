$(document).ready(function () {
    $(".show_comment").click(function () {;
        $("#comments").css("display", "block");
        $(".add_comment").show();//show
        $(".show_comment").hide();//hide
        $(".hide_comment").show();//show
        $(".send_comment").hide();//hide
    });
    $(".add_comment").click(function () {
        $("<p>" + comment + "</p>").append(".add_comment");
        $("#comment").css("display", "block");
        $(".add_comment").hide();
        $(".show_comment").hide();
        $(".hide_comment").show();
        $(".send_comment").show();
        $("#comments").show();
    });
    $("#imgComments").click(function () {
        $("#comments").css("display", "block");
        $(".add_comment").show();
        $(".hide_comment").show();
        $(".send_comment").hide();
    });
    $("#imgComments").dblclick(function () {
        $("#comment").css("display", "none");
        $(".add_comment").show();
        $(".show_comment").show();
        $(".hide_comment").hide();
        $(".send_comment").hide();
        $("#comments").hide();
    });
    $(".hide_comment").click(function () {
        $("#comment").css("display", "none");
        $(".add_comment").show();
        $(".show_comment").show();
        $(".hide_comment").hide();
        $(".send_comment").hide();
        $("#comments").hide();
    });
    $(".send_comment").click(function () {;
        $("#comment").css("display", "none");
        $(".add_comment").show();
        $(".hide_comment").show();
        $(".send_comment").hide();
    });
    $(document).on("click", ".send_comment", function () {
        var comment = $("textarea[name='comment']").val()
        // alert("Подождите пока загрузится ваш коментарий");
        return $("<p>" + comment + "</p>").appendTo("div#comments");
    });
});

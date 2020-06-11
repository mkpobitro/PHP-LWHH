let name;
; (function ($) {
    $(document).ready(function () {
        $(".chat-message").height($("body").height() - $(".chat-message").offset().top);
        $("#chat-text").height($("#chat-text").parent().height() - 8);
        name = prompt("What is your name?");
        $("#chat-text").focus();
    });

    $("#chat-text").on('keypress', function (e) {
        if (e.keyCode == 13) {
            // let msg = name + ": " + $('#chat-text').val();
            let msg = $('#chat-text').val();
            $('#chat-text').val('');
            // $("<p/>").html(msg).appendTo($(".chat-body"));
            // $(".chat-body").scrollTop($(".chat-body").prop('scrollHeight'));

            $.post('data.php', { message: msg, sender: name }, function (response) {
                $(".chat-body").html(response);
                $(".chat-body").scrollTop($(".chat-body").prop('scrollHeight'));
            });
            return false;
        }
    });

    setInterval(function () {
        $.post('data.php', { refresh: 1 }, function (response) {
            $(".chat-body").html(response);
            $(".chat-body").scrollTop($(".chat-body").prop('scrollHeight'));
        });
    }, 2000);

})(jQuery);
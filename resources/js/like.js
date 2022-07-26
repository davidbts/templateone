var url = 'http://127.0.0.1:8000';
// var url = 'http://upton4ever.com.mx';

window.addEventListener("load", function () {
    function like() {
        $('.like-2').unbind('click').click(function () {
            $(this).addClass('like').removeClass('like-2');

            $.ajax({
                url: url + '/producto/like/' + $(this).data('id'),
                type: 'GET',
                success: function (response) {}
            });

            dislike();
        });
    }
    like();

    function dislike() {
        $('.like').unbind('click').click(function () {
            $(this).addClass('like-2').removeClass('like');

            $.ajax({
                url: url + '/producto/dislike/' + $(this).data('id'),
                type: 'GET',
                success: function (response) {}
            });

            like();
        });
    }
    dislike();

    function like2() {
        $('.far').unbind('click').click(function () {
            $(this).addClass('fas').removeClass('far');

            $.ajax({
                url: url + '/producto/like/' + $(this).data('id'),
                type: 'GET',
                success: function (response) {}
            });

            dislike2();
        });
    }
    like2();

    function dislike2() {
        $('.fas').unbind('click').click(function () {
            $(this).addClass('far').removeClass('fas');

            $.ajax({
                url: url + '/producto/dislike/' + $(this).data('id'),
                type: 'GET',
                success: function (response) {}
            });

            like2();
        });
    }
    dislike2();
})

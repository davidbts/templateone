<script>
     var url = 'http://127.0.0.1:8000';
    //var url = 'http://upton4ever.com.mx';

    function llenarSubcategorias() {
        $.ajax({
            type: "GET",
            url: url + '/producto/crear/subcategories/' + $('#category_id').val(),
            success: function(r) {
                console.log(r);
                $('#subcategory_id').replaceWith(r);
            }
        });
    }

    function llenarElementos() {
        $.ajax({
            type: "GET",
            url: url + '/producto/crear/elements/' + $('#subcategory_id').val(),
            success: function(r) {
                console.log(r);
                $('#element_id').replaceWith(r);
            }
        });
    }
</script>

<script>
    $('#imageInput-1').on('change', function() {
        $input = $(this);
        if ($input.val().length > 0) {
            fileReader = new FileReader();
            fileReader.onload = function(data) {
                $('.image-preview-1').attr('src', data.target.result);
            }
            fileReader.readAsDataURL($input.prop('files')[0]);
            $('.image-button-1').css('display', 'none');
            $('.image-preview-1').css('display', 'block');
            $('.change-image-1').css('display', 'block');
        }
    });

    $('.change-image-1').on('click', function() {
        $control = $(this);
        $('#imageInput-1').val('');
        $preview = $('.image-preview-1');
        $preview.attr('src', '');
        $preview.css('display', 'none');
        $control.css('display', 'none');
        $('.image-button-1').css('display', 'block');
    });

    $('#imageInput-2').on('change', function() {
        $input = $(this);
        if ($input.val().length > 0) {
            fileReader = new FileReader();
            fileReader.onload = function(data) {
                $('.image-preview-2').attr('src', data.target.result);
            }
            fileReader.readAsDataURL($input.prop('files')[0]);
            $('.image-button-2').css('display', 'none');
            $('.image-preview-2').css('display', 'block');
            $('.change-image-2').css('display', 'block');
        }
    });

    $('.change-image-2').on('click', function() {
        $control = $(this);
        $('#imageInput-2').val('');
        $preview = $('.image-preview-2');
        $preview.attr('src', '');
        $preview.css('display', 'none');
        $control.css('display', 'none');
        $('.image-button-2').css('display', 'block');
    });

    $('#imageInput-3').on('change', function() {
        $input = $(this);
        if ($input.val().length > 0) {
            fileReader = new FileReader();
            fileReader.onload = function(data) {
                $('.image-preview-3').attr('src', data.target.result);
            }
            fileReader.readAsDataURL($input.prop('files')[0]);
            $('.image-button-3').css('display', 'none');
            $('.image-preview-3').css('display', 'block');
            $('.change-image-3').css('display', 'block');
        }
    });

    $('.change-image-3').on('click', function() {
        $control = $(this);
        $('#imageInput-3').val('');
        $preview = $('.image-preview-3');
        $preview.attr('src', '');
        $preview.css('display', 'none');
        $control.css('display', 'none');
        $('.image-button-3').css('display', 'block');
    });

    $('#imageInput-4').on('change', function() {
        $input = $(this);
        if ($input.val().length > 0) {
            fileReader = new FileReader();
            fileReader.onload = function(data) {
                $('.image-preview-4').attr('src', data.target.result);
            }
            fileReader.readAsDataURL($input.prop('files')[0]);
            $('.image-button-4').css('display', 'none');
            $('.image-preview-4').css('display', 'block');
            $('.change-image-4').css('display', 'block');
        }
    });

    $('.change-image-4').on('click', function() {
        $control = $(this);
        $('#imageInput-4').val('');
        $preview = $('.image-preview-4');
        $preview.attr('src', '');
        $preview.css('display', 'none');
        $control.css('display', 'none');
        $('.image-button-4').css('display', 'block');
    });

    $('#imageInput-5').on('change', function() {
        $input = $(this);
        if ($input.val().length > 0) {
            fileReader = new FileReader();
            fileReader.onload = function(data) {
                $('.image-preview-5').attr('src', data.target.result);
            }
            fileReader.readAsDataURL($input.prop('files')[0]);
            $('.image-button-5').css('display', 'none');
            $('.image-preview-5').css('display', 'block');
            $('.change-image-5').css('display', 'block');
        }
    });

    $('.change-image-5').on('click', function() {
        $control = $(this);
        $('#imageInput-5').val('');
        $preview = $('.image-preview-5');
        $preview.attr('src', '');
        $preview.css('display', 'none');
        $control.css('display', 'none');
        $('.image-button-5').css('display', 'block');
    });
</script>

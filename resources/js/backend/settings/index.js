import * as $ from 'jquery';
import swal from 'sweetalert2';

export default (function () {
    $(".submit-cover-form").click(function () {
        if ($('#cover-upload').get(0).files.length) {
            var formData = new FormData($('#cover-form')[0]);
            $.ajax({
                'headers': {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                'url': "settings/default-cover",
                'method': 'post',
                'dataType': 'json',
                'data': formData,
                'processData': false,
                'contentType': false,
                success: function (data) {
                    // Remove error
                    $('.form-control').removeClass('is-invalid');
                    $('.invalid-feedback').hide();
                    if (data.result == 'success') {
                        swal({
                            type: 'success',
                            title: 'Good Job!',
                            text: 'Successfully saved changes!'
                        });
                    } else {
                        swal({
                            type: 'error',
                            title: 'Error!',
                            text: 'Please check your inputs and try again..'
                        });
                        $.each(data.errors, function (key, value) {
                            if (value != "") {
                                $("#" + key).show();
                                $("#" + key).text(value);
                                $("input[name=" + key + "]").addClass("is-invalid");
                            }
                        });
                    }
                },
                beforeSend: function () {
                    $(".submit-cover-form").text('Saving..')
                    $(".submit-cover-form").attr('disabled', true)
                },
                complete: function () {
                    $(".submit-cover-form").text('Save Changes')
                    $(".submit-cover-form").attr('disabled', false)
                }
            });
            return false;
        } else {
            return false;
        }
    });
    $(".submit-avatar-form").click(function () {
        if ($('#avatar-upload').get(0).files.length) {
            var formData = new FormData($('#avatar-form')[0]);
            $.ajax({
                'headers': {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                'url': "settings/default-avatar",
                'method': 'post',
                'dataType': 'json',
                'data': formData,
                'processData': false,
                'contentType': false,
                success: function (data) {
                    // Remove error
                    $('.form-control').removeClass('is-invalid');
                    $('.invalid-feedback').hide();
                    if (data.result == 'success') {
                        swal({
                            type: 'success',
                            title: 'Good Job!',
                            text: 'Successfully saved changes!'
                        });
                    } else {
                        swal({
                            type: 'error',
                            title: 'Error!',
                            text: 'Please check your inputs and try again..'
                        });
                        $.each(data.errors, function (key, value) {
                            if (value != "") {
                                $("#" + key).show();
                                $("#" + key).text(value);
                                $("input[name=" + key + "]").addClass("is-invalid");
                            }
                        });
                    }
                },
                beforeSend: function () {
                    $(".submit-avatar-form").text('Saving..')
                    $(".submit-avatar-form").attr('disabled', true)
                },
                complete: function () {
                    $(".submit-avatar-form").text('Save Changes')
                    $(".submit-avatar-form").attr('disabled', false)
                }
            });
            return false;
        } else {
            return false;
        }
    });
    $(".submit-social-links").click(function () {
        var formData = new FormData($('#social-links-form')[0]);
        $.ajax({
            'headers': {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            'url': "settings/social",
            'method': 'post',
            'dataType': 'json',
            'data': formData,
            'processData': false,
            'contentType': false,
            success: function (data) {
                // Remove error
                $('.form-control').removeClass('is-invalid');
                $('.invalid-feedback').hide();
                if (data.result == 'success') {
                    swal({
                        type: 'success',
                        title: 'Good Job!',
                        text: 'Successfully saved changes!'
                    });
                } else {
                    swal({
                        type: 'error',
                        title: 'Error!',
                        text: 'Please check your inputs and try again..'
                    });
                    $.each(data.errors, function (key, value) {
                        if (value != "") {
                            $("#" + key).show();
                            $("#" + key).text(value);
                            $("input[name=" + key + "]").addClass("is-invalid");
                        }
                    });
                }
            },
            beforeSend: function () {
                $(".submit-social-links").text('Saving..')
                $(".submit-social-links").attr('disabled', true)
            },
            complete: function () {
                $(".submit-social-links").text('Save Changes')
                $(".submit-social-links").attr('disabled', false)
            }
        });
        return false;
    });
    $(".submit-general").click(function () {
        var formData = new FormData($('#general-form')[0]);
        $.ajax({
            'headers': {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            'url': "settings/general",
            'method': 'post',
            'dataType': 'json',
            'data': formData,
            'processData': false,
            'contentType': false,
            success: function (data) {
                // Remove error
                $('.form-control').removeClass('is-invalid');
                $('.invalid-feedback').hide();
                if (data.result == 'success') {
                    swal({
                        type: 'success',
                        title: 'Good Job!',
                        text: 'Successfully saved changes!'
                    });
                } else {
                    swal({
                        type: 'error',
                        title: 'Error!',
                        text: 'Please check your inputs and try again..'
                    });
                    $.each(data.errors, function (key, value) {
                        if (value != "") {
                            $("#" + key).show();
                            $("#" + key).text(value);
                            $("input[name=" + key + "]").addClass("is-invalid");
                        }
                    });
                }
            },
            beforeSend: function () {
                $(".submit-general").text('Saving..')
                $(".submit-general").attr('disabled', true)
            },
            complete: function () {
                $(".submit-general").text('Save Changes')
                $(".submit-general").attr('disabled', false)
            }
        });
        return false;
    });
}());

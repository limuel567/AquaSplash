@extends('admin.default')
@section('title','Settings ~ AquaSplash Admin')
@section('content')
<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-4"></div>
    <div class="masonry-item col-md-10 offset-md-1">
        <div class="bgc-white p-20 bd">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="defaults-tab" data-toggle="tab" href="#defaults" role="tab" aria-controls="defaults" aria-selected="false">Default Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="social-links-tab" data-toggle="tab" href="#social-links" role="tab" aria-controls="social-links" aria-selected="false">Social Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="payment-keys-tab" data-toggle="tab" href="#payment-keys" role="tab" aria-controls="payment-keys" aria-selected="false">Stripe/Paypal API Keys</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <div class="p-20">
                        <h5>General Settings</h5>
                        <form id="general-form">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="image">Website Logo</label>
                                    <div id="image-preview" style="border-radius: 50%;width: 200px;height: 200px;object-fit: cover; background: url({{$settings->logo != '' ? URL('uploads/logo/'.$settings->logo) : ''}});background-size: cover;background-position: center;">
                                        <label for="image-upload" id="image-label">Choose Logo</label>
                                        <input type="file" name="website_logo" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Admin E-mail</label>
                                    <input type="text" name="new_email" class="form-control" value="{{$user->email != '' ? $user->email : ''}}">
                                    <div class="invalid-feedback" id="new_email"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Admin New Password</label>
                                    <input type="password" name="new_password" class="form-control" value="">
                                    <div class="invalid-feedback" id="new_password"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Website Name</label>
                                    <input type="text" name="website_name" class="form-control" value="{{$settings->name != '' ? $settings->name : ''}}">
                                    <div class="invalid-feedback" id="website_name"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Website Email</label>
                                    <input type="text" name="website_email" class="form-control" value="{{$settings->email != '' ? $settings->email : ''}}">
                                    <div class="invalid-feedback" id="website_email"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Copyright</label>
                                    <input type="text" name="copyright" class="form-control" value="{{$settings->copyright != '' ? $settings->copyright : ''}}">
                                    <div class="invalid-feedback" id="copyright"></div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary submit-general">Save Changes</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="defaults" role="tabpanel" aria-labelledby="defaults-tab">
                    <div class="p-20">
                        <h5>Default Settings</h5>
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar" aria-selected="true">Avatar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cover-tab" data-toggle="tab" href="#cover" role="tab" aria-controls="cover" aria-selected="false">Cover Photo</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                                <div class="p-20">
                                    <form id="avatar-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="avatar">Default Avatar Profile</label>
                                                <div id="avatar-preview" style="border-radius: 50%;width: 150px;height: 150px;object-fit: cover; background: url({{$defaults->avatar != '' ? $defaults->avatar : ''}});background-size: cover;background-position: center;">
                                                    <label for="avatar-upload" id="avatar-label">Choose Avatar</label>
                                                    <input type="file" name="avatar" id="avatar-upload" />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary submit-avatar-form">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="cover" role="tabpanel" aria-labelledby="cover-tab">
                                <div class="p-20">
                                    <form id="cover-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="cover">Default Profile Cover</label>
                                                <div id="cover-preview" style="width: 500px;height: 250px;object-fit: cover; background: url({{$defaults->cover != '' ? $defaults->cover : ''}});background-size: cover;background-position: center;">
                                                    <label for="cover-upload" id="cover-label">Choose Cover</label>
                                                    <input type="file" name="cover" id="cover-upload" />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary submit-cover-form">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="social-links" role="tabpanel" aria-labelledby="social-links-tab">
                    <div class="p-20">
                        <h5>Social Links <i class="ti-link"></i></h5>
                        <form id="social-links-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="facebook">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">facebook.com/</div>
                                        </div>
                                        <input type="text" class="form-control" name="facebook_link" value="{{ unserialize($settings->social_media_links)['facebook'] != '' ? unserialize($settings->social_media_links)['facebook'] : ''}}">
                                        <div class="invalid-feedback" id="facebook_link"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="twitter">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">twitter.com/</div>
                                        </div>
                                        <input type="text" class="form-control" name="twitter_link" value="{{ unserialize($settings->social_media_links)['twitter'] != '' ? unserialize($settings->social_media_links)['twitter'] : ''}}">
                                        <div class="invalid-feedback" id="twitter_link"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="instagram">Instagram</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">instagram.com/</div>
                                        </div>
                                        <input type="text" class="form-control" name="instagram_link" value="{{ unserialize($settings->social_media_links)['instagram'] != '' ? unserialize($settings->social_media_links)['instagram'] : ''}}">
                                        <div class="invalid-feedback" id="instagram_link"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary submit-social-links">Save Changes</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="payment-keys" role="tabpanel" aria-labelledby="payment-keys-tab">
                    <div class="p-20">
                        <form id="payment-keys-form">
                            @csrf
                            <h3>Stripe</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="stripe-api-key">Api Key</label>
                                    <input type="text" name="stripe_api_key" id="stripe-api-key" class="form-control" value="{{$settings->stripe_api_key != '' ? $settings->stripe_api_key : ''}}">
                                    <div class="invalid-feedback" id="stripe_api_key"></div>
                                </div>
                            </div>
                            <hr>
                            <h3>Paypal</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="paypal-mode">Mode:</label>
                                    <select name="paypal_mode" id="paypal-mode" class="form-control">
                                        <option value="sandbox">Sandbox</option>
                                        <option value="production" selected>Live</option>
                                    </select>
                                    <div class="invalid-feedback" id="paypal-mode"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="paypal-sandbox">Sandbox Client ID</label>
                                    <input type="text" name="paypal_sandbox" id="paypal-sandbox" class="form-control" value="">
                                    <div class="invalid-feedback" id="paypal_sandbox"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="paypal-live">Live Client ID</label>
                                    <input type="text" name="paypal_live" id="paypal-live" class="form-control" value="">
                                    <div class="invalid-feedback" id="paypal_live"></div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary submit-payment-keys">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/fileinput.min.js"></script> --}}
<script>
    $(".submit-cover-form").click(function () {
        if ($('#cover-upload').get(0).files.length) {
            var formData = new FormData($('#cover-form')[0]);
            $.ajax({
                'headers': {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                'url': "{!! URL('admin/settings/default-cover') !!}",
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
                        noty({
                            theme: 'app-noty',
                            text: 'Successfully saved changes!',
                            type: 'success',
                            timeout: 3000,
                            layout: 'bottomRight',
                            closeWith: ['button', 'click'],
                            animation: {
                                open: 'noty-animation fadeIn',
                                close: 'noty-animation fadeOut'
                            }
                        });
                    } else {
                        noty({
                            theme: 'app-noty',
                            text: 'Please check your inputs and try again..',
                            type: 'error',
                            timeout: 3000,
                            layout: 'bottomRight',
                            closeWith: ['button', 'click'],
                            animation: {
                                open: 'noty-animation fadeIn',
                                close: 'noty-animation fadeOut'
                            }
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
                'url': "{!! URL('admin/settings/default-avatar') !!}",
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
                        noty({
                            theme: 'app-noty',
                            text: 'Successfully saved changes!',
                            type: 'success',
                            timeout: 3000,
                            layout: 'bottomRight',
                            closeWith: ['button', 'click'],
                            animation: {
                                open: 'noty-animation fadeIn',
                                close: 'noty-animation fadeOut'
                            }
                        });
                    } else {
                        noty({
                            theme: 'app-noty',
                            text: 'Please check your inputs and try again..',
                            type: 'error',
                            timeout: 3000,
                            layout: 'bottomRight',
                            closeWith: ['button', 'click'],
                            animation: {
                                open: 'noty-animation fadeIn',
                                close: 'noty-animation fadeOut'
                            }
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
            'url': "{!! URL('admin/settings/social') !!}",
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
                    noty({
                        theme: 'app-noty',
                        text: 'Successfully saved changes!',
                        type: 'success',
                        timeout: 3000,
                        layout: 'bottomRight',
                        closeWith: ['button', 'click'],
                        animation: {
                            open: 'noty-animation fadeIn',
                            close: 'noty-animation fadeOut'
                        }
                    });
                } else {
                    noty({
                        theme: 'app-noty',
                        text: 'Please check your inputs and try again..',
                        type: 'error',
                        timeout: 3000,
                        layout: 'bottomRight',
                        closeWith: ['button', 'click'],
                        animation: {
                            open: 'noty-animation fadeIn',
                            close: 'noty-animation fadeOut'
                        }
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
            'url': "{!! URL('admin/settings/general') !!}",
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
                    noty({
                        theme: 'app-noty',
                        text: 'Successfully saved changes!',
                        type: 'success',
                        timeout: 3000,
                        layout: 'bottomRight',
                        closeWith: ['button', 'click'],
                        animation: {
                            open: 'noty-animation fadeIn',
                            close: 'noty-animation fadeOut'
                        }
                    });
                } else {
                    noty({
                        theme: 'app-noty',
                        text: 'Please check your inputs and try again..',
                        type: 'error',
                        timeout: 3000,
                        layout: 'bottomRight',
                        closeWith: ['button', 'click'],
                        animation: {
                            open: 'noty-animation fadeIn',
                            close: 'noty-animation fadeOut'
                        }
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
</script>
@stop
import * as $ from 'jquery';

export default (function () {
    ! function (e) {
        e.extend({
            uploadPreview: function (l) {
                var i = e.extend({
                    input_field: "#image-input",
                    preview_box: ["#image-preview", "#image-preview-0", "#image-preview-1", "#image-preview-2", "#image-preview-3", "#image-preview-4", "#image-preview-5", "#image-preview-6", "#image-preview-7", "#image-preview-8", "#image-preview-9", "#image-preview-10", "#image-preview-11", "#image-preview-12", "#image-preview-13", "#image-preview-14", "#image-preview-15", "#image-preview-16", "#image-preview-17", "#image-preview-18", "#image-preview-19", "#image-preview-20", "#image-preview-21", "#image-preview-22", "#image-preview-23", "#image-preview-24", "#image-preview-25", "#image-preview-26", "#image-preview-27", "#image-preview-28", "#image-preview-29", "#image-preview-30", "#image-preview-31", "#image-preview-32", "#image-preview-33", "#image-preview-34", "#image-preview-35", "#image-preview-36", "#image-preview-37", "#image-preview-38", "#image-preview-39", "#image-preview-40", "#image-preview-41", "#image-preview-42", "#image-preview-43", "#image-preview-44", "#image-preview-45", "#image-preview-46", "#image-preview-47", "#image-preview-48", "#image-preview-49", "#image-preview-50"],
                    label_field: "#image-label",
                    label_default: "Choose File",
                    label_selected: "Change File",
                    no_label: !1,
                    success_callback: null
                }, l);
                return window.File && window.FileList && window.FileReader ? void(void 0 !== e(i.input_field) && null !== e(i.input_field) && e(i.input_field).change(function () {
                    var l = this.files;
                    if (l.length > 0) {
                        var a = l[0],
                            o = new FileReader;
                        o.addEventListener("load", function (l) {
                                var o = l.target;
                                a.type.match("image") ? (e(i.preview_box).css("background-image", "url(" + o.result + ")"),
                                    e(i.preview_box).css("background-size", "cover"),
                                    e(i.preview_box).css("background-position", "center center")) : a.type.match("audio") ? e(i.preview_box).html("<audio controls><source src='" + o.result + "' type='" + a.type + "' />Your browser does not support the audio element.</audio>") : alert("This file type is not supported yet.")
                            }),
                            0 == i.no_label && e(i.label_field).html(i.label_selected),
                            o.readAsDataURL(a),
                            i.success_callback && i.success_callback()
                    } else
                        0 == i.no_label && e(i.label_field).html(i.label_default),
                        e(i.preview_box).css("background-image", "none"),
                        e(i.preview_box + " audio").remove()
                })) : (alert("You need a browser with file reader support, to use this form properly."),
                    !1)
            }
        })
    }(jQuery);

    $.uploadPreview({
        input_field: "#image-upload", // Default: .image-upload
        preview_box: "#image-preview", // Default: .image-preview
        label_field: "#image-label", // Default: .image-label
        label_default: "Choose Image", // Default: Choose File
        label_selected: "Replace Image", // Default: Change File
        no_label: false // Default: false
    });
    $.uploadPreview({
        input_field: "#avatar-upload", // Default: .image-upload
        preview_box: "#avatar-preview", // Default: .image-preview
        label_field: "#avatar-label", // Default: .image-label
        label_default: "Choose Avatar", // Default: Choose File
        label_selected: "Replace Avatar", // Default: Change File
        no_label: false // Default: false
    });
    $.uploadPreview({
        input_field: "#cover-upload", // Default: .image-upload
        preview_box: "#cover-preview", // Default: .image-preview
        label_field: "#cover-label", // Default: .image-label
        label_default: "Choose Cover", // Default: Choose File
        label_selected: "Replace Cover", // Default: Change File
        no_label: false // Default: false
    });
}())

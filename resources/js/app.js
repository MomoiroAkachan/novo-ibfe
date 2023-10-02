import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;
import { feather } from 'feather-icons';

var ie_modal_button = $('.ie-modal')
var ie_blur_screen = $('#ie-blur-screen')
var ie_dial_closure = $('.ie-dialog-closure')


// Dialog
ie_dial_closure.each(function (el) {
    $(this).on('click', function () {
        $(this).parent().hide()
    })
})

// Modal
ie_modal_button.each(function () {
    $(this).on('click', function () {
        let modal = $('#' + $(this).attr('data-ie-modal-id'))
        modal.appendTo('#ie-blur-screen')
        ie_blur_screen.css('display', 'flex')
        modal.css('display', 'flex')
    })
})

ie_blur_screen.on('click', function (e) {
    if (e.target == this) {
        $(this).css('display', 'none')
    }
})


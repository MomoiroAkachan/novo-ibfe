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
        ie_blur_screen.css('display', 'block')
        modal.css('display', 'block')
    })
})

ie_blur_screen.on('click', function (e) {
    if (e.target == this) {
        $(this).css('display', 'none')
    }
})

document.addEventListener('DOMContentLoaded', function () {
    // feather.replace()
})

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
} else {
    document.documentElement.classList.remove('dark')
}
loca

$('#theme-switch').on('click', ()=>{
    localStorage.theme = (localStorage.theme == 'light' ? 'dark' : 'light')
    alert('theme change')
})

// Whenever the user explicitly chooses to respect the OS preference
// localStorage.removeItem('theme')
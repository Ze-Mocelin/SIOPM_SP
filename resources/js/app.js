import './bootstrap';
import 'laravel-datatables-vite';

import jQuery from 'jquery';
window.$ = jQuery;

$(document).ready(function() {
    // Toggle the control sidebar
    $('#control-sidebar-toggler').on('click', function() {
        $('#control-sidebar').toggle();
    });
});

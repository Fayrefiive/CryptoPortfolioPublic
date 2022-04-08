// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

const $ = require('jquery');
global.$ = global.jQuery = $;

import Chart from 'chart.js/auto';

// start the Stimulus application
import './bootstrap';

$(function (){
    /* --- LOGIN & SIGNIN --- */
    $('.signin').on('click', function () {
        $('.panel-right-content-login').find('.flipper-card').toggleClass('flipper-is-flipped');
        $('.panel-right-content-login').toggleClass('flipped');
    });
})

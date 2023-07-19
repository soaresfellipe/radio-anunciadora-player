<?php
/*
Plugin Name: Rádio Anunciadora Player
Plugin URI: https://github.com/soaresfellipe/radio-anunciadora-player
Description: Plugin to add the Rádio Anunciadora player to your website. Use the shortcode [radio_anunciadora_player]
Version: 1.0
Author: Fellipe Soares
Author URI: https://fellipesoares.com.br
License: GPL2
*/

// Add shortcode to show Radio Anunciadora Player
function shortcode_radio_anunciadora_player() {
    ob_start();
    ?>
    <style>
        .radio-anunciadora-player {
            text-align: center;
            background-color: #f0f0f0;
            padding: 10px;
        }
        .radio-anunciadora-player h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .radio-anunciadora-player audio {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            display: block;
        }
    </style>
    <div class="radio-anunciadora-player">
        <h3>Rádio Anunciadora</h3>
        <audio autoplay controls src="https://player.stms.live/proxy/7052/1//stream"></audio>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'radio_anunciadora_player', 'shortcode_radio_anunciadora_player' );

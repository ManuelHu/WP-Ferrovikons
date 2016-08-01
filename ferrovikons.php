<?php

/*
Plugin Name: Ferrovikons
Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
Description: This describes my plugin in a short sentence
Version:     1.0
Author:      Manuel Huber
Author URI:  https://www.manuelhu.de
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/* Quit */
defined('ABSPATH') OR die();

class Ferrovikons {
    public function __construct() {
        add_action(
            'init',
            array(
              'Ferrovikons',
              'init'
            )
        );
    }

    public function init() {
        add_shortcode( 'zp9', array( 'Ferrovikons', 'zp9_shortcode' ) );
        add_shortcode( 'ansporn', array( 'Ferrovikons', 'ansporn_shortcode' ) );
        add_shortcode( 'eigenartig', array( 'Ferrovikons', 'eigenartig_shortcode' ) );
        add_shortcode( 'freude', array( 'Ferrovikons', 'freude_shortcode' ) );
        add_shortcode( 'halt', array( 'Ferrovikons', 'halt_shortcode' ) );
        add_shortcode( 'lachen', array( 'Ferrovikons', 'lachen_shortcode' ) );
        add_shortcode( 'prima', array( 'Ferrovikons', 'prima_shortcode' ) );
        add_shortcode( 'sorry', array( 'Ferrovikons', 'sorry_shortcode' ) );
        add_shortcode( 'unsinn', array( 'Ferrovikons', 'unsinn_shortcode' ) );
        add_shortcode( 'versehen', array( 'Ferrovikons', 'versehen_shortcode' ) );
        add_shortcode( 'merci', array( 'Ferrovikons', 'merci_shortcode' ) );
        add_shortcode( 'schluss', array( 'Ferrovikons', 'schluss_shortcode' ) );
        add_shortcode( 'wissbegier', array( 'Ferrovikons', 'wissbegier_shortcode' ) );
        add_shortcode( 'kummer', array( 'Ferrovikons', 'kummer_shortcode' ) );
    }

    public function zp9_shortcode() {
        return '<span title="Darauf fahre ich ab. Das finde ich super. Das findet meine volle Zustimmung"><svg height="22" viewBox="0 0 16 22" width="16">' .
            '<rect height="10.347" width="1.678" y="11.283" x="7.161" fill="#7b5632"/><circle cx="8" cy="6.4356" r="5.6" fill="#006400"/>' .
            '<circle cx="8" cy="6.4356" r="4.2483" fill="#fff"/></svg></span>';
    }

    public function ansporn_shortcode() {
        return '<span title="Ansporn, Aufmunterung"><svg height="20" viewBox="0 0 16 20" width="16">' .
            '<rect height="20" width="16" stroke="#000" y="0" x="0" stroke-width=".5" fill="#fff"/>' .
            '<path transform="scale(.95249 1.0499)" d="m10.753 12.806h-4.5301l-0.71488 2.0468h-2.9122l4.1613-11.235h3.454l4.1613 11.235h-2.9122l-0.70735-2.0468zm-3.8077-2.0844h3.0777l-1.5347-4.4707-1.5426 4.4697z"/>' .
            '</svg></span>';
    }

    public function eigenartig_shortcode() {
        return '<span title="eigenartig, eng, erklärungsbedürftig"><svg height="20" viewBox="0 0 16 20" width="16"><rect height="20" width="16" stroke="#000" y="0" x="0" stroke-width=".5" fill="#fff"/>' .
            '<path transform="scale(.95249 1.0499)" d="m4.3806 3.779h7.8185v2.1898h-4.9214v2.092h4.6279v2.1898h-4.6279v2.5736h5.0869v2.1898h-7.9841v-11.235z"/></svg></span>';
    }

    public function freude_shortcode() {
        return '<span title="Freude"><svg height="20" viewBox="0 0 16 20" width="16"><rect height="20" width="16" stroke="#000" y="0" x="0" stroke-width=".5" fill="#fff"/>' .
            '<path transform="scale(.95249 1.0499)" d="m4.6475 3.6983h7.8185v2.1898h-4.9214v2.092h4.6279v2.1898h-4.6279v4.7633h-2.8971v-11.235z"/></svg></span>';
    }

    public function halt_shortcode() {
        return '<span title="Halt! Heftig! Hilfe!"><svg height="20" viewBox="0 0 16 20" width="16"><rect height="20" width="16" stroke="#fff" y="0" x="0" stroke-width=".5"/>' .
            '<path fill="#fff" transform="scale(.95249 1.0499)" d="m3.3648 3.9075h2.8971v4.2817h4.2742v-4.2817h2.8971v11.235h-2.8971v-4.7633h-4.2742v4.7633h-2.8971v-11.235z"/></svg></span>';
    }

    public function lachen_shortcode() {
        return '<span title="Lach, muss lachen"><svg height="20" viewBox="0 0 16 20" width="16"><rect height="20" width="16" stroke="#000" y="0" x="0" stroke-width=".5" fill="#fff"/>' .
            '<path transform="scale(.95249 1.0499)" d="m4.6475 3.6983h2.8971v9.0451h5.0869v2.1898h-7.9841v-11.235z"/></svg></span>';
    }

    public function prima_shortcode() {
        return '<span title="Prima! Positiv, Perfekt!"><svg height="20" viewBox="0 0 16 20" width="16"><rect height="20" width="16" stroke="#000" y="0" x="0" stroke-width=".5" fill="#fff"/>' .
            '<path transform="scale(.95249 1.0499)" d="m3.8467 3.779h4.8085q2.1446 0 3.2884 0.95568 1.1513 0.94815 1.1513 2.709 0 1.7684-1.1513 2.7241-1.1438 0.94815-3.2884 0.94815h-1.9114v3.898h-2.8971v-11.235zm2.8971 2.0995v3.1379h1.6028q0.8428 0 1.3018-0.40635 0.45903-0.41388 0.45903-1.1664 0-0.7525-0.45903-1.1589-0.4589-0.4062-1.3017-0.4062h-1.6028z"/></svg></span>';
    }

    public function sorry_shortcode() {
        return '<span title="Sorry! Tut mir leid."><svg height="20" viewBox="0 0 20 20" width="20"><circle cx="10.085" stroke="#000" cy="9.7034" r="9" stroke-width=".25" fill="#fff"/>' .
            '<path d="m6.8835 11.163 1.1169-0.09766q0.079346 0.67139 0.36621 1.1047 0.29297 0.42725 0.90332 0.6958 0.61035 0.26245 1.3733 0.26245 0.67749 0 1.1963-0.20142 0.5188-0.20142 0.76904-0.54932 0.25635-0.354 0.25635-0.76904 0-0.42114-0.24414-0.73242-0.244-0.317-0.806-0.531-0.36-0.14-1.593-0.4334-1.2327-0.2991-1.7271-0.5616-0.6409-0.3357-0.9583-0.83-0.3113-0.5005-0.3113-1.117 0-0.67749 0.38452-1.2634 0.38452-0.59204 1.123-0.89722 0.73853-0.30518 1.6418-0.30518 0.99487 0 1.7517 0.32349 0.76294 0.31738 1.1719 0.93994 0.40894 0.62256 0.43945 1.4099l-1.1353 0.085449q-0.092-0.8483-0.623-1.2817-0.525-0.4333-1.556-0.4333-1.0742 0-1.5686 0.39673-0.48828 0.39062-0.48828 0.94604 0 0.48218 0.3479 0.79346 0.3418 0.31128 1.7822 0.64087 1.4465 0.32349 1.9836 0.56763 0.78125 0.36011 1.1536 0.91553 0.37231 0.54932 0.37231 1.2695 0 0.71411-0.40894 1.3489-0.40894 0.62866-1.178 0.98267-0.76294 0.3479-1.7212 0.3479-1.2146 0-2.0386-0.354-0.8182-0.354-1.2882-1.062-0.4638-0.714-0.4883-1.611z"/>' .
            '</svg></span>';
    }

    public function unsinn_shortcode() {
        return '<span title="Unsinn"><svg height="20" viewBox="0 0 21 20" width="21"><rect transform="rotate(-45)" height="12" width="12" stroke="#fff" y="8.4957" x="-5.6464" stroke-width=".27551" fill="#0b5198"/>' .
            '<path d="m7.7034 7.7119 1.5254-2e-7 0.084746 2.7966 2.2853 0.03032 0.08755-2.8269 1.6102 2e-7 -0.000004 4.5763h-5.5932z" stroke="#fff" stroke-width=".25" fill="#fff"/></svg></span>';
    }

    public function versehen_shortcode() {
        return '<span title="Versehen (=Irrtum), vertan, ich habe mich geirrt"><svg height="20" viewBox="0 0 16 20" width="16"><rect height="20" width="16" stroke="#fff" y="0" x="0" stroke-width=".5"/>' .
            '<path fill="#fff" transform="scale(.95249 1.0499)" d="m2.5107 3.9075h2.9122l2.9799 8.2926 2.9724-8.2926h2.9122l-4.1613 11.235h-3.454l-4.1613-11.234z"/></svg></span>';
    }

    public function merci_shortcode() {
        return '<span title="Merci! Danke!"><svg height="20" viewBox="0 0 20 20" width="20"><rect height="20" width="20" y=".091618" x=".030649" fill="#f00"/><rect height="18.55" width="18.817" y=".79202" x=".73105" fill="#fff"/>' .
            '<path fill="#f00" d="m13.237 4.0881c-4.8246 5.5779-6.2458 11.765-9.7538 11.765-1.0181 0-1.7913-0.97223-1.7913-2.0499 0-0.93928 0.63481-3.0632 1.9014-3.0632 1.1174 0 1.4965 2.242 1.4965 2.9775 0 0.18127-0.27122 0.18187-0.29259-0.05641-0.05039-0.55704-0.15148-0.99043-0.27484-1.3265-0.34072-0.92875-0.78389-1.1165-0.97373-1.1165-0.74839 0-1.3919 1.5093-1.3919 2.5573 0 0.79292 0.68506 1.6738 1.421 1.6738 1.7531 0 3.1744-1.89 4.7867-4.76 0.349-0.622 0.7014-1.2989 1.1599-2.0498 2.4146-3.9568 3.9276-5.3997 4.5736-6.002 ' .
            '0.123-0.1154 0.498-0.238 0.328 0.1363-0.173 0.3797-0.29 0.322-1.043 1.715-0.837 1.5478-3.289 7.5665-3.7017 10.01-0.0343 0.20368-0.01279 0.19541 0.10049 0.0176 0.34569-0.54185 4.1603-7.373 6.0807-10.164 0.75711-1.1001 0.49416-0.82586 1.2093-1.749 0.08875-0.11448 0.39984-0.12395 0.28085 0.15961-0.54125 1.2883-0.78615 1.6683-0.84857 1.8021-1.3832 2.9587-2.8067 7.3322-3.3064 9.393-0.04408 0.18127-0.22865 1.3618 0.05521 1.3618 0.45746 0 0.86798-0.44813 1.3033-1.1057 0.79397-1.2 0.81593-1.2611 0.91115-1.4017 0.08725-0.12862 0.25001-0.02347 0.18714 0.11252-0.04408 0.09673-0.36991 0.73334-0.79938 1.413-0.39804 0.63-1.0058 1.4661-1.6442 1.4661-0.92544 0-1.0192-1.5569-0.94635-2.0147 0.52124-3.2792 1.8334-5.5755 3.7645-9.1282l-0.03791-0.037908c-2.3819 3.3015-4.6714 8.1476-6.2621 10.58-0.08469 0.12952-0.33245 0.59149-0.5062 0.59149-0.21496 0-0.29244-0.80615-0.20458-1.2228 0.05822-0.27649 0.36915-1.3536 0.46001-1.6266 0.81638-2.4606 2.0338-6.0707 3.7749-8.8429l-0.0161-0.015193z"/>' .
            '</svg></span>';
    }

    public function schluss_shortcode() {
        return '<span title="Schluss (damit!)"><svg height="20" viewBox="0 0 36 20" width="36"><rect rx="0" ry="0" height="20" width="36" stroke="#000" y="0" x="0" stroke-width=".2" fill="#fff"/>' .
        '<rect rx=".59473" ry=".53421" height="16.721" width="32.562" y="1.5737" x="1.6776" fill="#fc0204"/></svg></span>';
    }

    public function wissbegier_shortcode() {
        return '<span title="Wissbegier"><svg height="20" viewBox="0 0 25 20" width="25">' .
            '<path transform="matrix(.97751 0 0 1.023 -.084746 -.084746)" stroke="#000" stroke-width=".5" fill="#fc6604" stroke-linejoin="round" d="m0.66511 0.65528h3.7615l3.3148 13.028 2.8688-13.028h4.2222l2.6212 12.779 2.9555-12.779h3.8607l-4.3367 18.398h-4.4727l-2.8071-12.79-2.6712 12.79h-4.2993z"/>' .
            '</svg></span>';
    }

    public function kummer_shortcode() {
        return '<span title="Kummer; das gefällt mir nicht; Kann doch nicht wahr sein!"><svg height="20" viewBox="0 0 36 20" width="36"><path d="m34.927 19.037-31.674-8.956 31.667-8.9568z" stroke="#fc0204" stroke-width="1.5" fill="#fff"/>' .
            '<path transform="matrix(.91904 0 0 1 1.7597 .41253)" d="m22.754 5.807h1.8799v2.6611l2.71-2.6611h2.1826l-3.5107 3.4521 3.8721 3.8379h-2.3535l-2.9004-2.8711v2.8711h-1.8799v-7.29z"/></svg></span>';
    }
}

new Ferrovikons();
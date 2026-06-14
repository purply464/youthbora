<?php
/*
Plugin Name: Plogging Group Maker
Description: 플로깅 조 편성 프로그램
Version: 1.0
Author: purply464
*/

function pgm_admin_page() {
    echo '<h1>플러그인 동작 확인</h1>';
}

function pgm_admin_menu() {
    add_menu_page(
        '플로깅',
        '플로깅',
        'manage_options',
        'plogging-group-maker',
        'pgm_admin_page'
    );
}

add_action('admin_menu', 'pgm_admin_menu');
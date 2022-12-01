<?php
require './wp-includes/theme.php';
$heading_font_family = "'Times New Roman', Times, serif";
$font_family = "'Anonymous Pro', monospace;";
$nav_bg = 'white';
$nav_text = 'black';
$toggle_button_bg = 'white';
$toggle_button_text = 'black';
$hover_toggle_button_bg = 'black';
$hover_toggle_button_text = 'white';
$hero_card_bg = 'white';
$hero_card_text = 'black';
$hero_button_bg = 'red';
$hero_button_text = 'white';
$hero_button_bg_hover = 'black';
$hero_button_text_hover = 'white';
$card_bg = 'white';
$card_text = 'black';
$button_bg = 'black';
$button_text = 'white';
$button_border_radius = 0;
$button_bg_hover = 'red';
$button_text_hover = 'white';
$footer_bg = 'white';
$footer_text = 'black';
$footer_link = 'black';
// header("Content-type: text/css");
?>

<style>
nav {
    background-color: <?= $nav_bg ?>;
}

h1,
h2,
h3,
h4,
a {
    font-family: <?= $heading_font_family ?>; 
}

nav a {
    color: <?= $nav_text ?>;
}

nav li:hover {
    background-color: <?= $button_bg_hover ?>;
}

nav li a:hover {
    color: <?= $button_text_hover ?>;
}

button.toggle {
    background-color: <?= $toggle_button_bg ?>;
}

button.toggle h2 {
    color: <?= $toggle_button_text ?>;
}

button.toggle:hover {
    background-color: <?= $hover_toggle_button_bg ?>;
}

button.toggle:hover h2 {
    color: <?= $hover_toggle_button_text ?>;
}

.hero .card {
    background-color: <?= $hero_card_bg ?>;
    color: <?= $hero_card_text ?>;
}

button.hero-btn {
    background-color: <?= $hero_button_bg ?>;
    color: <?= $hero_button_text ?>;
}

.hero-btn:hover {
    background-color: <?= $hero_button_bg_hover ?>;
    color: <?= $hero_button_text_hover ?>;
}

.card {
    background-color: <?= $card_bg ?>;
    color: <?= $card_text ?>;
}

button {
    background-color: <?= $button_bg ?>;
    color: <?= $button_text ?>;
    border-radius: <?= $button_border_radius ?>;
}

button:hover {
    background-color: <?= $button_bg_hover ?>;
    color: <?= $button_text_hover ?>;
}

p,
li {
    font-family: <?= $font_family ?>;
}

a:visited {
  color: black;
}

footer.site-footer {
    background-color: <?= $footer_bg ?>;
    color: <?= $footer_text ?>;
}

.footerNav a {
    color: <?= $footer_link ?>;
}
</style>
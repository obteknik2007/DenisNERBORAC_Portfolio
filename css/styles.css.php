<?php
header('Content-type: text/css');
require_once '../inc/config.php';

?>
body {
    overflow-x: hidden;
}

p {
    font-size: 20px;
}

p.small {
    font-size: 16px;
}

a,
a:hover,
a:focus,
a:active,
a.active {
    outline: 0;
    color: <?= $primary_color ?>;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}

hr.star-light,
hr.star-primary {
    margin: 25px auto 30px;
    padding: 0;
    max-width: 250px;
    border: 0;
    border-top: solid 5px;
    text-align: center;
}

hr.star-light:after,
hr.star-primary:after {
    content: "\f005";
    display: inline-block;
    position: relative;
    top: -.8em;
    padding: 0 .25em;
    font-family: FontAwesome;
    font-size: 2em;
}

hr.star-light {
    border-color: #fff;
}

hr.star-light:after {
    color: #fff;
    background-color: <?= $primary_color ?>;
}

hr.star-primary {
    border-color: <?= $secondary_color ?>;
}

hr.star-primary:after {
    color: <?= $secondary_color ?>;
    background-color: #fff;
}

.img-centered {
    margin: 0 auto;
}

header {
    text-align: center;
    color: #fff;
    background: <?= $primary_color ?>;
}

header .container {
    padding-top: 100px;
    padding-bottom: 50px;
}

header img {
    display: block;
    margin: 0 auto 20px;
}

header #img-header {
    padding: 30px;
    border-radius: 50%;
    background-color: <?= $secondary_color ?>;
}

header .intro-text .name {
    display: block;
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 2em;
    font-weight: 700;
}

header .intro-text .skills {
    font-size: 1.25em;
    font-weight: 300;
}

@media(min-width:768px) {
    header .container {
        padding-top: 200px;
        padding-bottom: 100px;
    }

    header .intro-text .name {
        font-size: 4.75em;
    }

    header .intro-text .skills {
        font-size: 1.75em;
    }
}

@media(min-width:768px) {
    .navbar-fixed-top {
        padding: 25px 0;
        -webkit-transition: padding .3s;
        -moz-transition: padding .3s;
        transition: padding .3s;
    }

    .navbar-fixed-top .navbar-brand {
        font-size: 2em;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        transition: all .3s;
    }

    .navbar-fixed-top.navbar-shrink {
        padding: 10px 0;
    }

    .navbar-fixed-top.navbar-shrink .navbar-brand {
        font-size: 1.5em;
    }
}

.navbar {
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}

.navbar a:focus {
    outline: 0;
}

.navbar .navbar-nav {
    letter-spacing: 1px;
}

.navbar .navbar-nav li a:focus {
    outline: 0;
}

.navbar-default,
.navbar-inverse {
    border: 0;
}

section {
    padding: 100px 0;
}

section h2 {
    margin: 0;
    font-size: 3em;
}

section.success {
    color: #fff;
    background: <?= $primary_color ?>;
}

section.success a,
section.success a:hover,
section.success a:focus,
section.success a:active,
section.success a.active {
    outline: 0;
    color: <?= $secondary_color ?>;
}

@media(max-width:767px) {
    section {
        padding: 75px 0;
    }

    section.first {
        padding-top: 75px;
    }
}

#portfolio .portfolio-item {
    right: 0;
    margin: 0 0 15px;
}

#portfolio .portfolio-item .portfolio-link {
    display: block;
    position: relative;
    margin: 0 auto;
    max-width: 400px;
}

#portfolio .portfolio-item .portfolio-link .caption {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    background: rgba(24,188,156,.9);
    -webkit-transition: all ease .5s;
    -moz-transition: all ease .5s;
    transition: all ease .5s;
}

#portfolio .portfolio-item .portfolio-link .caption:hover {
    opacity: 1;
}

#portfolio .portfolio-item .portfolio-link .caption .caption-content {
    position: absolute;
    top: 50%;
    width: 100%;
    height: 20px;
    margin-top: -12px;
    text-align: center;
    font-size: 20px;
    color: #fff;
}

#portfolio .portfolio-item .portfolio-link .caption .caption-content i {
    margin-top: -12px;
}

#portfolio .portfolio-item .portfolio-link .caption .caption-content h3,
#portfolio .portfolio-item .portfolio-link .caption .caption-content h4 {
    margin: 0;
}

#portfolio * {
    z-index: 2;
}

@media(min-width:767px) {
    #portfolio .portfolio-item {
        margin: 0 0 30px;
    }
}

.btn-outline {
    margin-top: 15px;
    border: solid 2px #fff;
    font-size: 20px;
    color: #fff;
    background: 0 0;
    transition: all .3s ease-in-out;
}

.btn-outline:hover,
.btn-outline:focus,
.btn-outline:active,
.btn-outline.active {
    border: solid 2px #fff;
    color: <?= $primary_color ?>;
    background: #fff;
}

.floating-label-form-group {
    position: relative;
    margin-bottom: 0;
    padding-bottom: .5em;
    border-bottom: 1px solid #eee;
}

.floating-label-form-group input,
.floating-label-form-group textarea {
    z-index: 1;
    position: relative;
    padding-right: 0;
    padding-left: 0;
    border: 0;
    border-radius: 0;
    font-size: 1.5em;
    background: 0 0;
    box-shadow: none!important;
    resize: none;
}

.floating-label-form-group label {
    display: block;
    z-index: 0;
    position: relative;
    top: 2em;
    margin: 0;
    font-size: .85em;
    line-height: 1.764705882em;
    vertical-align: middle;
    vertical-align: baseline;
    opacity: 0;
    -webkit-transition: top .3s ease,opacity .3s ease;
    -moz-transition: top .3s ease,opacity .3s ease;
    -ms-transition: top .3s ease,opacity .3s ease;
    transition: top .3s ease,opacity .3s ease;
}

.floating-label-form-group::not(:first-child) {
    padding-left: 14px;
    border-left: 1px solid #eee;
}

.floating-label-form-group-with-value label {
    top: 0;
    opacity: 1;
}

.floating-label-form-group-with-focus label {
    color: <?= $primary_color ?>;
}

form .row:first-child .floating-label-form-group {
    border-top: 1px solid #eee;
}

footer {
    color: #fff;
}

footer h3 {
    margin-bottom: 30px;
}

footer .footer-above {
    padding-top: 50px;
    background-color: <?= $secondary_color ?>;
}

footer .footer-col {
    margin-bottom: 50px;
}

footer .footer-below {
    padding: 25px 0;
    background-color: #233140;
}

.btn-social {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 2px solid #fff;
    border-radius: 100%;
    text-align: center;
    font-size: 20px;
    line-height: 45px;
}

.btn:focus,
.btn:active,
.btn.active {
    outline: 0;
}

.scroll-top {
    z-index: 1049;
    position: fixed;
    right: 2%;
    bottom: 2%;
    width: 50px;
    height: 50px;
}

.scroll-top .btn {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    font-size: 20px;
    line-height: 28px;
}

.scroll-top .btn:focus {
    outline: 0;
}

.portfolio-modal .modal-content {
    padding: 100px 0;
    min-height: 100%;
    border: 0;
    border-radius: 0;
    text-align: center;
    background-clip: border-box;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.portfolio-modal .modal-content h2 {
    margin: 0;
    font-size: 3em;
}

.portfolio-modal .modal-content img.modal-picture,
.portfolio-modal .modal-content .carousel.slide {
    margin-bottom: 30px;
}

.portfolio-modal .modal-content .item-details {
    margin: 30px 0;
}

.portfolio-modal .close-modal {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 75px;
    height: 75px;
    background-color: transparent;
    cursor: pointer;
}

.portfolio-modal .close-modal:hover {
    opacity: .3;
}

.portfolio-modal .close-modal .lr {
    z-index: 1051;
    width: 1px;
    height: 75px;
    margin-left: 35px;
    background-color: <?= $secondary_color ?>;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.portfolio-modal .close-modal .lr .rl {
    z-index: 1052;
    width: 1px;
    height: 75px;
    background-color: <?= $secondary_color ?>;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}

.portfolio-modal .modal-backdrop {
    display: none;
    opacity: 0;
}
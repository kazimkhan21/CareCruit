<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health Form</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/additional.css"><link rel="stylesheet" href="assets/mobirise/css/additional.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
  <style>
    body {
      background-image: url('HealthBG.jpg'); 
      background-size: cover;
      background-position: center;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .form-container {
      background-color: rgba(225, 225, 225, 0.7); 
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: 20px auto;
      opacity: 1;
      transition: opacity 0.5s ease-in-out;
      height: 200px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      border-style:solid;
      border-color:black;
  }


    .btn-primary {
      background-color: transparent;
      border-color: #007bff;
      color: #007bff;
      border-radius: 20px;
      transition: background-color 0.3s, color 0.3s, transform 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
      position: relative;
      overflow: hidden;
      margin-bottom: 10px;
      width: 150px;
      text-align: center;
      text-decoration: none;
      padding: 10px;
      cursor: pointer;
      align-items: center;
      border-style:solid;
      border-color:black;
      color:white;
      background:black;
    }
    .mb-4 {
        margin-top: 20px; 
        color:black;
    }

    .btn-primary:hover {
  color: #fff;
  transform: scale(1.1);
  background-color: black; 
}

    .col-md-6
    {
        color:black;
    }

    .btn-primary::after {
      content: '';
      position: absolute;
      background-color: rgba(255, 255, 255, 0.5);
      width: 10px;
      height: 10px;
      border-radius: 50%;
      animation: bubble 0.6s ease-out;
    }
    .container.form-container {
     background-color: transparent; 
    }

    .btn-primary:hover::after {
      animation: bubble 0.6s ease-out;
    }

    @keyframes bubble {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      100% {
        transform: scale(2);
        opacity: 0;
      }
    }
  </style>
</head>

<body class="d-flex flex-column align-items-center justify-content-center vh-100">
<style>
.cid-u2tT8qOpJW  {
  z-index: 1000;
  width: 100%;
  position: relative;
}
.cid-u2tT8qOpJW  .dropdown-item:before {
  font-family: Moririse2;
  content: "\e966";
  display: inline-block;
  width: 0;
  position: absolute;
  left: 1rem;
  top: 0.5rem;
  margin-right: 0.5rem;
  line-height: 1;
  font-size: inherit;
  vertical-align: middle;
  text-align: center;
  overflow: hidden;
  transform: scale(0, 1);
  transition: all 0.25s ease-in-out;
}
@media (max-width: 767px) {
  .cid-u2tT8qOpJW  .navbar-toggler {
    transform: scale(0.8);
  }
}
.cid-u2tT8qOpJW  .navbar-brand {
  flex-shrink: 0;
  align-items: center;
  margin-right: 0;
  padding: 10px 0;
  transition: all 0.3s;
  word-break: break-word;
  z-index: 1;
}
.cid-u2tT8qOpJW  .navbar-brand img {
  max-width: 100%;
  max-height: 100%;
}
.cid-u2tT8qOpJW  .navbar-brand .navbar-caption {
  line-height: inherit;
}
.cid-u2tT8qOpJW  .navbar-brand .navbar-logo a {
  outline: none;
}
.cid-u2tT8qOpJW  .navbar-nav {
  margin: auto;
  margin-left: 0;
  margin-left: auto;
}
.cid-u2tT8qOpJW  .navbar-nav .nav-item {
  padding: 0;
  transition: 0.3s all;
}
.cid-u2tT8qOpJW  .navbar-nav .nav-item .nav-link {
  padding: 3rem;
  margin: 0;
  border-radius: 1rem;
  transition: 0.3s all;
}
.cid-u2tT8qOpJW  .navbar-nav .nav-item .nav-link:hover {
  background-color: rgba(27, 31, 10, 0.06);
}
.cid-u2tT8qOpJW  .navbar-nav .open .nav-link::after {
  transform: rotate(180deg);
}
@media (min-width: 992px) {
  .cid-u2tT8qOpJW  .navbar-nav .open .nav-link::before {
    content: "";
    width: 100%;
    height: 20px;
    top: 100%;
    background: transparent;
    position: absolute;
  }
}
.cid-u2tT8qOpJW  .navbar-nav .dropdown-item {
  padding: 12px;
  border-radius: 0.5rem;
  margin: 0 8px;
  transition: 0.3s all;
}
.cid-u2tT8qOpJW  .navbar-nav .dropdown-item:hover {
  background-color: rgba(27, 31, 10, 0.06);
}
@media (min-width: 992px) {
  .cid-u2tT8qOpJW  .navbar-nav {
    padding-left: 1.5rem;
  }
}
.cid-u2tT8qOpJW  .nav-link {
  width: fit-content;
  position: relative;
}
.cid-u2tT8qOpJW  .navbar-logo {
  margin: 0;
}
@media (max-width: 767px) {
  .cid-u2tT8qOpJW  .navbar-logo {
    padding-left: 0;
  }
}
.cid-u2tT8qOpJW  .navbar-caption {
  padding-left: 1rem;
  padding-right: 0.5rem;
}
@media (max-width: 767px) {
  .cid-u2tT8qOpJW  .nav-dropdown {
    padding-bottom: 0.5rem;
  }
}
.cid-u2tT8qOpJW  .nav-dropdown .link.dropdown-toggle::after {
  margin-left: 0.5rem;
  margin-top: 0.2rem;
  transition: 0.3s all;
}
.cid-u2tT8qOpJW  .container {
  display: flex;
  height: 90px;
  padding: 0.5rem 0.6rem;
  flex-wrap: nowrap;
  background: rgba(255, 255, 255, 0.8);
  left: 0;
  right: 0;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: flex-end;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 100vw;
  margin-top: 1rem;
  background-color: #ffffff;
  box-shadow: 0 30px 60px 0 rgba(27, 31, 10, 0.08);
}
@media (max-width: 992px) {
  .cid-u2tT8qOpJW  .container {
    padding-right: 2rem;
  }
}
@media (max-width: 767px) {
  .cid-u2tT8qOpJW  .container {
    width: 95%;
    height: 56px;
    padding-right: 1rem;
    margin-top: 0rem;
  }
}
.cid-u2tT8qOpJW  .iconfont-wrapper {
  color: #000000;
  font-size: 1.5rem;
  padding-right: 0.5rem;
}
.cid-u2tT8qOpJW  .dropdown-menu {
  flex-wrap: wrap;
  flex-direction: column;
  max-width: 100%;
  padding: 12px 4px;
  border-radius: 1.5rem;
  transition: 0.3s all;
  min-width: auto;
  background: #ffffff;
  background: rgba(255, 255, 255, 0.8);
}
.cid-u2tT8qOpJW  .nav-item:focus,
.cid-u2tT8qOpJW  .nav-link:focus {
  outline: none;
}
.cid-u2tT8qOpJW  .dropdown .dropdown-menu .dropdown-item {
  width: auto;
  transition: all 0.25s ease-in-out;
}
.cid-u2tT8qOpJW  .dropdown .dropdown-menu .dropdown-item::after {
  right: 0.5rem;
}
.cid-u2tT8qOpJW  .dropdown .dropdown-menu .dropdown-item .mbr-iconfont {
  margin-right: 0.5rem;
  vertical-align: sub;
}
.cid-u2tT8qOpJW  .dropdown .dropdown-menu .dropdown-item .mbr-iconfont:before {
  display: inline-block;
  transform: scale(1, 1);
  transition: all 0.25s ease-in-out;
}
.cid-u2tT8qOpJW  .collapsed .dropdown-menu .dropdown-item:before {
  display: none;
}
.cid-u2tT8qOpJW  .collapsed .dropdown .dropdown-menu .dropdown-item {
  padding: 0.235em 1.5em 0.235em 1.5em;
  transition: none;
  margin: 0;
}
.cid-u2tT8qOpJW  .navbar {
  min-height: 90px;
  transition: all 0.3s;
  border-bottom: 1px solid transparent;
  background: transparent;
  padding: 0;
  border: none;
  box-shadow: none;
  border-radius: 0;
}
.cid-u2tT8qOpJW  .navbar.opened {
  transition: all 0.3s;
}
.cid-u2tT8qOpJW  .navbar .dropdown-item {
  padding: 0.5rem 1.8rem;
}
.cid-u2tT8qOpJW  .navbar .navbar-logo img {
  min-width: 6rem;
  object-fit: cover;
}
.cid-u2tT8qOpJW  .navbar .navbar-collapse {
  z-index: 1;
  justify-content: flex-end;
}
.cid-u2tT8qOpJW  .navbar.collapsed {
  justify-content: center;
}
.cid-u2tT8qOpJW  .navbar.collapsed .nav-item .nav-link::before {
  display: none;
}
.cid-u2tT8qOpJW  .navbar.collapsed.opened .dropdown-menu {
  top: 0;
}
@media (min-width: 992px) {
  .cid-u2tT8qOpJW  .navbar.collapsed.opened:not(.navbar-short) .navbar-collapse {
    max-height: calc(98.5vh - 3rem);
  }
}
.cid-u2tT8qOpJW  .navbar.collapsed .dropdown-menu .dropdown-submenu {
  left: 0 !important;
}
.cid-u2tT8qOpJW  .navbar.collapsed .dropdown-menu .dropdown-item:after {
  right: auto;
}
.cid-u2tT8qOpJW  .navbar.collapsed .dropdown-menu .dropdown-toggle[data-toggle="dropdown-submenu"]:after {
  margin-left: 0.5rem;
  margin-top: 0.2rem;
  border-top: 0.35em solid;
  border-right: 0.35em solid transparent;
  border-left: 0.35em solid transparent;
  border-bottom: 0;
  top: 41%;
}
.cid-u2tT8qOpJW  .navbar.collapsed ul.navbar-nav li {
  margin: auto;
}
.cid-u2tT8qOpJW  .navbar.collapsed .dropdown-menu .dropdown-item {
  padding: 0.25rem 1.5rem;
  text-align: center;
}
.cid-u2tT8qOpJW  .navbar.collapsed .icons-menu {
  padding-left: 0;
  padding-right: 0;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
@media (max-width: 767px) {
  .cid-u2tT8qOpJW  .navbar {
    min-height: 72px;
  }
  .cid-u2tT8qOpJW  .navbar .navbar-logo img {
    height: 2.5rem;
    min-width: 2.5rem;
  }
}
@media (max-width: 991px) {
  .cid-u2tT8qOpJW  .navbar .nav-item .nav-link::before {
    display: none;
  }
  .cid-u2tT8qOpJW  .navbar.opened .dropdown-menu {
    top: 0;
  }
  .cid-u2tT8qOpJW  .navbar .dropdown-menu .dropdown-submenu {
    left: 0;
  }
  .cid-u2tT8qOpJW  .navbar .dropdown-menu .dropdown-item:after {
    right: auto;
  }
  .cid-u2tT8qOpJW  .navbar .dropdown-menu .dropdown-toggle[data-toggle="dropdown-submenu"]:after {
    margin-left: 0.5rem;
    margin-top: 0.2rem;
    border-top: 0.35em solid;
    border-right: 0.35em solid transparent;
    border-left: 0.35em solid transparent;
    border-bottom: 0;
    top: 40%;
  }
  .cid-u2tT8qOpJW  .navbar .dropdown-menu .dropdown-item {
    padding: 0.25rem 1.5rem;
    text-align: center;
  }
  .cid-u2tT8qOpJW  .navbar .navbar-brand {
    flex-shrink: initial;
    flex-basis: auto;
    word-break: break-word;
    padding-right: 10px;
  }
  .cid-u2tT8qOpJW  .navbar .navbar-toggler {
    flex-basis: auto;
  }
  .cid-u2tT8qOpJW  .navbar .icons-menu {
    padding-left: 0;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }
}
.cid-u2tT8qOpJW  .navbar.navbar-short .navbar-logo img {
  height: 2rem;
}
.cid-u2tT8qOpJW  .dropdown-item.active,
.cid-u2tT8qOpJW  .dropdown-item:active {
  background-color: transparent;
}
.cid-u2tT8qOpJW  .navbar-expand-lg .navbar-nav .nav-link {
  padding: 0;
}
.cid-u2tT8qOpJW  .nav-dropdown .link.dropdown-toggle {
  margin-right: 1.667em;
}
.cid-u2tT8qOpJW  .nav-dropdown .link.dropdown-toggle[aria-expanded="true"] {
  margin-right: 0;
  padding: 0.667em 1.667em;
}
.cid-u2tT8qOpJW  .navbar.navbar-expand-lg .dropdown .dropdown-menu {
  background: #ffffff;
}
.cid-u2tT8qOpJW  .navbar.navbar-expand-lg .dropdown .dropdown-menu .dropdown-submenu {
  margin: 0;
  left: 105%;
  transform: none;
  top: -12px;
}
.cid-u2tT8qOpJW  .navbar .dropdown.open > .dropdown-menu {
  display: flex;
}
.cid-u2tT8qOpJW  ul.navbar-nav {
  flex-wrap: wrap;
}
.cid-u2tT8qOpJW  .navbar-buttons {
  text-align: center;
  min-width: 140px;
}
@media (max-width: 992px) {
  .cid-u2tT8qOpJW  .navbar-buttons {
    text-align: left;
  }
}
.cid-u2tT8qOpJW  button.navbar-toggler {
  outline: none;
  width: 31px;
  height: 20px;
  cursor: pointer;
  transition: all 0.2s;
  position: relative;
  align-self: center;
}
.cid-u2tT8qOpJW  button.navbar-toggler .hamburger span {
  position: absolute;
  right: 0;
  width: 30px;
  height: 2px;
  border-right: 5px;
  background-color: #000000;
}
.cid-u2tT8qOpJW  button.navbar-toggler .hamburger span:nth-child(1) {
  top: 0;
  transition: all 0.2s;
}
.cid-u2tT8qOpJW  button.navbar-toggler .hamburger span:nth-child(2) {
  top: 8px;
  transition: all 0.15s;
}
.cid-u2tT8qOpJW  button.navbar-toggler .hamburger span:nth-child(3) {
  top: 8px;
  transition: all 0.15s;
}
.cid-u2tT8qOpJW  button.navbar-toggler .hamburger span:nth-child(4) {
  top: 16px;
  transition: all 0.2s;
}
.cid-u2tT8qOpJW  nav.opened .hamburger span:nth-child(1) {
  top: 8px;
  width: 0;
  opacity: 0;
  right: 50%;
  transition: all 0.2s;
}
.cid-u2tT8qOpJW  nav.opened .hamburger span:nth-child(2) {
  transform: rotate(45deg);
  transition: all 0.25s;
}
.cid-u2tT8qOpJW  nav.opened .hamburger span:nth-child(3) {
  transform: rotate(-45deg);
  transition: all 0.25s;
}
.cid-u2tT8qOpJW  nav.opened .hamburger span:nth-child(4) {
  top: 8px;
  width: 0;
  opacity: 0;
  right: 50%;
  transition: all 0.2s;
}
.cid-u2tT8qOpJW  .navbar-dropdown {
  padding: 0 1rem;
}
.cid-u2tT8qOpJW  a.nav-link {
  display: flex;
  align-items: center;
  justify-content: center;
}
.cid-u2tT8qOpJW  .icons-menu {
  flex-wrap: nowrap;
  display: flex;
  justify-content: center;
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 0.3rem;
  text-align: center;
}
@media (max-width: 992px) {
  .cid-u2tT8qOpJW  .icons-menu {
    justify-content: flex-start;
    margin-bottom: 0.5rem;
  }
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .cid-u2tT8qOpJW  .navbar {
    height: 70px;
  }
  .cid-u2tT8qOpJW  .navbar.opened {
    height: auto;
  }
  .cid-u2tT8qOpJW  .nav-item .nav-link:hover::before {
    width: 175%;
    max-width: calc(100% + 2rem);
    left: -1rem;
  }
}
.cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu {
  display: none;
  width: max-content;
  max-width: 500px;
  transform: translateX(-50%);
  top: calc(100% + 20px);
  left: 50%;
}
.cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown-item {
  line-height: 1;
}
.cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item {
  align-items: center;
  display: flex;
  height: max-content;
  min-height: max-content;
}
.cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item::after {
  display: inline-block;
  position: static;
  margin-left: 0.5rem;
  margin-top: 0;
  margin-right: 0;
  margin-bottom: 0;
  transition: 0.3s all;
  transform: rotate(-90deg);
}
.cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown.open .dropdown-item::after {
  transform: rotate(0deg);
}
.cid-u2tT8qOpJW  .mbr-section-btn {
  margin: -0.6rem -0.6rem;
}
.cid-u2tT8qOpJW  .navbar-toggler {
  margin-left: 12px;
  margin-right: 8px;
  order: 1000;
}
@media (max-width: 991px) {
  .cid-u2tT8qOpJW  .navbar-brand {
    margin-right: auto;
  }
  .cid-u2tT8qOpJW  .navbar-collapse {
    z-index: -1;
    position: absolute;
    top: 110%;
    left: 0;
    width: 100%;
    padding: 1rem;
    border-radius: 1.5rem;
    background: #ffffff;
    opacity: 1;
    border-color: rgba(255, 255, 255, 0.8);
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(8px);
  }
  .cid-u2tT8qOpJW  .navbar-nav .nav-item .nav-link::after {
    margin-left: 10px;
  }
  .cid-u2tT8qOpJW  .navbar-nav .dropdown-item:hover {
    background-color: rgba(27, 31, 10, 0.06);
  }
  .cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu {
    max-width: 100%;
    transform: translateX(0);
    top: 10px;
    left: 0;
    padding: 8px;
    border-radius: 1rem;
    background-color: rgba(27, 31, 10, 0.04);
  }
  .cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown-item {
    padding: 8px;
    line-height: 1;
    margin-bottom: 4px;
  }
  .cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item {
    align-items: center;
    display: flex;
    height: max-content;
    min-height: max-content;
  }
  .cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown .dropdown-item::after {
    display: inline-block;
    position: static;
    margin-left: 0.5rem;
    margin-top: 0;
    margin-right: 0;
    margin-bottom: 0;
    transition: 0.3s all;
    transform: rotate(0deg);
  }
  .cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown.open .dropdown-item::after {
    transform: rotate(180deg);
  }
  .cid-u2tT8qOpJW  .navbar .dropdown > .dropdown-menu .dropdown-submenu {
    position: static;
    width: 100%;
    max-width: 100%;
    transform: translateX(0);
    top: 0;
    left: 0;
    padding: 8px;
    border-radius: 1rem;
    background-color: rgba(27, 31, 10, 0.04);
  }
  .cid-u2tT8qOpJW  .navbar .dropdown.open > .dropdown-menu {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
}
@media (max-width: 575px) {
  .cid-u2tT8qOpJW  .navbar-collapse {
    padding: 1rem;
  }
}
</style>

<section class="menu menu2 cid-u2tT8qOpJW" once="menu" id="menu-5-u2tT8qOpJW">
  <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
    <div class="container">
      <div class="navbar-brand">
        <span class="navbar-logo">
					<a href="https://mobiri.se">
						<img src="WhatsApp Image 2024-01-22 at 21.31.30_d42fde23.jpg" style="height: 4.3rem;">
					</a>
				</span>
				<span class="navbar-caption-wrap">
          <a class="navbar-caption text-black display-4" href="https://mobiri.se">Carecruit</a>
        </span>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-bs-toggle="collapse" data-target="#navbarSupportedContent"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="index.html">Home<span></span></a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link link text-black display-4" href="find.php">Medical<span></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="finds.php"
              aria-expanded="false">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="find.php">Services<span></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="find.php">About Us<span></span></a>
          </li>
        </ul>
        <div class="navbar-buttons mbr-section-btn">
          <a class="btn btn-primary display-4" href="signup.php">Explore Now<span></span></a>
        </div>
      </div>
    </div>
  </nav>
</section>
  <div class="container form-container">
    <h1 class="mb-4">Choose</h1>
    <div class="row">
      <div class="col-md-6">
        <a class="btn btn-primary link-button d-block user-button" href="health.php">User</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary link-button d-block" href="health1.php">Worker</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.body.style.opacity = 1;
    });

    document.querySelector('.user-button').addEventListener('click', function (e) {
      const circle = document.createElement('span');
      const size = Math.max(this.clientWidth, this.clientHeight);
      const x = e.pageX - this.offsetLeft - size / 2;
      const y = e.pageY - this.offsetTop - size / 2;

      circle.style.width = circle.style.height = size + 'px';
      circle.style.left = x + 'px';
      circle.style.top = y + 'px';

      this.appendChild(circle);

      setTimeout(() => {
        circle.remove();
      }, 600);

      this.style.animation = 'bounce 0.5s ease';
      setTimeout(() => {
        this.style.animation = '';
      }, 500);
    });
  </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Evance :: Potforlio</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="https://img.icons8.com/fluency/48/bitcoin-exchange.png" rel="icon" type="image/png">
  <link href="https://img.icons8.com/fluency/48/bitcoin-exchange.png" rel="apple-touch-icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
  /**
* Template Name: PhotoFolio
* Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# Font & Color Variables
# Help: https://bootstrapmade.com/color-system/
--------------------------------------------------------------*/
/* Fonts */
:root {
  --default-font: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --heading-font: "Cardo",  sans-serif;
  --nav-font: "Inter",  sans-serif;
}

/* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
:root { 
  --background-color: #000000; /* Background color for the entire website, including individual sections */
  --default-color: #fafafa; /* Default color used for the majority of the text content across the entire website */
  --heading-color: #ffffff; /* Color for headings, subheadings and title throughout the website */
  --accent-color: #27a776; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
  --surface-color: #1a1a1a; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
  --contrast-color: #ffffff; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
}

/* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
:root {
  --nav-color: rgba(255, 255, 255, 0.5);  /* The default color of the main navmenu links */
  --nav-hover-color: #ffffff; /* Applied to main navmenu links when they are hovered over or active */
  --nav-mobile-background-color: #1a1a1a; /* Used as the background color for mobile navigation menu */
  --nav-dropdown-background-color: #1a1a1a; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
  --nav-dropdown-color: rgba(255, 255, 255, 0.5); /* Used for navigation links of the dropdown items in the navigation menu. */
  --nav-dropdown-hover-color: #ffffff; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
}

/* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

.light-background {
  --background-color: #1a1a1a;
  --surface-color: #343434;
}

.dark-background {
  --background-color: #ffffff;
  --default-color: #ffffff;
  --heading-color: #ffffff;
  --surface-color: #252525;
  --contrast-color: #ffffff;
}

/* Smooth scroll */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# General Styling & Shared Classes
--------------------------------------------------------------*/
body {
  color: var(--default-color);
  background-color: var(--background-color);
  font-family: var(--default-font);
}

a {
  color: var(--accent-color);
  text-decoration: none;
  transition: 0.3s;
}

a:hover {
  color: color-mix(in srgb, var(--accent-color), transparent 25%);
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--heading-color);
  font-family: var(--heading-font);
}

/* PHP Email Form Messages
------------------------------*/
.php-email-form .error-message {
  display: none;
  background: #df1529;
  color: #ffffff;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.php-email-form .sent-message {
  display: none;
  color: #ffffff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.php-email-form .loading {
  display: none;
  background: var(--surface-color);
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid var(--accent-color);
  border-top-color: var(--surface-color);
  animation: php-email-form-loading 1s linear infinite;
}

@keyframes php-email-form-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
.header {
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 20px 0;
  transition: all 0.5s;
  z-index: 997;
  border-bottom: 1px solid var(--background-color);
}

.header .logo {
  line-height: 1;
}

.header .logo img {
  max-height: 36px;
  margin-right: 8px;
}

.header .logo h1 {
  font-size: 32px;
  margin: 0;
  font-weight: 400;
  color: var(--heading-color);
}

.header .logo i {
  font-size: 28px;
  margin-right: 6px;
}

.header .header-social-links {
  padding-right: 15px;
}

.header .header-social-links a {
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  padding-left: 6px;
  display: inline-block;
  transition: 0.3s;
  font-size: 16px;
}

.header .header-social-links a:hover {
  color: var(--accent-color);
}

.header .header-social-links a i {
  line-height: 0px;
}

@media (max-width: 1200px) {
  .header .logo {
    order: 1;
  }

  .header .logo h1 {
    font-size: 26px;
  }

  .header .logo i {
    font-size: 20px;
  }

  .header .header-social-links {
    order: 2;
  }

  .header .header-social-links a {
    font-size: 16px;
  }

  .header .navmenu {
    order: 3;
  }
}

.scrolled .header {
  border-color: color-mix(in srgb, var(--background-color) 90%, white 20%);
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Navmenu - Desktop */
@media (min-width: 1200px) {
  .navmenu {
    padding: 0;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-color);
    padding: 18px 15px;
    font-size: 14px;
    font-family: var(--nav-font);
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    transition: 0.3s;
  }

  .navmenu li:last-child a {
    padding-right: 0;
  }

  .navmenu li:hover>a,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-hover-color);
  }

  .navmenu .dropdown ul {
    margin: 0;
    padding: 10px 0;
    background: var(--nav-dropdown-background-color);
    display: block;
    position: absolute;
    visibility: hidden;
    left: 14px;
    top: 130%;
    opacity: 0;
    transition: 0.3s;
    border-radius: 4px;
    z-index: 99;
  }

  .navmenu .dropdown ul li {
    min-width: 200px;
  }

  .navmenu .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    color: var(--nav-dropdown-color);
  }

  .navmenu .dropdown ul a i {
    font-size: 12px;
  }

  .navmenu .dropdown ul a:hover,
  .navmenu .dropdown ul .active:hover,
  .navmenu .dropdown ul li:hover>a {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dropdown .dropdown ul {
    top: 0;
    left: -90%;
    visibility: hidden;
  }

  .navmenu .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: -100%;
    visibility: visible;
  }
}

/* Navmenu - Mobile */
@media (max-width: 1199px) {
  .mobile-nav-toggle {
    color: var(--nav-color);
    font-size: 28px;
    line-height: 0;
    margin-right: 10px;
    cursor: pointer;
    transition: color 0.3s;
  }

  .navmenu {
    padding: 0;
    z-index: 9997;
  }

  .navmenu ul {
    display: none;
    position: absolute;
    inset: 60px 20px 20px 20px;
    padding: 10px 0;
    margin: 0;
    border-radius: 6px;
    background-color: var(--nav-mobile-background-color);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-dropdown-color);
    padding: 10px 20px;
    font-family: var(--nav-font);
    font-size: 17px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: 0.3s;
    background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
  }

  .navmenu a i:hover,
  .navmenu a:focus i:hover {
    background-color: var(--accent-color);
    color: var(--contrast-color);
  }

  .navmenu a:hover,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .active i,
  .navmenu .active:focus i {
    background-color: var(--accent-color);
    color: var(--contrast-color);
    transform: rotate(180deg);
  }

  .navmenu .dropdown ul {
    position: static;
    display: none;
    z-index: 99;
    padding: 10px 0;
    margin: 10px 20px;
    background-color: var(--nav-dropdown-background-color);
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    box-shadow: none;
    transition: all 0.5s ease-in-out;
  }

  .navmenu .dropdown ul ul {
    background-color: rgba(33, 37, 41, 0.1);
  }

  .navmenu .dropdown>.dropdown-active {
    display: block;
    background-color: rgba(33, 37, 41, 0.03);
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .mobile-nav-toggle {
    color: #fff;
    position: absolute;
    font-size: 32px;
    top: 15px;
    right: 15px;
    margin-right: 0;
    z-index: 9999;
  }

  .mobile-nav-active .navmenu {
    position: fixed;
    overflow: hidden;
    inset: 0;
    background: rgba(33, 37, 41, 0.8);
    transition: 0.3s;
  }

  .mobile-nav-active .navmenu>ul {
    display: block;
  }
}

/*--------------------------------------------------------------
# Global Footer
--------------------------------------------------------------*/
.footer {
  --background-color: color-mix(in srgb, var(--default-color), transparent 95%);
  border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  color: var(--default-color);
  background-color: var(--background-color);
  font-size: 14px;
  padding: 40px 0;
  position: relative;
}

.footer .copyright p {
  margin-bottom: 0;
}

.footer .social-links {
  margin-top: 20px;
}

.footer .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
  font-size: 16px;
  color: color-mix(in srgb, var(--default-color), transparent 50%);
  margin: 0 5px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: var(--accent-color);
  border-color: var(--accent-color);
}

.footer .credits {
  margin-top: 10px;
  font-size: 13px;
  text-align: center;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  display: flex;
  position: fixed;
  inset: 0;
  width: 100%;
  height: 100vh;
  z-index: 99999;
}

#preloader:before,
#preloader:after {
  content: "";
  background-color: #000000;
  position: absolute;
  inset: 0;
  width: 50%;
  height: 100%;
  transition: all 0.3s ease 0s;
  z-index: -1;
}

#preloader:after {
  left: auto;
  right: 0;
}

#preloader .line {
  position: relative;
  overflow: hidden;
  margin: auto;
  width: 1px;
  height: 280px;
  transition: all 0.8s ease 0s;
}

#preloader .line:before {
  content: "";
  position: absolute;
  background-color: #ffffff;
  left: 0;
  top: 50%;
  width: 1px;
  height: 0%;
  transform: translateY(-50%);
  animation: lineincrease 1000ms ease-in-out 0s forwards;
}

#preloader .line:after {
  content: "";
  position: absolute;
  background-color: color-mix(in srgb, var(--default-color), transparent 95%);
  left: 0;
  top: 0;
  width: 1px;
  height: 100%;
  transform: translateY(-100%);
  animation: linemove 1200ms linear 0s infinite;
  animation-delay: 2000ms;
}

#preloader.loaded .line {
  opacity: 0;
  height: 100% !important;
}

#preloader.loaded .line:after {
  opacity: 0;
}

#preloader.loaded:before,
#preloader.loaded:after {
  animation: preloaderfinish 300ms ease-in-out 500ms forwards;
}

@keyframes lineincrease {
  0% {
    height: 0%;
  }

  100% {
    height: 100%;
  }
}

@keyframes linemove {
  0% {
    transform: translateY(200%);
  }

  100% {
    transform: translateY(-100%);
  }
}

@keyframes preloaderfinish {
  0% {
    width: 5 0%;
  }

  100% {
    width: 0%;
  }
}

/*--------------------------------------------------------------
# Scroll Top Button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: -15px;
  z-index: 99999;
  background-color: var(--accent-color);
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: var(--default-color);
  line-height: 0;
}

.scroll-top:hover {
  background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
  bottom: 15px;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Global Page Titles & Breadcrumbs
--------------------------------------------------------------*/
.page-title {
  color: var(--default-color);
  background-color: var(--background-color);
  position: relative;
}

.page-title .heading {
  padding: 80px 0;
  border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.page-title .heading h1 {
  font-size: 64px;
  font-weight: 400;
}

.page-title .heading .cta-btn {
  color: var(--default-color);
  background: var(--accent-color);
  font-weight: 400;
  font-size: 14px;
  display: inline-block;
  margin-top: 20px;
  padding: 12px 40px;
  border-radius: 4px;
  transition: 0.5s;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.page-title .heading .cta-btn:hover {
  background-color: color-mix(in srgb, var(--accent-color) 90%, white 10%);
}

.page-title nav {
  background-color: color-mix(in srgb, var(--default-color), transparent 90%);
  padding: 20px 0;
}

.page-title nav ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.page-title nav ol li+li {
  padding-left: 10px;
}

.page-title nav ol li+li::before {
  content: "/";
  display: inline-block;
  padding-right: 10px;
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}

/*--------------------------------------------------------------
# Global Sections
--------------------------------------------------------------*/
section,
.section {
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 60px 0;
  scroll-margin-top: 100px;
  overflow: clip;
}

@media (max-width: 1199px) {

  section,
  .section {
    scroll-margin-top: 66px;
  }
}

/*--------------------------------------------------------------
# Global Section Titles
--------------------------------------------------------------*/
.section-title {
  padding-bottom: 60px;
  position: relative;
}

.section-title h2 {
  font-size: 14px;
  font-weight: 400;
  padding: 0;
  line-height: 1px;
  margin: 0;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: color-mix(in srgb, var(--default-color), transparent 50%);
  position: relative;
  font-family: var(--default-font);
}

.section-title h2::after {
  content: "";
  width: 120px;
  height: 1px;
  display: inline-block;
  background: var(--accent-color);
  margin: 4px 10px;
}

.section-title p {
  color: var(--heading-color);
  margin: 0;
  font-size: 36px;
  font-weight: 400;
  font-family: var(--heading-font);
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  width: 100%;
  min-height: 30vh;
  position: relative;
  padding: 120px 0 60px 0;
  display: flex;
  align-items: center;
}

.hero h2 {
  margin: 0 0 10px 0;
  font-size: 38px;
  font-weight: 700;
}

.hero h2 .underlight {
  position: relative;
  z-index: 1;
  padding: 0 5px;
  display: inline-block;
}

.hero h2 .underlight:before {
  content: "";
  position: absolute;
  height: 50%;
  bottom: 0;
  left: 0;
  right: 0;
  background: var(--accent-color);
  z-index: -1;
}

.hero p {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  margin-bottom: 30px;
  font-size: 18px;
}

@media (max-width: 768px) {
  .hero h2 {
    font-size: 32px;
  }
}

.hero .btn-get-started {
  color: var(--contrast-color);
  background: var(--accent-color);
  font-weight: 400;
  font-size: 14px;
  display: inline-block;
  padding: 12px 40px;
  border-radius: 4px;
  transition: 0.5s;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.hero .btn-get-started:hover {
  background-color: color-mix(in srgb, var(--accent-color) 90%, white 10%);
}

/*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
.gallery .gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

.gallery .gallery-item img {
  transition: 0.3s;
}

.gallery .gallery-links {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: all ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.6);
  z-index: 3;
}

.gallery .gallery-links .preview-link,
.gallery .gallery-links .details-link {
  font-size: 20px;
  color: rgba(255, 255, 255, 0.5);
  transition: 0.3s;
  line-height: 1.2;
  margin: 30px 8px 0 8px;
}

.gallery .gallery-links .preview-link:hover,
.gallery .gallery-links .details-link:hover {
  color: #ffffff;
}

.gallery .gallery-links .details-link {
  font-size: 30px;
  line-height: 0;
}

.gallery .gallery-item:hover .gallery-links {
  opacity: 1;
}

.gallery .gallery-item:hover .preview-link,
.gallery .gallery-item:hover .details-link {
  margin-top: 0;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}

.glightbox-clean .gslide-description {
  background: #272727;
}

.glightbox-clean .gslide-title {
  color: rgba(255, 255, 255, 0.8);
  margin: 0;
}

/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
.about .content h2 {
  font-weight: 700;
  font-size: 24px;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.about .content ul strong {
  margin-right: 10px;
}

.about .content ul i {
  font-size: 16px;
  margin-right: 5px;
  color: var(--accent-color);
  line-height: 0;
}

/*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
.testimonials .testimonial-item {
  background-color: var(--surface-color);
  box-shadow: 0px 0 20px rgba(0, 0, 0, 0.1);
  box-sizing: content-box;
  padding: 30px;
  margin: 40px 30px;
  min-height: 320px;
  display: flex;
  flex-direction: column;
  text-align: center;
  transition: 0.3s;
}

.testimonials .testimonial-item .stars {
  margin-bottom: 15px;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50%;
  border: 4px solid var(--background-color);
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  margin: 0;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
}

.testimonials .swiper-wrapper {
  height: auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: color-mix(in srgb, var(--default-color), transparent 85%);
  opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--accent-color);
}

.testimonials .swiper-slide {
  opacity: 0.3;
}

@media (max-width: 1199px) {
  .testimonials .swiper-slide-active {
    opacity: 1;
  }

  .testimonials .swiper-pagination {
    margin-top: 0;
  }

  .testimonials .testimonial-item {
    margin: 40px 20px;
  }
}

@media (min-width: 1200px) {
  .testimonials .swiper-slide-next {
    opacity: 1;
    transform: scale(1.12);
  }
}

/*--------------------------------------------------------------
# Gallery Details Section
--------------------------------------------------------------*/
.gallery-details .portfolio-details-slider img {
  width: 100%;
}

.gallery-details .swiper-wrapper {
  height: auto;
}

.gallery-details .swiper-button-prev,
.gallery-details .swiper-button-next {
  width: 48px;
  height: 48px;
}

.gallery-details .swiper-button-prev:after,
.gallery-details .swiper-button-next:after {
  color: rgba(255, 255, 255, 0.8);
  background-color: rgba(0, 0, 0, 0.15);
  font-size: 24px;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.gallery-details .swiper-button-prev:hover:after,
.gallery-details .swiper-button-next:hover:after {
  background-color: rgba(0, 0, 0, 0.3);
}

@media (max-width: 575px) {

  .gallery-details .swiper-button-prev,
  .gallery-details .swiper-button-next {
    display: none;
  }
}

.gallery-details .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.gallery-details .swiper-pagination .swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background-color: color-mix(in srgb, var(--default-color), transparent 85%);
  opacity: 1;
}

.gallery-details .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--accent-color);
}

.gallery-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.gallery-details .portfolio-info h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: var(--accent-color);
  left: 0;
  bottom: 0;
}

.gallery-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.gallery-details .portfolio-info ul li {
  display: flex;
  flex-direction: column;
  padding-bottom: 15px;
}

.gallery-details .portfolio-info ul strong {
  text-transform: uppercase;
  font-weight: 400;
  color: color-mix(in srgb, var(--default-color), transparent 50%);
  font-size: 14px;
}

.gallery-details .portfolio-info .btn-visit {
  padding: 8px 40px;
  background: var(--accent-color);
  color: var(--contrast-color);
  border-radius: 50px;
  transition: 0.3s;
}

.gallery-details .portfolio-info .btn-visit:hover {
  background: color-mix(in srgb, var(--accent-color), transparent 20%);
}

.gallery-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.gallery-details .portfolio-description p {
  padding: 0;
}

.gallery-details .portfolio-description .testimonial-item {
  padding: 30px 30px 0 30px;
  position: relative;
  background: color-mix(in srgb, var(--default-color), transparent 97%);
  margin-bottom: 50px;
}

.gallery-details .portfolio-description .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50px;
  border: 6px solid var(--background-color);
  float: left;
  margin: 0 10px 0 0;
}

.gallery-details .portfolio-description .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 15px 0 5px 0;
  padding-top: 20px;
}

.gallery-details .portfolio-description .testimonial-item h4 {
  font-size: 14px;
  color: #6c757d;
  margin: 0;
}

.gallery-details .portfolio-description .testimonial-item .quote-icon-left,
.gallery-details .portfolio-description .testimonial-item .quote-icon-right {
  color: color-mix(in srgb, var(--accent-color), transparent 50%);
  font-size: 26px;
  line-height: 0;
}

.gallery-details .portfolio-description .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.gallery-details .portfolio-description .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.gallery-details .portfolio-description .testimonial-item p {
  font-style: italic;
  margin: 0 0 15px 0 0 0;
  padding: 0;
}

/*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/
.services .service-item {
  background-color: var(--surface-color);
  padding: 50px 30px;
  transition: all 0.3s ease-in-out;
  height: 100%;
  position: relative;
  z-index: 1;
}

.services .service-item:before {
  content: "";
  position: absolute;
  background: var(--accent-color);
  inset: 100% 0 0 0;
  transition: all 0.3s;
  z-index: -1;
}

.services .service-item .icon {
  margin-bottom: 15px;
}

.services .service-item .icon i {
  color: var(--default-color);
  background-color: var(--accent-color);
  font-size: 24px;
  width: 56px;
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  transition: ease-in-out 0.3s;
}

.services .service-item h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 20px;
  font-family: var(--default-font);
}

.services .service-item h4 a {
  color: var(--heading-color);
  transition: ease-in-out 0.3s;
}

.services .service-item p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
  transition: ease-in-out 0.3s;
}

.services .service-item:hover h4 a,
.services .service-item:hover p {
  color: var(--default-color);
}

.services .service-item:hover i {
  color: var(--accent-color);
  background-color: var(--default-color);
}

.services .service-item:hover:before {
  background: var(--accent-color);
  inset: 0;
  border-radius: 0px;
}

/*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/
.pricing .pricing-item {
  border-bottom: 1px dashed color-mix(in srgb, var(--default-color), transparent 60%);
  width: 100%;
  height: 100%;
  padding: 0 0 15px 0;
}

.pricing .pricing-item h3 {
  margin: 0;
  font-size: 20px;
  font-weight: 600;
}

.pricing .pricing-item h4 {
  margin: 0;
  font-size: 18px;
  color: var(--accent-color);
}

/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
.contact .info-wrap {
  margin-bottom: 30px;
}

.contact .info-item i {
  font-size: 20px;
  color: var(--accent-color);
  width: 56px;
  height: 56px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.3s ease-in-out;
  border-radius: 50%;
  border: 1px solid color-mix(in srgb, var(--accent-color), transparent 40%);
  margin-right: 15px;
}

.contact .info-item h3 {
  font-size: 18px;
  font-weight: 700;
  margin: 0 0 5px 0;
  font-family: var(--default-font);
}

.contact .info-item p {
  padding: 0;
  margin-bottom: 0;
  font-size: 14px;
}

.contact .info-item:hover i {
  background: var(--accent-color);
  color: var(--contrast-color);
}

@media (max-width: 575px) {
  .contact .php-email-form {
    padding: 20px;
  }
}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email],
.contact .php-email-form textarea {
  font-size: 14px;
  padding: 10px 15px;
  box-shadow: none;
  border-radius: 0;
  color: var(--default-color);
  background-color: var(--surface-color);
  border-color: color-mix(in srgb, var(--default-color), transparent 80%);
}

.contact .php-email-form input[type=text]:focus,
.contact .php-email-form input[type=email]:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--accent-color);
}

.contact .php-email-form input[type=text]::placeholder,
.contact .php-email-form input[type=email]::placeholder,
.contact .php-email-form textarea::placeholder {
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}

.contact .php-email-form button[type=submit] {
  color: var(--default-color);
  background: var(--accent-color);
  font-weight: 400;
  font-size: 14px;
  display: inline-block;
  margin-top: 20px;
  padding: 14px 40px;
  border: 0;
  border-radius: 4px;
  transition: 0.5s;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.contact .php-email-form button[type=submit]:hover {
  background-color: color-mix(in srgb, var(--accent-color) 90%, white 10%);
}

/*--------------------------------------------------------------
# Starter Section Section
--------------------------------------------------------------*/
.starter-section {
  /* Add your styles here */
}
</style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
         <img width="40" height="80" src="https://img.icons8.com/fluency/48/bitcoin-exchange.png" alt="bitcoin-exchange"/>
        <h1 class="sitename">mayaPay</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home<br></a></li>
          <li><a href="about.html">About Me</a></li>
          <li class="dropdown"><a href="gallery.html"><span>Portfolio Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="gallery.html">Solidity Games</a></li>
              <li><a href="gallery.html">Crypto Front end</a></li>
              <li><a href="gallery.html">Smart Contracts</a></li>
              <li><a href="gallery.html">Tests</a></li>
            </ul>
          </li>
          <li><a href="services.html">My Services</a></li>
          <li><a href="services.html">Coding Ground</a></li>
          <li><a href="services.html">Blog</a></li>
          <li><a href="contact.html">Contact Me</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://www.x.x.com/dautix_"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.github.com/devlans305"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin/in/evance-lans"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <h2><span>I'm </span><span>Evance Onyango,</span> a Professional<span> Software Engineer </span></h2>
            <p>Focused on building Decentralized Applications for the Blockchain</p>
            <a href="contact.html" class="btn-get-started">Am Available for Hire<br></a>
            <a href="#" class="btn-get-started">Send me ETH 😊<br></a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <p>Solidity Programming</p>
              <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
            <p>React Framework</p>
              <img src="https://elazizi.com/images/react-native-libraries.png" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
            <p>Ethereum Main net</p>
              <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
            <p>Solana</p>
              <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="" height="60%">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          

          <!-- <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
        

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-6.jpg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-7.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/gallery-8-2.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-8-2.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div> -->

          <!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Evance Portfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="https://www.x.x.com/dautix_"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.github.com/devlans305"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin/in/evance-lans"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
       
        
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
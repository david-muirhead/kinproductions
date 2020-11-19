// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'
import  './modernizr.js';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

import { TimelineMax } from 'gsap';

var target = $('#site-circle');

var circle = new TimelineMax();

circle.fromTo(target, 1, { scale: 10 }, { delay: .5, scale: 1, ease: 'Power1.out' })
circle.to(target, 1.5, { scale: .75 }, '-=.25')
circle.fromTo(target, 3, {scale: .75}, {
  scale: 1.2,
  repeat: -1,
  repeatDelay: .25,
  yoyo: true,
})

$('a.peachy').hover(function() {
  $(this).siblings('a').find('h2').addClass('greyscale');
}, function() {
  $(this).siblings('a').find('h2').removeClass('greyscale');
});

import 'slick-carousel';
$('.slider-wrapper').slick({
  dots: true,
  infinite: true,
  arrows: false,
  adaptiveHeight: false,
  speed: 500,
  fade: true,
  rows: 0,
  cssEase: 'linear',
});

$('#book-list div, #work-list div, #news-list div').slick({
  dots: false,
  autoplay: false,
  speed: 3000,
  autoplaySpeed: 0,
  infinite: true,
  arrows: false,
  variableWidth: true,
  adaptiveHeight: false,
});

var isMobile = false;
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  isMobile = true;
}

if(isMobile) {
  $('#book-list, #work-list, #news-list').on('click', function(e) {
     e.preventDefault();
     var para = $(this);
     if(para.hasClass('tapped')) {
       window.location = $(this).attr('href');
     } else {
      var listBG = $(this).attr('image-data');
      var listStyle = $(this).attr('bgstyle-data');
      var el = document.getElementsByClassName('image-back')[0];
      el.style.backgroundImage = 'url('+listBG+')';
      $('.image-back').addClass(listStyle);
      $(this).addClass('tapped');
     }
  });
} else {
  $('#book-list, #work-list, #news-list').hover(function () {
    var listBG = $(this).attr('image-data');
    var listStyle = $(this).attr('bgstyle-data');
    var el = document.getElementsByClassName('image-back')[0];
    el.style.backgroundImage = 'url('+listBG+')';
    $('.image-back').addClass(listStyle);
    $(this).find('div').slick('play');
  }, function () {
    var el = document.getElementsByClassName('image-back')[0];
    el.style.backgroundImage = 'none';
    $('.image-back').removeClass('bg-cover');
    $(this).find('div').slick('pause');
  });  
}

// $('#book-list .sliding, #work-list .sliding, #news-list .sliding').on('afterChange', function(){
//   var attachmentA = $(this).find( '.slick-current h2' ).attr( 'perm-data' );
//   var styledata = $(this).find( '.slick-current h2' ).attr( 'style-data' );
//   var el = document.getElementsByClassName('image-back')[0];
//   el.style.backgroundImage = 'url('+attachmentA+')';
//   $('.image-back').removeClass('bg-cover');
//   $('.image-back').addClass(styledata);
// });

// $('#book-list, #work-list, #news-list').hover(function () {
//   var targhettoImg = $(this).find('div .slick-current h2');
//   var attachmentA = targhettoImg.attr( 'perm-data' );
//   var styledata = targhettoImg.attr( 'style-data' );
//   var el = document.getElementsByClassName('image-back')[0];
//   el.style.backgroundImage = 'url('+attachmentA+')';
//   $('.image-back').removeClass('bg-cover');
//   $('.image-back').addClass(styledata);
// }, function () {
//   var el = document.getElementsByClassName('image-back')[0];
//   el.style.backgroundImage = 'url()';
// });

$('.archive-link').hover(function () {
  var permData= $( this ).attr( 'perm-data' );
  var elly = document.getElementsByClassName('image-change')[0];
  elly.style.backgroundImage = 'url('+permData+')';
}, function () {
  var elly = document.getElementsByClassName('image-change')[0];
  elly.style.backgroundImage = 'url()';
});

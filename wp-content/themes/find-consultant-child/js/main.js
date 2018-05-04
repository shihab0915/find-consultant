jQuery(document).ready(function($){

// FRONT PAGE POPULAR CATEGORIES
    var pcat = $('.popular-categories');
        pcat.waypoint(function() {
            pcat.addClass("animated zoomIn"); 
            pcat.removeClass("ini-pos"); 
        }, {offset: '60%'});
    
    
// FRONT PAGE HOW IT WORKS
    var hitw = $('.howitworks h1.headline'); // HEADLINE
        hitw.waypoint( function() {
            hitw.addClass("animated fadeInRight");
            hitw.removeClass("ini-pos");
    }, { offset: '70%'});
 
// FRONT PAGE HOW IT WORKS- FIND
    var find = $('.find');
    find.css('visibility', 'hidden');
    find.waypoint(function() {
        find.addClass("animated slideInUp");
        find.css('visibility', 'visible');
    }, {offset: '70%'});
    
// FRONT PAGE HOW IT WORKS- HIRE
    var hire = $('.hire');
    hire.css('visibility', 'hidden');
    hire.waypoint(function() {
        hire.addClass("animated slideInUp");
        hire.css('visibility', 'visible');
    }, {offset: '70%'});  
    
// FRONT PAGE HOW IT WORKS- WORK
    var work = $('.work');
    work.css('visibility', 'hidden');
    work.waypoint(function() {
        work.addClass("animated slideInUp");
        work.css('visibility', 'visible');
    }, {offset: '70%'}); 
    
// FRONT PAGE HOW IT WORKS- PAY
    var pay = $('.pay');
    pay.css('visibility', 'hidden');
    pay.waypoint(function() {
        pay.addClass("animated slideInUp");
        pay.css('visibility', 'visible');
    }, {offset: '70%'});
    
// FRONT PAGE HOW IT WORKS- POST A PROJECT BTN
    var post_prjt_btn = $('.front_page_post_prjt_btn');
    post_prjt_btn.css('visibility', 'hidden');
    post_prjt_btn.waypoint(function() {
        post_prjt_btn.addClass("animated bounceInLeft");
        post_prjt_btn.css('visibility', 'visible');
    }, {offset: '70%'});     
    
    
    
    
    
// Post a Project
    $("fieldset .collapse").removeClass("collapse");
    
    
});





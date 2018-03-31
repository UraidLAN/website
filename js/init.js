/*-----------------------------------------------------------------------------------
/*
/* Init JS
/*
-----------------------------------------------------------------------------------*/

jQuery(document).ready(function($) {

/*---------------------------------------------------- */
/* Preloader
------------------------------------------------------ */ 
  	$(window).load(function() {

   	// will first fade out the loading animation 
    	$("#status").fadeOut("slow"); 

    	// will fade out the whole DIV that covers the website. 
    	$("#preloader").delay(500).fadeOut("slow").remove();      

  	}) 

/*---------------------------------------------------- */
/* Menu
------------------------------------------------------ */  
  	var toggle_button = $("<a>", {                         
                        id: "toggle-btn", 
                        html : "Menu",
                        title: "Menu",
                        href : "#" } 
                        );
  	var nav_wrap = $('nav#nav-wrap')
  	var nav = $("ul#nav");  

  	/* id JS is enabled, remove the two a.menu-btns 
  	and dynamically prepend a.toggle-btn to #nav-wrap */
  	nav_wrap.find('a.menu-btn').remove(); 
  	nav_wrap.prepend(toggle_button); 

  	toggle_button.on("click", function(e) {
   	e.preventDefault();
    	nav.slideToggle("fast");     
  	});

  	if (toggle_button.is(':visible')) nav.addClass('mobile');
  	$(window).resize(function(){
   	if (toggle_button.is(':visible')) nav.addClass('mobile');
    	else nav.removeClass('mobile');
  	});

  	$('ul#nav li a').on("click", function(){      
   	if (nav.hasClass('mobile')) nav.fadeOut('fast');      
  	});


/*----------------------------------------------------*/
/* Backstretch Settings
------------------------------------------------------ */

	$("#intro").backstretch("images/header-background.jpg");


/*----------------------------------------------------*/
/*	Back To Top Button
/*----------------------------------------------------*/
	var pxShow = 300; //height on which the button will show
	var fadeInTime = 400; //how slow/fast you want the button to show
	var fadeOutTime = 400; //how slow/fast you want the button to hide
	var scrollSpeed = 300; //how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

   // Show or hide the sticky footer button
	jQuery(window).scroll(function() {

		if (jQuery(window).scrollTop() >= pxShow) {
			jQuery("#go-top").fadeIn(fadeInTime);
		} else {
			jQuery("#go-top").fadeOut(fadeOutTime);
		}

	});


/*----------------------------------------------------*/
/*  Placeholder Plugin Settings
------------------------------------------------------ */  	 
	$('input, textarea').placeholder()


/*----------------------------------------------------*/
/* FitText Settings
------------------------------------------------------ */
   setTimeout( function() {

	   $('h1.responsive-headline').fitText(1, { minFontSize: '40px', maxFontSize: '90px' });
	   
   }, 100);

/*----------------------------------------------------*/
/* Final Countdown Settings
------------------------------------------------------ */
	var finalDate = '2018/4/6 18:00:00';

	var dayName = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday","Saturday");
	var monName = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	var dateEvent = new Date(finalDate);
	var dTime = (dateEvent.getHours()>12?dateEvent.getHours()-12:dateEvent.getHours()) + " " + (dateEvent.getHours()>12?"PM":"AM")
	var dateEventString = dTime + ", " + dayName[dateEvent.getDay()] + " " + monName[dateEvent.getMonth()] + " " + dateEvent.getDate();
	document.getElementById("dateEvent").innerHTML = dateEventString;

	$('div#counter').countdown(finalDate)
   	.on('update.countdown', function(event) {

   		$(this).html(event.strftime('<span>%D <em>days</em></span>' + 
   										 	 '<span>%H <em>hours</em></span>' + 
   										 	 '<span>%M <em>minutes</em></span>' +
   										 	 '<span>%S <em>seconds</em></span>'));

   });  
	

/*----------------------------------------------------*/
/*	gmaps settings
------------------------------------------------------*/

   

   // main directions
	var map;
   	var latitude =  -34.9589100;                    //users current
	var longitude = 138.7464120;                 //location
	var coords = new google.maps.LatLng(latitude, longitude); //Creates variable for map coordinates
	var mapOptions = {
		el: '#map',
		lat: -34.9589100, 
		lng: 138.7464120,		
		zoom: 14,  //Sets zoom level (0-21)
		center: coords, //zoom in on users location
		panControl : false,
		scrollwheel: false,
		maxZoom: 18,
		mapTypeControl: true,
		mapTypeControlOptions: {
		  style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
		  position: google.maps.ControlPosition.TOP_CENTER
		},
		zoomControl: true,
		zoomControlOptions: {
		  position: google.maps.ControlPosition.LEFT_TOP
		},
		scaleControl: true,
		streetViewControl: true,
		streetViewControlOptions: {
		  position: google.maps.ControlPosition.LEFT_TOP
		},
		fullscreenControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP //sets type of map Options:ROADMAP, SATELLITE, HYBRID, TERRIAN
		};
			 
      map = new google.maps.Map( //creates Map variable
			document.getElementById("map"), mapOptions //Creates a new map using the passed optional parameters in the mapOptions parameter.
			);
	
	var marker = new google.maps.Marker({
    position: coords,
    title:"UraidLAN; 1221 Greenhill Rd, Uraidla 5142, SA",
    content: '<i class="fa fa-map-marker"></i>'
	});
    marker.setMap(map);
	
	var mapStyles = [
	   {
	      featureType: "road",
	      elementType: "geometry",
	      stylers: [{
	         lightness: 100
	      }, {
	         visibility: "simplified"
	      }]
	   }, {
	      featureType: "road",
	      elementType: "labels",
	      stylers: [{
	         visibility: "off"
	      }]
	   }
	];
	
	map.setOptions({
	   styles: mapStyles
	});
	
	/*map.drawOverlay({
	   lat: map.getCenter().lat(),
	   lng: map.getCenter().lng(),
	   content: '<i class="fa fa-map-marker"></i>',
	   verticalAlign: 'top',
	   horizontalAlign: 'center'
	});*/
	
	
if (navigator.geolocation) { //Checks if browser supports geolocation
   navigator.geolocation.getCurrentPosition(function (position) {                                                              //This gets the
     var latitude = position.coords.latitude;                    //users current
     var longitude = position.coords.longitude;                 //location
     var coords = new google.maps.LatLng(latitude, longitude); //Creates variable for map coordinates
     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();
     map = new google.maps.Map( /*creates Map variable*/ document.getElementById("map"), mapOptions /*Creates a new map using the passed optional parameters in the mapOptions parameter.*/);
     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel'));
     var request = {
       origin: coords,
       destination: '1221 Greenhill Rd, Uraidla 5142, SA',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function (response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   });
 }	
	

/*----------------------------------------------------*/
/* Smooth Scrolling
------------------------------------------------------ */

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});


/*----------------------------------------------------*/
/* Highlight the current section in the navigation bar
------------------------------------------------------*/

	var sections = $("section");
	var navigation_links = $("#nav-wrap a");

	sections.waypoint({

      handler: function(event, direction) {

		   var active_section;

			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();

			var active_link = $('#nav-wrap a[href="#' + active_section.attr("id") + '"]');

         navigation_links.parent().removeClass("current");
			active_link.parent().addClass("current");

		},
		offset: '35%'

	});


/*----------------------------------------------------*/
/*	Make sure that #intro height is
/* equal to the browser height.
------------------------------------------------------ */

   $('#intro, #map').css({ 'height': $(window).height() });
   $(window).on('resize', function() {

        $('#intro, #map').css({ 'height': $(window).height() });
        $('body').css({ 'width': $(window).width() })

        $("#intro").backstretch("images/header-background.jpg");
   });


});
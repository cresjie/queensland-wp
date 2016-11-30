<?php
/*
	Template Name: Home
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
               <title>VICTORIA COURT Official Site – Feel the Distinction : Home</title>
              
               <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/home/shadowbox.css">
               <script type="text/javascript" src="<?=get_template_directory_uri()?>/js/home/shadowbox.js"></script>
               <script type="text/javascript">
                  Shadowbox.init();
                  //modal
               </script>
               <link rel="shortcut icon" href="/VC_FAVICON.ico">
               <link rel="stylesheet" href="http://victoriacourt.biz/css/normalize.css">
               <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/home/home.css">
               <script src="http://victoriacourt.biz/js/vendor/modernizr-2.6.2.min.js"></script>
               
            </head>
            <body id="splash2">
               <div id="loader">
                  <p>Preparing your room ...</p>
               </div>
               <div id="wrap">
                  <div id="layer_logo">
                     <img src="<?=get_template_directory_uri()?>/images/splash/logo.png" alt="" />
                  </div>
                  <div id="layer_model">
                     <img src="<?=get_template_directory_uri()?>/images/splash/model.png" alt="" />
                  </div>
                  <div id="layer_header">
                     <img src="<?=get_template_directory_uri()?>/images/splash/whats.png" alt="" id="whats" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/your.png" alt="" id="your" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/sweetescape.png" alt="" id="sweetescape" />
                  </div>
                  <!--
                  <div id="layer_location">
                     <div id="navi">
                        <a href="http://victoriacourt.biz/location/view/15-16-14-13/pasig" id="link1">Pasig</a>
                        <span>&bull;</span>
                        <a href="http://victoriacourt.biz/location/view/5-12/caloocan" id="link2">Caloocan</a>
                        <span>&bull;</span>
                        <a href="http://victoriacourt.biz/location/view/8/las_pinas" id="link3">Las Pinas</a>
                        <span>&bull;</span>
                        <a href="http://victoriacourt.biz/location/view/10/malabon" id="link4">Malabon</a>
                        <span>&bull;</span>
                        <a href="http://victoriacourt.biz/location/view/17/san_fernando" id="link5">San Fernando</a>
                        <span>&bull;</span>
                        <a href="http://victoriacourt.biz/location/view/7/gil_puyat" id="link6">Gil Puyat, Pasay</a>
                        <span>&bull;</span>
                        <a href="http://victoriacourt.biz/location/view/6/cuneta" id="link7">Cuneta, Pasay</a>
                        <span>&bull;</span>
                        <a href="http://victoriacourt.biz/location/view/11/malate" id="link8">Malate</a>
                     </div>
                  </div>
                  -->
                  <div id="layer_location">
                     <ul>
                        <li><a href="#">asdf</a></li>
                        <li><a href="#">asdf</a></li>
                        <li><a href="#">asdf</a></li>
                        <li><a href="#">asdf</a></li>
                     </ul>
                  </div>
                  <div id="layer_a" class="bg">
                     <img src="<?=get_template_directory_uri()?>/images/splash/layer-1.png" alt="" class="bg_image_on" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/layer-1-off.png" alt="" class="bg_image_off" />
                  </div>
                  <div id="layer_b" class="bg">
                     <img src="<?=get_template_directory_uri()?>/images/splash/layer-2.png" alt="" class="bg_image_on" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/layer-2-off.png" alt="" class="bg_image_off" />
                  </div>
                  <div id="layer_c" class="bg">
                     <img src="<?=get_template_directory_uri()?>/images/splash/layer-3.png" alt="" class="bg_image_off" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/layer-3-off.png" alt="" class="bg_image_on" />
                  </div>
                  <div id="layer_j" class="bg">
                     <img src="<?=get_template_directory_uri()?>/images/splash/j.png" alt="" class="bg_image_on" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/j-off.png" alt="" class="bg_image_off" />
                  </div>
                  <div id="layer_k" class="bg">
                     <img src="<?=get_template_directory_uri()?>/images/splash/k.png" alt="" class="bg_image_on" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/k-off.png" alt="" class="bg_image_off" />
                  </div>
                  <div id="layer_o" class="bg">
                     <img src="<?=get_template_directory_uri()?>/images/splash/o.png" alt="" class="bg_image_on" />
                     <img src="<?=get_template_directory_uri()?>/images/splash/o-off.png" alt="" class="bg_image_off" />
                  </div>
               </div>
               <!-- wrap -->
               <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
               <script>window.jQuery || document.write('<script src="http://victoriacourt.biz/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
               <script src="http://victoriacourt.biz/js/main.js"></script>
               <script src="http://victoriacourt.biz/js/ipad.js"></script>
               <script type="text/javascript">
                  if($('#splash2').length) { 
                  	function animate_undo() {
                  		$('#layer_a img:eq(0)').hide();
                  		$('#layer_a img:eq(1)').show();
                  		
                  		$('#layer_b img:eq(0)').hide();
                  		$('#layer_b img:eq(1)').show();
                  		
                  		$('#layer_c img:eq(1)').hide();
                  		$('#layer_c img:eq(0)').show();
                  		
                  		$('#layer_j img:eq(0)').hide();
                  		$('#layer_j img:eq(1)').show();
                  		
                  		$('#layer_k img:eq(0)').hide();
                  		$('#layer_k img:eq(1)').show();
                  		
                  		$('#layer_o img:eq(0)').hide();
                  		$('#layer_o img:eq(1)').show();
                  	}
                  
                  	function animate_layer_a() {
                  		$('#layer_a img:eq(0)').show();
                  		$('#layer_a img:eq(1)').hide();
                  	}
                  	
                  	function animate_layer_b() {
                  		$('#layer_b img:eq(0)').show();
                  		$('#layer_b img:eq(1)').hide();
                  	}
                  	
                  	function animate_layer_c() {
                  		//$('#layer_c img:eq(0)').show();
                  		//$('#layer_c img:eq(1)').hide();
                  	}
                  	
                  	function animate_layer_j() {
                  		$('#layer_j img:eq(0)').show();
                  		$('#layer_j img:eq(1)').hide();
                  	}
                  	
                  	function animate_layer_k() {
                  		$('#layer_k img:eq(0)').show();
                  		$('#layer_k img:eq(1)').hide();
                  	}
                  	
                  	function animate_layer_o() {
                  		$('#layer_o img:eq(0)').show();
                  		$('#layer_o img:eq(1)').hide();
                  	}
                  	
                  	function intro() {
                  		$('#layer_logo, #layer_model, #layer_header, #layer_location, #layer_a, #layer_b, #layer_c, #layer_j, #layer_k, #layer_o').hide();
                  		
                  		$('#layer_logo, #layer_header, #layer_a, #layer_b, #layer_c, #layer_j, #layer_k, #layer_o, #layer_model, #layer_location').show();
                  		
                  		$('#layer_model').css({'right':'-100px'});
                  		$('#layer_location').css({'top':'450px'});
                  		$('#layer_logo, #whats, #your, #sweetescape, #layer_a, #layer_b, #layer_c, #layer_j, #layer_k, #layer_o, #layer_model, #layer_location').css({'opacity':0});		
                  		
                  		var time = 50;
                  		
                  		setTimeout(function() {
                  			for(var rep = 0; rep <= 33; rep++) {			
                  				$('#layer_logo').animate({'opacity':rep%2}, 1);
                  				setTimeout(function() {}, time);			
                  				time = time + 50;
                  			}
                  		}, 1000);
                  		
                  		setTimeout(function() {
                  			for(var rep = 0; rep <= 73; rep++) {			
                  				$('#whats').animate({'opacity':rep%2}, 1);
                  				setTimeout(function() {}, time);			
                  				time = time + 50;
                  			}
                  		}, 2000);
                  		
                  		setTimeout(function() {
                  			for(var rep = 0; rep <= 83; rep++) {			
                  				$('#your').animate({'opacity':rep%2}, 1);
                  				setTimeout(function() {}, time);			
                  				time = time + 50;
                  			}
                  		}, 2100);
                  		
                  		setTimeout(function() {
                  			for(var rep = 0; rep <= 43; rep++) {			
                  				$('#sweetescape').animate({'opacity':rep%2}, 1);
                  				setTimeout(function() {}, time);			
                  				time = time + 50;
                  			}
                  		}, 2200);
                  		
                  		
                  		setTimeout(function() { $('#layer_a').animate({'opacity':1}, 1000); }, 3000);
                  		setTimeout(function() { $('#layer_b').animate({'opacity':1}, 1000); }, 3200);
                  		setTimeout(function() { $('#layer_c').animate({'opacity':1}, 1000); }, 3500);
                  		setTimeout(function() { $('#layer_j').animate({'opacity':1}, 1000); }, 3500);
                  		setTimeout(function() { $('#layer_k').animate({'opacity':1}, 1000); }, 3500);
                  		setTimeout(function() { $('#layer_o').animate({'opacity':1}, 1000); }, 3500);
                  		setTimeout(function() { $('#layer_model').animate({'opacity':1, 'right':'0'}, 1000); }, 3500);
                  		setTimeout(function() { $('#layer_location').animate({'opacity':1, 'top':'390px'}, 700); }, 4000);
                  		
                  	}
                  	
                  	
                  	$('#loader img').css({'opacity':0});
                  	var time = 50;
                  	setInterval(function(){ 
                  		for(var rep = 0; rep <= 33; rep++) {			
                  			$('#loader img').animate({'opacity':(rep%2)}, 1);
                  			setTimeout(function() {}, time);			
                  			time = time + 50;
                  		}	
                  	}, 3000);
                  	
                  	$(window).load(function() {
                  		$('#loader')
                  			.animate({'top':'45%', 'opacity':'0'},
                  				function() { $(this).css({'display':'none'}); });
                  		
                  		$('#wrap').css({'display':'block'});
                  		
                  		
                  		$('#navi a').hover(function() {
                  			var rand = Math.floor((Math.random()*6)+1);
                  			animate_undo();			
                  			$(this).stop();			
                  			switch(rand) {
                  				case 1:
                  					animate_layer_a();
                  				break;
                  				
                  				case 2:
                  					animate_layer_b();
                  				break;
                  				
                  				case 3:
                  					animate_layer_j();
                  					animate_layer_k();
                  					animate_layer_o();
                  				break;
                  				
                  				case 4:
                  					animate_layer_j();
                  					animate_layer_o();
                  				break;
                  				
                  				case 5:
                  					animate_layer_k();
                  				break;
                  				
                  				case 6:
                  					animate_layer_o();
                  				break;
                  			}
                  			
                  			
                  			
                  		}, function() {
                  			animate_undo();			
                  		});
                  		
                  		$('#navi a').click(function() {
                  			$('#navi a').unbind('hover');
                  			var nav_link = $(this).attr('href');
                  			setTimeout(function() { window.location.href = nav_link; }, 1500);
                  			
                  			$('#layer_a img:eq(1)').animate({'opacity':0},
                  				function() { $(this).hide(); });
                  			$('#layer_b img:eq(1)').animate({'opacity':0},
                  				function() { $(this).hide(); });
                  			//$('#layer_c img:eq(1)').animate({'opacity':0},	function() { $(this).hide(); });
                  			$('#layer_j img:eq(1)').animate({'opacity':0},
                  				function() { $(this).hide(); });
                  			$('#layer_k img:eq(1)').animate({'opacity':0},
                  				function() { $(this).hide(); });
                  			$('#layer_o img:eq(1)').animate({'opacity':0},
                  				function() { $(this).hide(); });
                  			
                  			
                  			$('#layer_a img:eq(0)')
                  				.show()
                  				.css({'opacity':0})
                  				.animate({'opacity':1});
                  			$('#layer_b img:eq(0)')
                  				.show()
                  				.css({'opacity':0})
                  				.animate({'opacity':1});
                  			//$('#layer_c img:eq(0)')
                  			//	.show()
                  			//	.css({'opacity':0})
                  			//	.animate({'opacity':1});
                  			$('#layer_j img:eq(0)')
                  				.show()
                  				.css({'opacity':0})
                  				.animate({'opacity':1});
                  			$('#layer_k img:eq(0)')
                  				.show()
                  				.css({'opacity':0})
                  				.animate({'opacity':1});
                  			$('#layer_o img:eq(0)')
                  				.show()
                  				.css({'opacity':0})
                  				.animate({'opacity':1});
                  				
                  			return false;
                  		});
                  		
                  		intro();
                  		
                  	});
                  	
                  	
                  }
               </script>
            </body>
         </html>
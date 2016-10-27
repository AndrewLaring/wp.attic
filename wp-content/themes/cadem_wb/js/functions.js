// If JavaScript is enabled remove 'no-js' class and give 'js' class
jQuery('html').removeClass('no-js').addClass('js');

// Add .osx class to html if on Os/x
if ( navigator.appVersion.indexOf("Mac")!=-1 ) 
	jQuery('html').addClass('osx');

// When DOM is fully loaded
jQuery(document).ready(function($) {

/* --------------------------------------------------------	
	 External Links
   --------------------------------------------------------	*/	

	(function() {
	    $(window).load(function() {
			$('a[rel=external]').attr('target','_blank');	
		});                                            
	})();  

/* --------------------------------------------------------	
	 Tooltips
   --------------------------------------------------------	*/	

	(function() {
    $('body').tooltip({
        delay: { show: 300, hide: 0 },
        selector: '[data-toggle=tooltip]:not([disabled])'
    });
  })(); 
  
/* --------------------------------------------------------	
	 Back To The Top Button
   --------------------------------------------------------	*/	

	(function() {   
  		$('<a id="back-to-the-top"></a>').appendTo($('body'));

			$(window).scroll(function() {
				if($(this).scrollTop() != 0) {
					$('#back-to-the-top').fadeIn();	
				} else {
					$('#back-to-the-top').fadeOut();
				}
			});
			
			$('#back-to-the-top').click(function() {
				$('body,html').animate({scrollTop:0},800);
			});	        
	})();  
  
/* --------------------------------------------------------	
	 Responsive Navigation
   --------------------------------------------------------	*/	
	
	(function() {

		var $mainNav    = $('.navbar .nav'),
			responsiveNav = '';
		// Responsive nav
		$mainNav.find('li').each(function() {
			var $this   = $(this),
				$link = $this.children('a'),
				depth   = $this.parents('ul').length - 1,
				indent  = '';

			if( depth ) {
				while( depth > 0 ) {
					indent += ' - ';
					depth--;
				}
			}

			if ($link.text())
				responsiveNav += '<option ' + ($this.hasClass('active') ? 'selected="selected"':'') + ' value="' + $link.attr('href') + '">' + indent + ' ' + $link.text() + '</option>';

		}).end().after('<select class="nav-responsive">' + responsiveNav + '</select>');

		$('.nav-responsive').on('change', function() {
			window.location = $(this).val();
		});
			
	})();      

/* --------------------------------------------------------	
	 Portfolio 
   --------------------------------------------------------	*/	

   (function() {
		$(window).load(function(){
			// container
			var $container = $('#portfolio-items');
			function filter_projects(tag)
			{
			  // filter projects
			  $container.isotope({ filter: tag });
			  // clear active class
			  $('li.active').removeClass('active');
			  // add active class to filter selector
			  $('#portfolio-filter').find("[data-filter='" + tag + "']").parent().addClass('active');
			  // update location hash
			  if (tag!='*')
				window.location.hash=tag.replace('.','');
			  if (tag=='*')
			  	window.location.hash='';
			}
			if ($container.length) {
				// conver data-tags to classes
				$('.project').each(function(){
					$this = $(this);
					var tags = $this.data('tags');
					if (tags) {
						var classes = tags.split(',');
						for (var i = classes.length - 1; i >= 0; i--) {
							$this.addClass(classes[i]);
						};
					}
				})
				// initialize isotope
				$container.isotope({
				  // options...
				  itemSelector : '.project',
				  layoutMode   : 'fitRows'
				});
				// filter items
				$('#portfolio-filter li a').click(function(){
					var selector = $(this).attr('data-filter');
					filter_projects(selector);
					return false;
				});
				// filter tags if location.has is available. e.g. http://example.com/work.html#design will filter projects within this category
				if (window.location.hash!='')
				{
					filter_projects( '.' + window.location.hash.replace('#','') );
				}
			}
		})

	})();

/* --------------------------------------------------------	
	 Newsletter
   --------------------------------------------------------	*/	

	$('#submit').click(function() {

    $('#waiting').animate({
      opacity: 1,
      height: 'toggle'  
    }, 500, function() {
      // Animation complete.
    });    
    $('#waiting').delay(500);
    
    $('#message').animate({
      opacity: 1,
      height: 'toggle'  
    }, 500, function() {
      // Animation complete.
    });

		$.ajax({
			type : 'POST',
			url : 'php/newsletter.php',
			dataType : 'json',
			data: {
				email : $('#email').val()
			},
			success : function(data){
        $('#waiting').animate({
          opacity: 1,
          height: 'toggle'  
        }, 500, function() {
          // Animation complete.
        });
        
				$('#message').removeClass().addClass((data.error === true) ? 'error' : 'success')
					.text(data.msg).show(500);
        $('#message').delay(2000);
        $('#message').animate({
          opacity: 0,
          height: 'toggle'  
        }, 500, function() {
          // Animation complete.
        });

				if (data.error === true){}  
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
        $('#waiting').animate({
          opacity: 1,
          height: 'toggle'  
        }, 500, function() {
          // Animation complete.
        });
				$('#message').removeClass().addClass('error')
					.text('There was an error.').show(500);
			}
		});
		
		return false;
	});

/* --------------------------------------------------------	
	 Flex Initialize
   --------------------------------------------------------	*/	

$(window).load(function() {
  $('.slider1').flexslider({ 
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }, 
  });

  $('.slider2').flexslider({
    animation: "slide",
    slideshow: false,
    animationLoop: false    
  });
});
  
});
 
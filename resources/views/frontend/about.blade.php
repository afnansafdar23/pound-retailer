@extends('frontend.layout.app')
@section('customCss')
<link rel="stylesheet" href="{{asset('assets/front end/css/index.css')}}">
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 contact-banner">
                <h1>About Us</h1>
                <h5 class="text-white"><a href="{{Route('web.index')}}">Home</a> > About</h5>
            </div>
        </div>
    </div>

    <!-- START:: About Responsive -->
    <section class="container home-about mb-4 mt-4">
        <div class="row">
            <!-- Image -->
            <div class="col-lg-6"><img class="rounded-2 img-fluid" src="{{asset('assets/front end/image1-2.jpg')}}" alt="about-image"></div>
            <!-- Text -->
            <div class="col-lg-6 overflow-hidden">
            <h2 class="text-center">Company</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis provident impedit quis pariatur
                doloremque at corporis maiores hic exercitationem ut? Expedita sapiente mollitia, qui perspiciatis quas illo
                ducimus numquam non est rerum, repellat inventore minus! Culpa quisquam iure veniam laudantium dicta omnis,
                obcaecati impedit ipsam asperiores qui, nobis nihil! Iusto deserunt possimus itaque impedit tempora
                explicabo eveniet est? Hic dolore iste fugit, architecto quasi tempore quaerat ex nesciunt ad, quibusdam rem
                qui, dignissimos eos! Quae, explicabo, provident sunt repellendus pariatur rem iste vel, asperiores placeat
                suscipit possimus. Alias officia, hic pariatur assumenda, atque deserunt iure accusamus laudantium ab,
                explicabo iusto!
            </p>
            </div>
            <!-- END -->
        </div>
    </section>
    <!-- END:: About Responsive -->

    <section class="container mb-4">
        <h1 class="text-center">About Us</h1>
        <p> 
            Welcome to <b>Pound kindom</b> where we share information related to e-commerce retailer . We're dedicated to
            providing you the very best information and knowledge of the above mentioned topics. About Us Page Generator</a>
        </p>

        <p>
            We hope you found all of the information on <b>Pound kindom</b> helpful, as we love to share them with you.
        </p>

        <p>
            If you require any more information or have any questions about our site, please feel free to contact us by email
            at.
        </p>
    </section> 

    <!-- START:: Counter -->
    <div class="container mt-3 mb-4">
    
    <div class="col text-center mb-4">
		<h2>Counter Heading</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
	</div>
	
    <div class="row">	
	</div>
		<div class="row text-center">
	        <div class="col">
	        <div class="counter">
      <i class="fa fa-code fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
       <p class="count-text ">Our Customer</p>
    </div>
	        </div>
              <div class="col">
               <div class="counter">
      <i class="fa fa-coffee fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
      <p class="count-text ">Happy Clients</p>
    </div>
              </div>
              <div class="col">
                  <div class="counter">
      <i class="fa fa-lightbulb-o fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
      <p class="count-text ">Project Complete</p>
    </div></div>
              <div class="col">
              <div class="counter">
      <i class="fa fa-bug fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
      <p class="count-text ">Coffee With Clients</p>
    </div>
              </div>
         </div>
</div>
    <!-- END:: Counter -->
@endsection
@section('custromJs')
<script>
    (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>
@endsection

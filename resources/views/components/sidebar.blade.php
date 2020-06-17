<div class="hidden lg:block w-1/4 mt-8 pb-8 px-4 ">
	<a href="/" target="_blank">
		<img src="{{ asset('images/banner.jpg') }}">
	</a>

	{{ $slot }}
	
	<div class="px-8 my-2">
		<script>var fm = "EUR";var to = "USD";var tz = "1";var sz = "1x1";var lg = "en";var st = "primary";var lr = "0";var rd = "0";</script><a href="https://currencyrate.today/converter-widget" title="Currency Converter"><script src="//currencyrate.today/converter"></script></a><div style="font-size:.8em;"><a href="https://currencyrate.today">Currency Converter</a></div>

		<a class="weatherwidget-io mt-4" href="https://forecast7.com/en/44d0221d01/serbia/" data-label_1="Belgrade" data-label_2="Serbia" data-theme="original" >Belgrade Serbia</a>
			<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
			</script>
	</div>
</div>
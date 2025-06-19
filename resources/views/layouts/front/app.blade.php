<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en" >
   <![endif]-->
   <!--[if gt IE 8]><!-->
   <html class="no-js" lang="en" >
      <!--<![endif]-->
      @include('layouts.front.head')
      <body>
         <div style="background:url({{asset('front/')}}images/with_trn.png) repeat left top; position:fixed; width:100%; height:100%; left:0px; top:0px; z-index:999999;" id="loader">
            <div style="position:absolute; left:0px; top:0px; width:100%; height:100%; background:url({{asset('front')}}/images/ajax-loader.gif) no-repeat center center;"></div>
         </div>
         <script>
            $().ready(function()
            	{
            		$("#frmsearch").validate();
            	});
         </script>
         @include('layouts.front.header')
         <style type="text/css">
            .text {
            text-align: center;
            font-size: 24px;
            /* Add other text styling properties as needed */
            }
         </style>
         @yield('content')

         @include('layouts.front.footer')
         <div class="backToTop"></div>
         <!--JavaScript
            ================================================== -->
         <script src="{{asset('front')}}/js/select2/select2.js"></script>
         <script src="{{asset('front')}}/js/custom.js"></script>
         <script src="{{asset('front')}}/vendor/pnotify/pnotify.custom.js"></script>
         <script language="javascript" type="text/javascript">
            $(window).load(function() {
            $('#loader').hide();
            });
         </script>
         <script>
            $().ready(function()
            {
            	$('.success2').delay(8000).fadeOut();
            	$('.failure').delay(8000).fadeOut();
            });
         </script>
      </body>
   </html>

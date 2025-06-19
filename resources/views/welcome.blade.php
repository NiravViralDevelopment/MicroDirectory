<html class="no-js" lang="en" >
   <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <link rel="shortcut icon" href="{{asset('front/')}}favicon.ico">
      <title>ATOM Directory :: A Talent Management directory for fresh actors and models</title>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <link href="{{asset('front/')}}/css/select2.css" rel="stylesheet">
      <link href="{{asset('front/')}}/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{asset('front/')}}/css/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <script src="{{asset('front/')}}/js/custom.modernizr.js" type="text/javascript" ></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="{{asset('front/')}}/js/jquery.validate.js"></script>
      <script>
         window.jQuery || document.write('<script src="{{asset('front/')}}/js/jquery.js"><\/script>')
      </script>
      <script src="{{asset('front/')}}/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div style="background:url({{asset('front/')}}/images/with_trn.png) repeat left top; position:fixed; width:100%; height:100%; left:0px; top:0px; z-index:999999;" id="loader">
         <div style="position:absolute; left:0px; top:0px; width:100%; height:100%; background:url({{asset('front/')}}/images/ajax-loader.gif) no-repeat center center;"></div>
      </div>
      <script>
         $().ready(function()
         {
         $("#frmsearch").validate();
         });
      </script>
      <div class="top-section">
      <div class="container listing-block">
         <div class="ipad_center topright">
            <div class="login_top">
               <ul>
                  <li><a href="#"><span class="glyphicon glyphicon-phone"></span> &nbsp;  Whatsapp : +971 522656679</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> &nbsp; Call Us : +971 522656679</a></li>
                  <li><a href="mailto:sales@dbuguae.com"><span class="glyphicon glyphicon-envelope"></span>&nbsp; Email: info@atomdirectory.com</a></li>
                  <li class="green">
                     <a href="{{ route('register_form')}}" class="reg">Registration</a> <span>/</span>
                     <a href="{{ route('login')}}">Log in</a>
                  </li>
               </ul>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <div class="logo"><img src="{{asset('front/')}}/img/pathway.png" alt="" class="img-responisve dib" /></div>
            </div>
         </div>
         <div class="row search-section">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center block-1">
               <div class="bannerBtn" style="display: flex; align-items: center; gap: 5px;">
                <a href="{{ route('register_form') }}" class="log btn_login">Registration</a>

                <a href="{{ route('login') }}" class="log btn_login">Log in</a>
            </div>

			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


               <form action="{{route('search.directory')}}" method="get" name="frmsearch" id="frmsearch" enctype="multipart/form-data" class="form-inline" method="post" accept-charset="utf-8">
                  <div class="form-group">
                     <select id="search_name" name="role_name" class="form-control myval required">
                        <option value="">You are searching for...</option>
                        @foreach($roles as $role)
                        <option value="{{$role->name}}">{{$role->name}}</option>
                        @endforeach
                     </select>
                     <!-- <input type="text" id="search_name" name="search_name" list="searchcategory" class="form-control" placeholder="You are searching for..." autocomplete="off"> -->
                  </div>
                  <div class="form-group has-success has-feedback">
                     <select id="search_location" name="search_location" class="form-control myval">
                        <option value="">Locations</option>
                        @foreach($state as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                     </select>
                     <!-- <input type="text" id="search_location" name="search_location" list="searchlocation" class="form-control" placeholder="Locations" autocomplete="off"> -->
                     <!-- <span class="glyphicon glyphicon-ok form-control-feedback"></span> -->
                  </div>
                  <button type="submit" class="btn">
                  <span class="glyphicon glyphicon-search"></span>
                  </button>
               </form>
            </div>
            <br /><br /><br /><br /><br />
         </div>
      </div>
      <div class="category">
         <div class="popular-searches-slider-container">
            <div class="container">
               @foreach($roles as $role)
               <div class="rsThumb">
                  <div class="icon-container">
                     <a href = "{{route('directory.list',$role->slug)}}">
                     <img src="{{asset('all_image/'.$role->image)}}">
                     </a>
                     <p class="icon-title">{{$role->name}}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <footer>
         <div class="container" >
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 block-1" >
                  <div class="row">
                     <div class="col-xs-12 col-sm-2 col-md-2 block-1">
                        <h1><img src="{{asset('front/')}}/img/atom-logo.png" alt="" class="img-responsive dib" /></h1>
                     </div>
                     <div class="col-xs-12 col-sm-3 col-md-3 block-1">
                        <ul>
                           <li><a href="{{route('about')}}" target="_blank">About us</a></li>
                           <li><a href="{{route('terms')}}" target='_blank'>Terms & Conditions</a></li>
                           <li><a href="{{route('privacy')}}" target='_blank'>Privacy statement</a></li>
                           <li><a href="{{route('registration')}}" target='_blank'>Registration Procedures</a></li>
                           <li><a href="{{route('feedback')}}" target='_blank'>Feedback</a></li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-3 col-md-3 block-1">
                        <ul>
                           <li><a href="https://ifid.in/" target="_blank">Indian Film Industry Directory</a></li>
                           <li><a href="https://indianfilmdirectory.com/" target="_blank">Film Industry Of India</a></li>
                           <li><a href="https://dbuguae.com/" target="_blank">DBug Digital Media</a></li>
                           <li><a href="https://www.filmystoryhub.com/" target="_blank">The Filmy Story Hub</a></li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-3 block-1 brdnone">
                        <!--	<ul>
                           <li><a href="" target="_blank">Advertise with ATOM</a></li>
                           <li><a href="" target="_blank">Contact for free listing</a></li>
                           </ul>-->
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-3 text-right block-1 brdnone">
                  <div class="center_ped footer_socil"><a href="https://twitter.com/talentporteadvt" target="_blank"> <span class="glyph icon-twitter-footer border border-yellow size-medium colored-glyph black"></span> </a>
                     <a href="" target="_blank"> <span class="glyph icon-youtube-footer border border-yellow size-medium colored-glyph black"></span> </a>
                     <a href="https://www.facebook.com/TalentPorteIndia/" target="_blank"> <span class="glyph icon-facebook-footer border border-yellow size-medium colored-glyph black"></span> </a>
                  </div>
                  <!--<div>
                     <a href=""><img src="img/app-store.png" alt="" class="img-responsive dib" /></a>
                     <a href=""><img src="img/android-app-store.png" alt="" class="img-responsive dib" /></a>
                     </div>-->
               </div>
            </div>
         </div>

         <script>
            jQuery.validator.addMethod("lettersonly", function(value, element)
            {
            	return this.optional(element) || /^[a-z ]+$/i.test(value);
            }, "Letters only please");

            $().ready(function()
            {
            	$("#login_form").validate();
            	$("#registrtion_form").validate(
            	{
            		rules:
            		{
            			name:{lettersonly: true}
            		}
            	});
            	$("#forgot_password_form").validate();
            });

            function hideshowforgotdiv()
            {

            	$("#hideshowsignindiv").hide();
            	$("#hideshowsignupdiv").hide();
            	$("#hideshowforgotdiv").show();
            }

            function hideshowsignindiv()
            {
            	$("#hideshowforgotdiv").hide();
            	$("#hideshowsignupdiv").hide();
            	$("#hideshowsignindiv").show();
            }

            function hideregisterdiv()
            {
            	$('#login_form')[0].reset();
            	$("#hideshowforgotdiv").hide();
            	$("#hideshowsignupdiv").hide();
            	$("#hideshowsignindiv").show();

            }
            function login_restform()
            {
            	$('#login_form')[0].reset();
            	var validator = $("#login_form").validate();
            	validator.resetForm();
            }
            function regi_restform()
            {
            	$('#registrtion_form')[0].reset();
            	var validator = $("#registrtion_form").validate();
            	validator.resetForm();
            }
            function forgot_restform()
            {
            	$('#forgot_password_form')[0].reset();
            	var validator = $("#forgot_password_form").validate();
            	validator.resetForm();
            }

            function hideshowsignupdiv()
            {

            	$("#hideshowforgotdiv").hide();
            	$("#hideshowsignindiv").hide();
            	$("#hideshowsignupdiv").show();
            }

            function checkemail1()
            {
            	var email= $("#email1").val();
            	var flag=true;

            	$.ajax(
            	{
            		type : "POST",
            		url:"{{asset('front/')}}/checkemail",
            		data : {'email': email},
            		async:false,
            		success : function (data)
            		{
            			if(data == 1)
            			{
            				$("#emailerror").show();
            				flag=false;
            			}
            			else
            			{
            				$("#emailerror").hide();
            				flag=true;
            			}
            		},
            	});
            	return flag;
            }
            function checkphone()
            {
            	var phone= $("#phone").val();
            	var flag=true;

            	$.ajax(
            	{
            		type : "POST",
            		url:"{{asset('front/')}}/checkphone",
            		data : {'phone': phone},
            		async:false,
            		success : function (data)
            		{
            			if(data == 1)
            			{
            				$("#phoneerror").show();
            				flag=false;
            			}
            			else
            			{
            				$("#phoneerror").hide();
            				flag=true;
            			}
            		},
            	});
            	return flag;
            }

            function checkusername()
            {
            	var username= $("#username").val();
            	var flag=true;

            	if(username != "")
            	{
            		$.ajax(
            		{
            			type : "POST",
            			url:"{{asset('front/')}}/checkusername",
            			data : {'username': username},
            			async:false,
            			success : function (data)
            			{
            				if(data == 1)
            				{
            					$("#usernameerror").hide();
            					flag=true;
            				}
            				else
            				{
            					$("#usernameerror").show();
            					flag=false;
            				}
            			},
            		});
            		return flag;
            	}
            	else
            	{
            		$("#usernameerror").hide();
            	}
            }

            function submitSignInForm()
            {

            	if($("#login_form").valid())
            	{
            		var form = $('#login_form').serialize();
            		$('#loader').show();
            		$.ajax(
            		{
            			type:"POST",
            			url	:"{{asset('front/')}}/verify_login",
            			data:form,
            			success: function(data)
            			{
            				if(data == 2)
            				{
            					$('#loader').hide();
            					$('#successregister_notapprove').show();
            					$('#successregister_notapprove').delay(10000).fadeOut();
            					//window.location.reload();
            				}
            				else if(data == 1)
            				{
            					$('#loader').hide();
            					$('#successlogin').show();
            					$('#successlogin').delay(10000).fadeOut();
            					window.location.reload();
            				}
            				else
            				{
            					$('#loader').hide();
            					$('#errorlogin').show();
            					$('#errorlogin').delay(3000).fadeOut();
            				}
            				$('#login_form')[0].reset();
            			}
            		});
            	}
            }

            function submitSignUpForm()
            {
            	var valid_phone=checkphone();
            	if(valid_phone == 1){
            		if($("#registrtion_form").valid())
            	{
            		var form = $('#registrtion_form').serialize();
            		$('#loader').show();
            		$.ajax(
            		{
            			type:"POST",
            			url	:"{{asset('front/')}}/add",
            			data:form,
            			success: function(data)
            			{
            				//alert(data);
            				if(data == 1)
            				{
            					$('#loader').hide();
            					$("#emailerror").hide();
            					$("#hideshowsignupdiv").hide();
            					$("#hideshowsignindiv").show();
            					// $('#successregister').show();
            					// $('#successregister').delay(3000).fadeOut();
            					window.location.href = "{{asset('front/')}}";
            				}
            				else if(data == 2)
            				{
            					$('#loader').hide();
            					$("#emailerror").hide();
            					$('#errorregister1').show();
            					$('#errorregister1').delay(3000).fadeOut();
            				}
            				else
            				{
            					$('#loader').hide();
            					$("#emailerror").hide();
            					$('#errorregister').show();
            					$('#errorregister').delay(3000).fadeOut();
            				}

            			}
            		});
            		}
            	}else
            	{
            		$('#loader').hide();
            		$("#phoneerror").hide();
            		$("#emailerror").hide();
            		$('#errorregisterphone').show();
            		$('#errorregisterphone').delay(3000).fadeOut();
            	}
            	$('#registrtion_form')[0].reset();
            }

            function submitForgotPasswordForm()
            {
            	if($("#forgot_password_form").valid())
            	{
            		var form = $('#forgot_password_form').serialize();
            		$('#loader').show();
            		$.ajax(
            		{
            			type:"POST",
            			url	:"{{asset('front/')}}/forgot_password",
            			data:form,
            			success: function(data)
            			{
            				if(data == 1)
            				{
            					$('#loader').hide();
            					$("#usernameerror").hide();
            					$('#successforgot').show();
            					$('#successforgot').delay(3000).fadeOut();
            				}
            				else
            				{
            					$('#loader').hide();
            					$("#usernameerror").hide();
            					$('#errorforgot').show();
            					$('#errorforgot').delay(3000).fadeOut();
            				}
            				$('#forgot_password_form')[0].reset();
            			}
            		});
            	}
            }
            function add_wishlist(wishlist_user_id,user_id)
            {
            	$('#loader').show();
            		$.ajax(
            		{
            			type:"POST",
            			url	:"{{asset('front/')}}/add_wishlist",
            			data:{'user_id': user_id,'wishlist_user_id':wishlist_user_id},
            			success: function(data)
            			{

            				if(data == 1)
            				{
            					$('#loader').hide();
            					/*setTimeout(function() {
            $('#loader').hide();
            }, 2000)*/
            					var title = data==1 ? 'Wishlisted' : 'Wishlist';
            						var succ_msg = data==1 ? 'Wishlist successfully.' : 'Wishlist not successfully.';
            						new PNotify(
            						{
            							title: title,
            							text: succ_msg,
            							type: 'success',
            							delay: 3000
            						});

            						setTimeout(function(){
            						window.location.reload(1);
            						}, 1000);
            				}


            			},

            		});

            }
            function remove_wishlist(wishlist_user_id,user_id)
            {
            	$('#loader').show();
            		$.ajax(
            		{
            			type:"POST",
            			url	:"{{asset('front/')}}/remove_wishlist",
            			data:{'user_id': user_id,'wishlist_user_id':wishlist_user_id},
            			success: function(data)
            			{

            				if(data == 1)
            				{
            					$('#loader').hide();
            					var title = 'Wishlist';
            						var succ_msg = 'Remove from wishlist successfully.';
            						new PNotify(
            						{
            							title: title,
            							text: succ_msg,
            							type: 'warning',
            							delay: 3000
            						});

            						setTimeout(function(){
            						window.location.reload(1);
            						}, 1000);
            				}


            			},

            		});

            }
         </script>
         <script>
            $(document).ready(function()
            {
            $("#openmobileno").click(function()
            {
            	$("#mobileno").html($(this).data('id'));
            });
            $("#openwhatsapp").click(function()
            {
            	$("#whatsapp").html($(this).data('id'));
            });
            });
         </script>
         <div class="modal fade popup_modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <button type="button" class="close popup_colse" data-dismiss="modal" onclick="login_restform();"><span>&times;</span></button>
                  <div class="head">
                     <h3>SORRY!!!</h3>
                  </div>
                  <div class="form_area">
                     <div>This Facility is available only for Film Makers, Advertising Agencies, Production Houses and Casting Agencies.If you are one of the afore mentioned organization please connect with us to register and get your login details free of cost.</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade popup_modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <button type="button" class="close popup_colse" data-dismiss="modal" onclick="login_restform();"><span>&times;</span></button>
                  <div class="head">
                     <h3>Mobile Number</h3>
                  </div>
                  <div class="form_area">
                     <span class="glyph icon-phone border border-dark-blue with-text"></span><span id="mobileno"></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade popup_modal" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <button type="button" class="close popup_colse" data-dismiss="modal" onclick="login_restform();"><span>&times;</span></button>
                  <div class="head">
                     <h3>Whatsapp Number</h3>
                  </div>
                  <div class="form_area">
                     <span class="glyph icon-mobile border border-dark-blue with-text"></span><span id="whatsapp"></span>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="backToTop"></div>
      <!--JavaScript
         ================================================== -->
      <script src="{{asset('front/')}}/js/select2/select2.js"></script>
      <script src="{{asset('front/')}}/js/custom.js"></script>
      <script src="{{asset('front/')}}/js/controltag.js"></script>
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

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
                     <!--<a href="{{asset('front/')}}" class="reg">Registration</a> <span>/</span> -->
                     <a href="{{ route('register_form')}}">Registration <span>/</span> Log in</a>
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
               <div class="bannerBtn"><a href="#" data-toggle="modal" data-target="#myModal" class="log btn_login" onclick="hideregisterdiv();">Registration <span>/</span> Log in</a> </div>
               <form action="{{route('search.directory')}}" method="get" name="frmsearch" id="frmsearch" enctype="multipart/form-data" class="form-inline" method="post" accept-charset="utf-8">
                  <div class="form-group">
                     <select id="search_name" name="role_name" class="form-control myval required">
                        <option value="">You are searching for...</option>
                        @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                     </select>
                     <!-- <input type="text" id="search_name" name="search_name" list="searchcategory" class="form-control" placeholder="You are searching for..." autocomplete="off"> -->
                  </div>
                  <div class="form-group has-success has-feedback">
                     <select id="search_location" name="search_location" class="form-control myval">
                        <option value="">Locations</option>
                        @foreach($country as $count)
                        <option value="{{$count->id}}">{{$count->country_name}}</option>
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
                     {{-- <a href = "{{route('directory.list',$role->slug)}}"> --}}
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
         <div class="modal fade popup_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <button type="button" class="close popup_colse" data-dismiss="modal" onclick="login_restform(); "><span>&times;</span></button>
                  <div class="" id="hideshowsignindiv">
                     <div class="head">
                        <h3>Log In</h3>
                     </div>
                     <div class="form_area">
                        <div class="success2" id="successlogin" style="display:none;">Log In Successfully.</div>
                        <div class="failure" id="errorlogin" style="display:none;">User Name/Password Incorrect.</div>
                        <div class="success2" id="successregister_notapprove" style="display:none;">Please wait for approval, After that you can log in.</div>
                        <div class="success2" id="successregister" style="display:none;">Thank You for a registration on our website, So now you can Sign In.</div>
                        <div class="failure" id="error" style="display:none;">Facility available only for registered members of IMPPA.</div>
                        <form name="login_form" id="login_form" enctype="multipart/form-data" method="POST" >
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" placeholder="Username" name="username" maxlength="200" minlength="2" class="form-control required email">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="password" placeholder="Password" name="password" maxlength="20" minlength="8" class="form-control required">
                                 </div>
                              </div>
                              <div class="col-md-6 col-md-push-6 col-xs-7 col-xs-push-5">
                                 <div class="forgot_link">
                                    <a href="javascript:void(0);" onclick="hideshowforgotdiv(); forgot_restform();" class="forgotpswd">Forgot Password ?</a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-md-pull-6 col-xs-5 col-xs-pull-7">
                                 <div class="mobile_text_left"><button type="button" onclick="submitSignInForm()" class="greenbtn btn btn_bule">Log In</button> </div>
                              </div>
                           </div>
                        </form>
                        <div class="register_area">
                           <a href="javascript:void(0);" onclick="hideshowsignupdiv(); regi_restform();" class="greenbtn greenbtn_outer btn btn_red1">Can't Log In?..Register Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="" id="hideshowsignupdiv" style="display:none;">
                     <div class="head">
                        <h3>Registration</h3>
                     </div>
                     <div class="paddlr20 form_area">
                        <div class="failure" id="errorregister" style="display:none;">Something went Wrong. Please try again later!</div>
                        <div class="failure" id="errorregister1" style="display:none;">This Email is already exists. You can not duplicate this email!</div>
                        <div class="failure" id="errorregisterphone" style="display:none;">This Phone no is already exists.</div>
                        <form name="registrtion_store" id="registrtion_form" enctype="multipart/form-data" method="POST">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" placeholder="Name *" name="name" maxlength="200" minlength="2" class="form-control required">
                                    <input type="hidden" name="name_V" value="Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" placeholder="Mobile No. *" name="phone" maxlength="13" minlength="10" class="form-control required number" onkeypress="return /[0-9+]/i.test(event.key)" id="phone" onblur="checkphone()">
                                    <span id="phoneerror" style="display:none; color:#ff0000">This Mobile No. already exists</span>
                                    <input type="hidden" name="phone_V" value="Mobile No.">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" placeholder="Enter Your Email ID *" name="email" id="email1" maxlength="200" minlength="2" class="form-control required email" onblur="checkemail1()">
                                    <span id="emailerror" style="display:none; color:#ff0000">This Email already exists</span>
                                    <input type="hidden" name="email_V" value="Email ID">
                                 </div>
                              </div>
                              <!-- <div class="col-md-12">
                                 <div class="form-group">
                                 	<input type="password" name="password" class="form-control required" maxlength="20" minlength="8"  placeholder="Enter Your Password *">
                                 	<input type="hidden" name="password_V" value="Password">
                                  </div>
                                 </div> -->
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" name="whatsapp" class="form-control required" maxlength="12" minlength="10"  placeholder="Whatsapp *" onkeypress="return /[0-9+]/i.test(event.key)">
                                    <input type="hidden" name="whatsapp_V" value="Whatsapp">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <select id="register_as" name="register_as" class="form-control myval searchselect required quesselect" >
                                       <option value="">What is your intention of Registration?</option>
                                       <option value="1">Register as an actor/Model</option>
                                       <!-- <option value="Register a Service Provider?">Register a Service Provider?</option> -->
                                       <option value="2">Register to acquire talent</option>
                                    </select>
                                    <input type="hidden" name="register_as_V" value="Intention of Registration">
                                 </div>
                              </div>
                              <div class="col-md-12 form-group">
                                 <input type="hidden" name="heading_V" value="Registration Details">
                                 <input type="hidden" name="footer_V" value="Atom Directory. All Rights Reserved.">
                                 <button type="button" onclick="submitSignUpForm()" class="greenbtn signup btn_bule">Register</button>
                              </div>
                              <!--<div class="col-md-12">
                                 <a href="javascript:void(0);" onclick="hideshowsignindiv()" class="greenbtn greenbtn_outer">SIGN IN</a>
                                 </div>-->
                           </div>
                        </form>
                        <div class="register_area">
                           <a href="javascript:void(0);" onclick="hideshowsignindiv()" class="greenbtn greenbtn_outer btn btn_red1">Already registered... Log In here</a>
                        </div>
                     </div>
                  </div>
                  <div class="signin_upform" id="hideshowforgotdiv" style="display:none;">
                     <div class="head">
                        <h3>Forgot Password</h3>
                     </div>
                     <div class="paddlr20 form_area">
                        <div class="success2" id="successforgot" style="display:none;">Your reset password link has been sent to your email address.</div>
                        <div class="failure" id="errorforgot" style="display:none;">User Name Incorrect.</div>
                        <form name="forgot_password_form" id="forgot_password_form" enctype="multipart/form-data" method="POST">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" placeholder="Username" name="username" id="username" maxlength="200" minlength="2" class="form-control required email" onblur="checkusername()">
                                    <span id="usernameerror" style="display:none; color:#ff0000">This Username is not exists</span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 btn_two">
                                 <span>
                                 <button type="button" onclick="submitForgotPasswordForm()" class="greenbtn btn_bule">submit</button> </span>
                                 <span><a href="javascript:void(0);" onclick="hideshowsignindiv()" class="greenbtn greenbtn_oute btn_red1">cancel</a></span>
                                 <div class="clear"></div>
                              </div>
                           </div>
                        </form>
                        <div class="center">
                        </div>
                     </div>
                  </div>
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

@extends('layouts.front.app')
@section('content')
<div class="bg_serch_fitter">
            <div class="container">
               @if(session('message'))
               <div class="alert alert-success" role="alert">
                  {{ session('message') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
               </div>
               @endif
               <ul>
                  <li><strong>Filter :</strong></li>
                  <li>
                     <select id="search_country" name="search_country" class="form-control myval searchselect" onchange="bindstate();">
                        <option value="">By Country</option>
                        <option value="1">India</option>
                     </select>
                  </li>
                  <li>
                     <select id="search_state" name="search_state" class="form-control myval searchselect" onchange="bindcity();">
                        <option value="">By State</option>
                        <option value="18">Kerala</option>
                        <option value="20">Maharashtra</option>
                     </select>
                  </li>
                  <li>
                     <select id="search_location" name="search_location" class="form-control myval searchselect" >
                        <option value="">By City</option>
                        <option value="441" >Kochi</option>
                        <option value="573" >Mumbai</option>
                        <option value="444" >Thrissur</option>
                     </select>
                  </li>
                  <li>
                     <select id="search_subcategory" name="search_subcategory" class="form-control myval searchselect" >
                        <option value="">By Subcategory</option>
                        <option value="223">Female</option>
                        <option value="222">Male</option>
                     </select>
                  </li>
                  <li>
                     <select id="search_speciality" name="search_speciality" class="form-control myval searchselect" >
                        <option value="">By Experience</option>
                        <option value="68">Feature Films</option>
                        <option value="64">Short Films</option>
                        <option value="67">Television Serials</option>
                        <option value="66">Theatre</option>
                        <option value="69">TVCs</option>
                        <option value="65">Web Series</option>
                     </select>
                  </li>
                  <li>
                     <select id="search_services" name="search_services" class="form-control myval searchselect" >
                        <option value="">By Language</option>
                        <option value="55">Bhojpuri</option>
                        <option value="58">English</option>
                        <option value="64">Haryanvi</option>
                        <option value="65">Hindi</option>
                        <option value="80">Italian</option>
                        <option value="79">Kashmiri</option>
                        <option value="72">Punjabi</option>
                        <option value="73">Rajasthani</option>
                        <option value="75">Tamil</option>
                     </select>
                  </li>
                  <li>
                     <select id="search_ages" name="search_ages" class="form-control myval searchselect" >
                        <option value="">By Age</option>
                        <option value="6">22-35 Years</option>
                        <option value="7">35-45 Years</option>
                     </select>
                  </li>
                  <li>
                     <select id="search_products" name="search_products" class="form-control myval searchselect" >
                        <option value="">By Products</option>
                        <option value="5">Another Product</option>
                        <option value="4">Some Product</option>
                     </select>
                  </li>
                  <li>
                     <input type="text" name="search_directoryname" id="search_directoryname" class="form-control" placeholder="By Name">
                  </li>
                  <li class="li_part2 left5"><button id="filterbutton" onclick="GetAjaxfilterList();" class="btn btn_red">Filter</button></li>
                  <li class="li_part2 right_div"><button id="clearall" class="btn btn_bule" onclick="GetAjaxclearallList();">Clear</button></li>
               </ul>
               <div class="clear"></div>
            </div>
         </div>
         <div>
         <div class="padd_main">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-9">
                     @if(count($users)>0)
                     @foreach($users as $user)
                     @if($user->is_locked == 0)
                     <div class="company-header">
                        <div class="row mobile_570">
                           <div class="col-xs-4 col-sm-4 col-md-3 col-md-push-9 col-sm-push-8 col-xs-push-8 text-right comp-logo">
                              <a href="{{route('directory.details',$user->slug)}}">
                              <img src="{{asset('all_image/'.$user->image)}}" alt="" class="img-responsive dib">
                              </a>
                           </div>
                           <?php $role = $user->getRoleNames()->first();  ?>
                           <div class="col-xs-8 col-sm-8 col-md-9 col-md-pull-3 col-sm-pull-4 col-xs-pull-4">
                              <p><span class="bold"><a href="{{route('directory.details',$user->slug)}}">{{$user->name}}</a></span><br>
                                 {{$role}}
                                 mumbai
                              </p>
                              <p>{{$user->description}}</p>
                              <p style="color:red;"><a href="{{route('directory.details',$user->slug)}}">Read
                                 More</a>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="company-description">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="company-contact-details">
                                 <ul class="list_btm_area">
                                    <li>
                                       <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">
                                       <span class="glyphicon glyphicon-earphone icon-circle border border-dark-blue with-text"></span>Mobile</a>
                                    </li>
                                    <li>
                                       <a href="mailto:{{$user->email}}">
                                       <span class="glyphicon glyphicon-envelope icon-circle border border-dark-blue with-text"></span>Email</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">
                                       <span class="glyphicon glyphicon-phone icon-circle border border-dark-blue with-text"></span>Whatsapp</a>
                                    </li>
                                    <li>
                                       <a href="{{$user->facebook}}" target="_blank"> <span class="glyphicon glyphicon-user icon-circle border border-dark-blue with-text"></span>Facebook/Instagram</a>
                                    </li>
                                    @if($user->video_list)
                                    <div class="introvideo">
                                       <a class="whislistbtn" data-toggle="modal" data-target="#introvideo_modal"> Introduction Video </a>
                                       <div class="modal fade" id="introvideo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                   <center>
                                                      <h4 class="modal-title" id="myModalLabel">Introduction Video</h4>
                                                   </center>
                                                </div>
                                                <div class="modal-body">
                                                   @foreach($user->video_list as $video)
                                                   <iframe type="text/html" height="380" src="{{$video->link}}" frameborder="0" allowfullscreen="" style="width:100% !important"></iframe>
                                                   @endforeach
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endif
                                    @php
                                    $wishlisted = \App\Models\Wishlist::where('user_id', \Illuminate\Support\Facades\Auth::id())
                                    ->where('member_id', $user->id)
                                    ->first();
                                    @endphp
                                    @if ($wishlisted)
                                    <!-- Button: Already in wishlist -->
                                    <form action="{{ route('wishlist.destroy', $wishlisted->id) }}" method="POST" style="display:inline;">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit"
                                          style="background-color: #f8d7da; color: #dc3545; border: none; padding: 6px 12px; border-radius: 4px; font-size: 14px; cursor: pointer;"
                                          onclick="return confirm('Remove from wishlist?')">
                                       In Wishlist (Remove)
                                       </button>
                                    </form>
                                    @else
                                    <!-- Button: Add to wishlist -->
                                    <a href="{{ route('wishlistStore', $user->id) }}" class="whislistbtn">
                                    Add to Wish List
                                    </a>
                                    @endif
                                    {{-- <a href="{{ route('wishlistStore',$user->id) }}" class="whislistbtn" >Add to Wish List</a> --}}
                                    <!-- <a href=""><span class="glyph icon-youtube border border-dark-blue with-text"></span> Youtube</a> -->
                                 </ul>
                                 <div class="clear"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @else
                     <div class="blockInfoSection">
                        <div class="blockSection">
                           <div class="block_info">
                              <div class="padd">
                                 <div><img src="https://atomdirectory.com/assets/images/lock.png" alt="" class="img-responsive"></div>
                                 <strong>Profile Locked</strong>
                                 <p>This Profile has been locked by request<br> of the member. It can be seen only by<br> Production
                                    Houses or Casting Agencies registered with ATOM Directory
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="company-header">
                           <div class="row mobile_570">
                              <div class="col-xs-4 col-sm-4 col-md-3 col-md-push-9 col-sm-push-8 col-xs-push-8 text-right comp-logo">
                                 <a href="https://atomdirectory.com/directory_detail/actor/beant-singh-buttar">
                                 <img src="https://atomdirectory.com/userfiles/directorylist/resizeimage/1703504060.jpg" alt="" class="img-responsive dib">
                                 </a>
                              </div>
                              <div class="col-xs-8 col-sm-8 col-md-9 col-md-pull-3 col-sm-pull-4 col-xs-pull-4">
                                 <p><span class="bold"><a href="https://atomdirectory.com/directory_detail/actor/beant-singh-buttar">Beant Singh Buttar</a></span><br>
                                    Actor,
                                    Mumbai
                                 </p>
                                 <p>Beant Singh Buttar, Bollywood Actor who has acted in films like URI,The Surgical Strike,Jeet Ki Zidd(2020), Chess(2020), Wajood (2021), Still Waters Go Deep(2021),Nishana(2021)</p>
                                 <p style="color:red;"><a href="https://atomdirectory.com/directory_detail/actor/beant-singh-buttar">Read
                                    More</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="company-description">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="company-contact-details">
                                    <ul class="list_btm_area">
                                       <li>
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">
                                          <span class="glyphicon glyphicon-earphone icon-circle border border-dark-blue with-text"></span>Mobile</a>
                                       </li>
                                       <li>
                                          <a href="mailto:beantbuttar1111@gmail.com">
                                          <span class="glyphicon glyphicon-envelope icon-circle border border-dark-blue with-text"></span>Email</a>
                                       </li>
                                       <li>
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">
                                          <span class="glyphicon glyphicon-phone icon-circle border border-dark-blue with-text"></span>Whatsapp</a>
                                       </li>
                                       <li>
                                          <a href="https://www.facebook.com/beant.buttar.75" target="_blank"> <span class="glyphicon glyphicon-user icon-circle border border-dark-blue with-text"></span>Facebook/Instagram</a>
                                       </li>
                                       <a href="{{ route('wishlistStore')}}"  class="whislistbtn" >Add to Wish List</a>
                                    </ul>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif
                     @endforeach
                     @endif
                     <div class="pagination">
                        <script>
                           $(document).ready(function() {
                           	$(".pagination > ul li a").on("click",function(e){
                           		e.preventDefault();
                           		GetAjaxList($(this).attr("href"));
                           	});
                           });
                        </script>
                     </div>
                     <div class="clear"></div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3 pro-cat-related">
                     <div class="related-articles bg_h4">
                        <h4>
                           Featured Listings<!--Featured Directory-->
                        </h4>
                     </div>
                     @foreach($feacherdUsers as $feacherd)
                     <div class="article-listing paddleftrightnone">
                        <div class="row f_360">
                           <div class="col-xs-3 col-sm-3 col-md-5 block-1">
                              <a href="{{route('directory.details',$user->slug)}}">
                              <img src="{{asset('all_image/'.$feacherd->image)}}" alt="" class="img-responsive img-circle dib">
                              </a>
                           </div>
                           <div class="col-xs-9 col-sm-9 col-md-7 block-2 feture_name_box">
                              <p class="bold">{{$feacherd->name}}</p>
                              <p>
                                 <?php $rolefeacherd = $feacherd->getRoleNames()->first();  ?>
                                 {{$rolefeacherd}},
                              </p>
                              <p>Mumbai</p>
                              <div><a href="{{route('directory.details',$user->slug)}}">Click here to know more</a></div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
@endsection

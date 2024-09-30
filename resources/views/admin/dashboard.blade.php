@extends('layouts.app1')

@section('title', 'Admin Dashboard')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   

               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <p id="total_views" class="total_no">Loading...</p>
                                 <p class="head_couter">Welcome</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">123.50</p>
                                    <p class="head_couter">Average Time</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fas fa-comment-alt green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                              <div>
                                    <p id="total_messages" class="total_no">Loading...</p>
                                    <p class="head_couter">Totle Messages</p>
                                </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="far fa-comments red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <p id="total_quotes" class="total_no">Loading...</p>
                                 <p class="head_couter">New Appointment</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row column1 social_media_section">
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons fb margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-facebook "></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>35k</strong></span>
                                       <span>Friends</span>
                                    </li>
                                    <li>
                                       <span><strong>128</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons tw margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-twitter"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>584k</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>978</strong></span>
                                       <span>Tweets</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons linked margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-linkedin"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>758+</strong></span>
                                       <span>Contacts</span>
                                    </li>
                                    <li>
                                       <span><strong>365</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons google_p margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-google-plus"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>450</strong></span>
                                       <span>Followers</span>
                                    </li>
                                    <li>
                                       <span><strong>57</strong></span>
                                       <span>Circles</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- graph -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Extra Area Chart</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <canvas height="120" id="canvas"></canvas>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end graph -->
                     <div class="row column3">
                        <!-- testimonial -->
                        <div class="col-md-6">
                           <div class="dark_bg full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Testimonial</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content testimonial">
                                          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             <!-- Wrapper for carousel items -->
                                             <div class="carousel-inner">
                                                <div class="item carousel-item active">
                                                   <div class="img-box"><img src="assets/imagess/logo/Bishal.png" alt=""></div>
                                                   <p class="testimonial">"At Shinjiru Educational Consultancy, we specialize in empowering students
                                     to thrive academically and professionally in Japan. Our commitment to quality service and success-driven strategies
                                     has garnered glowing reviews, making us a preferred choice for those pursuing educational
                                      and career opportunities in Japan."</p>
                                                   <p class="overview"><b>Bishal Dhamala</b> Founder</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="assets/imagess/logo/dinesh.png" alt=""></div>
                                                   <p class="testimonial">"Shinjiru Educational Consultancy Pvt. Ltd. is renowned for its unwavering
                                     commitment to guiding students towards successful academic pursuits and career 
                                     advancements in Japan. Our personalized approach,
                                     coupled with extensive expertise and excellent client feedback, 
                                     distinguishes us as a leading consultancy in the field."</p>
                                                   <p class="overview"><b>Dinesh Lohani</b>IT Officer</p>
                                                </div>
                                                
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end testimonial -->
                        <!-- progress bar -->
                        <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Progress Bar</h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="progress_bar">
                                          <!-- Skill Bars -->
                                          <span class="skill" style="width:73%;">Facebook <span class="info_valume">73%</span></span>                  
                                          <div class="progress skill-bar ">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                                             </div>
                                          </div>
                                          <span class="skill" style="width:62%;">Twitter <span class="info_valume">62%</span></span>   
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                             </div>
                                          </div>
                                          <span class="skill" style="width:54%;">Instagram <span class="info_valume">54%</span></span>
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                             </div>
                                          </div>
                                          <span class="skill" style="width:82%;">Google plus <span class="info_valume">82%</span></span>
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                                             </div>
                                          </div>
                                          <span class="skill" style="width:48%;">Other <span class="info_valume">48%</span></span>
                                          <div class="progress skill-bar">
                                             <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end progress bar -->
                     </div>
                     <div class="row column4 graph">
                        <div class="col-md-6 margin_bottom_30">
                           <div class="dash_blog">
                              <div class="dash_blog_inner">
                                                         @php
                              use Carbon\Carbon;
                           @endphp

                           <div class="dash_head">
                              <h3><span><i class="fa fa-calendar"></i> {{ Carbon::now()->format('j F Y') }}</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                           </div>
                                 <div class="list_cont">
                                    <p>Contact message Notification</p>
                                 </div>
                                 <div class="task_list_main">
                                 <ul class="task_list" id="initial-messages">
                                 @forelse($contacts->take(3) as $contact) 
                                       <li>
                                          <a href="#">
                                             <strong>Name:</strong> {{ $contact->name }}<br>
                                             <strong>Email:</strong> {{ $contact->email }}<br>
                                             <strong>Phone:</strong> {{ $contact->contact_no ?? 'N/A' }}<br>
                                             <strong>Subject:</strong> {{ $contact->subject ?? 'No Subject' }}<br>
                                             <strong>Message:</strong> {{ Str::limit($contact->message, 50) }}
                                          </a>
                                          <br>
                                          <strong>{{ $contact->created_at->format('Y-m-d g:i A') }}</strong>
                                       </li>
                                 @empty
                                       <li>No contact messages available.</li>
                                 @endforelse
                              </ul>

                              <!-- Hidden section for additional messages -->
                              <ul class="task_list" id="more-messages" style="display: none;">
                                 @foreach($contacts->skip(3) as $contact)
                                 <li>
                                       <a href="#">
                                          <strong>Name:</strong> {{ $contact->name }}<br>
                                          <strong>Email:</strong> {{ $contact->email }}<br>
                                          <strong>Phone:</strong> {{ $contact->contact_no ?? 'N/A' }}<br>
                                          <strong>Subject:</strong> {{ $contact->subject ?? 'No Subject' }}<br>
                                          <strong>Message:</strong> {{ Str::limit($contact->message, 50) }}
                                       </a>
                                       <br>
                                       <strong>{{ $contact->created_at->format('Y-m-d g:i A') }}</strong>
                                 </li>
                                 @endforeach
                              </ul>
                           </div>
                                                
                                 <div class="read_more">
                                    <div class="center">
                                    <a id="read-more-btn" class="main_bt read_bt" >Read More</a></div>
                                    <a id="hide-btn" class="main_bt read_bt" style="display: none;">Hide</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <d7iv class="dash_blog">
                              <div class="dash_blog_inner">
                                 <div class="dash_head">
                                    <h3><span><i class="fa fa-comments-o"></i> Today's Updates </span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                                 </div>
                                 <div class="list_cont">
                                    <p>Client Appointment</p>
                                 </div>
                                 <div class="msg_list_main">
                                    <ul class="msg_list">
                                       <li>
                                          <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                          <span>
                                          <span class="name_user">Herman Beck</span>
                                          <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                          <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">On the other hand, we denounce.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                          <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                          <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">On the other hand, we denounce.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="read_more">
                                    <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                                    <a id="hide-btn" class="main_bt read_bt" style="display: none;">Hide</a>
                                 </div>
                              </div>
                           </d7iv>
                        </div>
                     </div>
                  </div>
                  
                
               <!-- end dashboard inner -->
    <script>
        async function fetchViews() {
            try {
                let response = await fetch('https://shinjirueducational.com.np/get_views.php');
                let data = await response.json();
                let viewCount = data.views;
                document.getElementById('total_views').textContent = viewCount;
            } catch (error) {
                console.error('Error fetching views:', error);
                document.getElementById('total_views').textContent = 'Error';
            }
        }

        fetchViews();

        async function fetchTotalMessages() {
            try {
                let response = await fetch('/total-messages');
                let data = await response.json();
                if (data.success) {
                    document.getElementById('total_messages').textContent = data.totalMessages.toLocaleString(); // Format with commas
                } else {
                    console.error('Error fetching total messages:', data.message);
                    document.getElementById('total_messages').textContent = 'Error';
                }
            } catch (error) {
                console.error('Error fetching total messages:', error);
                document.getElementById('total_messages').textContent = 'Error';
            }
        }

        // Fetch and display the total number of messages when the page loads
        fetchTotalMessages();

        async function fetchTotalQuotes() {
            try {
                let response = await fetch('/total-quotes');
                let data = await response.json();
                if (data.success) {
                    document.getElementById('total_quotes').textContent = data.totalQuotes.toLocaleString(); // Format with commas
                } else {
                    console.error('Error fetching total quotes:', data.message);
                    document.getElementById('total_quotes').textContent = 'Error';
                }
            } catch (error) {
                console.error('Error fetching total quotes:', error);
                document.getElementById('total_quotes').textContent = 'Error';
            }
        }

        // Fetch and display the total number of quotes when the page loads
        fetchTotalQuotes();
    document.getElementById('read-more-btn').addEventListener('click', function () {
    document.getElementById('more-messages').style.display = 'block';
    this.style.display = 'none';
    document.getElementById('hide-btn').style.display = 'inline-block';
      });

    document.getElementById('hide-btn').addEventListener('click', function () {
    document.getElementById('more-messages').style.display = 'none';
    this.style.display = 'none';
    document.getElementById('read-more-btn').style.display = 'inline-block';
   });
        
    </script>


@endsection

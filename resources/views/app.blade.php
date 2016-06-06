<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Cascading grid layout library">

  <title>RIX</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/grid-container.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/about-us.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/cart-Draft.css') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/scrollspy.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/homeMas.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/loginModal.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/ModalEventHandler.js') }}"></script>
</head>

<body id="myPage" data-spy="scroll" data-target="navbar" data-offset="50">  
  <header class="container-fluid">
    <nav class="navbar">
        <ul>
          <li><a href="/" onClick="location.href='/'"><img src="/photos/logo3.jpg" alt="Logo"></a></li>
          <li><a href="#aboutUs" title="About_us">About us</a></li>
          <li><a href="#contact" title="Contact">Contact</a></li>
          @if (Auth::check())
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Favorites<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><button type="button" class="btn" id="myPrefNewsBtn">My Prefered News</button></li>
            <li><button type="button" class="btn" id="addPrefBtn">Add New Preferences</button></li>
          </ul>
             </li>
             <li><a href="/user/logout" onClick="location.href='/user/logout'" title="Logout">Logout</a></li>
          @else
            <li><button type="button" class="btn" id="loginBtn">Login</button></li>
          @endif
        </ul>
    </nav>
  </header>
  @yield('content')
  <section id="aboutUs" class="container-fluid clearfix">
  <h3 class="text-center">About Us</h3>
    <p class="text-center">Our mission is to help anyone learn anything.</p>
    <p class="text-center">We have created a fictional tech news website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  
    
  <div class="row">
    <div class="col-sm-3">
      <p class="text-center"><strong>Ana</strong></p>
      <a href="#demo1" data-toggle="collapse">
        <img src="/photos/ana.png" class="img-circle person" width="120" height="120"  alt="Image">
      </a>
      <div id="demo1" class="collapse">
        <p>Back-end Developer</p>
        <p>Data-base Enthusiastic</p>
        <p>Wanna be Front-end Developer</p>
      </div>
    </div>

    <div class="col-sm-3">
      <p class="text-center"><strong>Georgiana</strong></p>
      <a href="#demo2" data-toggle="collapse">
        <img src="/photos/georgiana.png" class="img-circle person" width="120" height="120"  alt="Image">
      </a>
      <div id="demo2" class="collapse">
        <p>Front-end Developer</p>
        <p>Bootstrap Enthusiastic</p>
        <p>Wanna be Front-end Developer</p>
      </div>
    </div>

    <div class="col-sm-3">
      <p class="text-center"><strong>Madalina</strong></p>
      <a href="#demo3" data-toggle="collapse">
        <img src="/photos/madalina.png" class="img-circle person" width="120" height="120"  alt="Image">
      </a>
      <div id="demo3" class="collapse">
        <p>Back-end Developer</p>
        <p>Data-base Enthusiastic</p>
        <p>Wanna be Front-end Developer</p>
      </div>
    </div>

    <div class="col-sm-3">
      <p class="text-center"><strong>Diana</strong></p>
      <a href="#demo4" data-toggle="collapse">
        <img src="/photos/diana.png" class="img-circle person" width="120" height="120"  alt="Image">
      </a>
      <div id="demo4" class="collapse">
        <p>Front-end Developer</p>
        <p>Data-base Enthusiastic</p>
        <p>Wanna be Back-end Developer</p>
      </div>
    </div>
  </div>
  </section> 
  <!-- About us -->

<!-- Contact -->
  <section id="contact" class="container-fluid clearfix">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We want to read your opinion!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Do you like our site? Let us know.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Iasi, Romania</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Ana E-mail: ana@rixteam.com</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Geo E-mail: geo@rixteam.com</p>
    <p><span class="glyphicon glyphicon-envelope"></span>Mada E-mail: mada@rixteam.com</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Diana E-mail: diana@rixteam.com</p>      
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>  
    </div>
    </div>
 </section> 
<!-- contact section-->

<!-- </section> -->
</section> 
<!-- body section -->

<footer class="text-center" id="page-footer">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br> 
</footer>


   <!-- Login Modal -->
    <div class="modal fade" id="loginModal" role="dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form class="form">
                  <div>
                      <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                      <input type="text" name="email" class="form-control" id="emails" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                      <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="password" name="inPassword" class="form-control" id="psw" placeholder="Enter password">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                  </div>
                  <button type="button" class="btn btn-default btn-success btn-block" id="loginBut"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
        </div>
        <div class="modal-footer">
              <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Not a member? <button type="button" class="btn" id="signupBtn">Sign Up</button></p>
                <p>Forgot <a href="#">Password?</a></p>
            </div>
            </div>
      </div>


    <div class="modal fade" id="signupModal" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" data-step="1">Sign up and start learning!</h4>
                </div>
                <div class="modal-body">
                   <form class="form">
                      <div class="form-group">
                        <label for="fullname"><span class="glyphicon glyphicon-user"></span> Full Name</label>
                        <input type="text" name="inUsername" class="form-control" id="fullname" placeholder="Your Full Name">
                      </div>
                      <div class="form-group">
                        <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
                        <input type="text" name="inEmail" class="form-control" id="username" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="passw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" name="inPassword" class="form-control" id="passw" placeholder="Enter password">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                      </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="signupSubmit">Sign Up</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal sign up  -->

   @if (Auth::check())
           <!-- modal add preferences -->
  <div class="modal fade" id="addPrefModal" role="dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" data-step="1">Choose your preferences!</h4>
          </div>
          <form class="form" action="/addPreferences" method="post">
              <div class="modal-body">
                  <div class="api">
                      <span>If you want to get this videos on your website use this link:</span>
                      <input type="text" readonly value="{{ Request::root() }}/apis/{{ Auth::user()->apiKey  }}" />
                      <a href="/documentatie/documentatie.docx" download>Documentatie</a>
                  </div>
                  <ul>
                      <li>
                          Development<ul>
                              <li><input type="checkbox" name="java" id="Java" {{ Auth::user()->preferences()->java ? 'checked' : '' }} />Java</li>
                              <li><input type="checkbox" name="net" id=".NET" {{ Auth::user()->preferences()->net ? 'checked' : '' }}/>.NET</li>
                              <li><input type="checkbox" name="android" id="Android" {{ Auth::user()->preferences()->android ? 'checked' : '' }}/>Android</li>
                              <li><input type="checkbox" name="ios" id="iOS" {{ Auth::user()->preferences()->ios ? 'checked' : '' }}/>iOS</li>
                              <li><input type="checkbox" name="html" id="HTML" {{ Auth::user()->preferences()->html ? 'checked' : '' }}/>HTML</li>
                              <li><input type="checkbox" name="css" id="CSS" {{ Auth::user()->preferences()->css ? 'checked' : '' }}/>CSS</li>
                              <li><input type="checkbox" name="javascript" id="JavaScript" {{ Auth::user()->preferences()->javascript ? 'checked' : '' }}/>JavaScript</li>
                              <li><input type="checkbox" name="web" id="Web" {{ Auth::user()->preferences()->web ? 'checked' : '' }}/>Web</li>
                              <li><input type="checkbox" name="apis" id="APIs" {{ Auth::user()->preferences()->apis ? 'checked' : '' }} />APIs</li>
                          </ul>
                      </li>
                      <li>
                          Architecture and Design<ul>
                              <li><input type="checkbox" name="architecture" id="Arhitecture" {{ Auth::user()->preferences()->architecture ? 'checked' : '' }}/>Architecture</li>
                              <li><input type="checkbox" name="design" id="Design" {{ Auth::user()->preferences()->design ? 'checked' : '' }}/>Design</li>
                              <li><input type="checkbox" name="methodology" id="Methodology" {{ Auth::user()->preferences()->methodology ? 'checked' : '' }}/>Methodology</li>
                              <li><input type="checkbox" name="frameworks" id="Frameworks" {{ Auth::user()->preferences()->frameworks ? 'checked' : '' }}/>Frameworks</li>
                              <li><input type="checkbox" name="tools" id="Tools" {{ Auth::user()->preferences()->tools ? 'checked' : '' }}/>Tools</li>
                          </ul>
                      </li>
                      <li>
                          Data Science<ul>
                              <li><input type="checkbox" name="machine_learning" id="Machine_Learning" {{ Auth::user()->preferences()->machine_learning ? 'checked' : '' }}/>Machine Learning</li>
                              <li><input type="checkbox" name="data_bases" id="Data_Bases" {{ Auth::user()->preferences()->data_bases ? 'checked' : '' }}/>Data Bases</li>
                              <li><input type="checkbox" name="performance" id="Performance" {{ Auth::user()->preferences()->performance ? 'checked' : '' }}/>Performance</li>
                              <li><input type="checkbox" name="productivity" id="Productivity" {{ Auth::user()->preferences()->productivity ? 'checked' : '' }}/>Productivity</li>
                          </ul>
                      </li>
                      <li>
                          DevOps<ul>
                              <li><input type="checkbox" name="cloud" id="Cloud" {{ Auth::user()->preferences()->cloud ? 'checked' : '' }}/>Cloud</li>
                              <li><input type="checkbox" name="automation" id="Automation" {{ Auth::user()->preferences()->automation ? 'checked' : '' }}/>Automation</li>
                              <li><input type="checkbox" name="testing" id="Testing" {{ Auth::user()->preferences()->testing ? 'checked' : '' }}/>Testing</li>
                              <li><input type="checkbox" name="security" id="Security" {{ Auth::user()->preferences()->security ? 'checked' : '' }}/>Security</li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <div class="modal-footer">
                  {{ csrf_field() }}
                  <button type="submit" class="btn" id="addPrefBtn">Save</button>
              </div>
          </form>
      </div>
  </div>
  </div>
  @endif

  <!-- doar video-uri carora userul le-a dat like -->

 @if (Auth::check())
     <div class="modal fade" id="myPrefNewsModal" role="dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title" data-step="1">Check out your prefered news!</h4>
             </div>
             <div class="modal-body">
                 <section class="grid-container">
                     <section class="content">
                         @if (isset($videosLikes))
                         @foreach ($videosLikes as $video)
                             <div class="cart-item">
                                 <div class="cart-header">
                                     <a href="/video/{{ $video['id'] }}"><p class="text-center">{{ $video['name'] }}</p></a>
                                 </div>
                                 <div class="cart-body">
                                     <div class="cart-picture">
                                         {!! $video['embed'] !!}
                                     </div>
                                 </div>
                                 <div class="cart-footer">
                                     <div class="option">
                                         <button class="animated-like"><span data-id="{{ $video['id'] }}">Like</span></button>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                         @endif
                         <div class="clearfloat"></div>
                     </section>

                     <footer id="grid-footer">
                     </footer>

                 </section>
             </div>
             <div class="modal-footer">

             </div>
         </div>
     </div>
     @endif



    <script type="text/javascript" src="{{ asset('js/multi-step-modal.js') }}"></script>
    <script>
    sendEvent = function(sel, step) {
      $(sel).trigger('next.m.' + step);
    }
    </script>
  
  

</body>
</html>
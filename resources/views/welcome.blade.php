<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hussam Adil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
          <!-- slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        
      <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
      <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
      <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    </head>
    <body>
    <!-- Start Nabbar -->
    <nav class="navbar navbar-expand-lg p-4   navbar-light bg-light">
        <div class="container ">
        <a class="navbar-brand logo" href="#" > H</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>

        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item">
                
              <a class="nav-link nav-link-hover" href="#"><i class="mr-1  fa fa-user nav-icon " ></i>  About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-hover " href="#"><i class="nav-icon mr-1 fa fa-briefcase" aria-hidden="true"></i>
                Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-hover " href="#"><i class="nav-icon mr-1 fa fa-book" aria-hidden="true"></i>
                Education</a>
            </li>

            <li class="nav-item">
              <a class="nav-link nav-link-hover" href="#"><i class="mr-1 fa fa-star nav-icon " ></i> Skills</a>
            </li>
             
              <li class="nav-item">
                <a class="nav-link nav-link-hover " href="#"><i class="nav-icon mr-1 fa fa fa-envelope-o" aria-hidden="true"></i>
                  Contact</a>
              </li>
            <li class="nav-item ml-3" >
                <a class="nav-link download-resume-btn" href="#"><i class="mr-1 fa fa-arrow-circle-down" aria-hidden="true"></i>
                    My Resume</a>
              </li>
          </ul>
          
        </div>
    </div>
      </nav>
      <!-- end navbar-->
       <!-- Start  intro-->
      <div style=" background: #130f40;">
        <div class="container p-3">
        <div class="p-4 ml-4 intro">
            <p>Hi, my name is
          </p>
          <h4 class="big-font-size">Hussam Adil.</h4>
          <div class="mt-4 p-1">
              <span class="p-2" style="border-radius: 4px; background:#3a3b71">By building web applications Hope I can make the world better place for humans being 🙏 .</span>
          </div>
          <div class="mt-4 p-1">
              <p style="line-height: 35px;">
                I'm an full stack Web developer, with Bachelor of business degree .
                 but I'm  more passion about a computer science in general and web technologies specifically ,from Khartoum, Sudan.  
              </p>
            </div>
            
            <div class="mt-3 p-1">
                <a href="#" class="contact-mebtn btn btn-warning">Contact Me</a>
            </div>
        </div>
      </div>
    </div>
       <!-- end  intro-->
         <!-- start About -->
         
         <div class="about mt-4 mb- p-2" style="background: #fff">
          
            <div class="  p-4 container">
                <div class="mb-3">
                    <span class="h3 section-title">About</span> 
                </div>
                
            <div class="row mt-4 ">
                <div class=" offset-1 col-sm-7 text">
                    <p>
                        Hello! I'm Hussam, a software developer based in Sudan 🇸🇩.

                    I enjoy creating things that live on the internet, whether that be websites, applications, or anything in between.</p>
                    <p> 
                    My goal is to always build products that provide pixel-perfect, performant experiences.

                    Shortly after graduating from <a  target="_blank" class="university-link" href="http://www.siu-sd.com/">Sudan international University</a>, I joined the engineering team at valley where I work on building Apis and frontend staff.
                    </p>
                    
                </div>
                <div class="col-sm-4 image text-center">
                    <img width="240px"   class="text-center  img-thumbnail" src="https://i.stack.imgur.com/zYENw.png?s=328&g=1">
                    <p class="mt-2 text-center   d-sm-block">
                      it's Me 👆
                    </p>
                     
                  </div>
                
            </div>
         </div>
        </div>
           <!-- end  About-->
            <!-- start  work-->
        <div class="work mt-2   p-2" style="background: #FCBF49">
            <div class=" p-4 container">
              <div class="mb-3">
                <span class="h3 section-title" style="background:#fff;color:#fcbf49">Work</span> 
            </div>
            <p>Below you can see some projects I've been working on lately.</p>
            <div class="work-slider text-center mt-4">
                  <div>
                  <img class=" img-thumbnail" src="https://i.postimg.cc/SK8jfqrF/Screenshot-from-2020-11-20-19-28-38.png">
                  </div>
                   
                    <div>
                      <img class=" img-thumbnail" src="https://i.postimg.cc/FHJkK0wx/Screenshot-from-2020-11-22-21-41-35.png">
                      </div>
                      <div>
                    
                    <img class=" img-thumbnail" src="https://i.postimg.cc/7Y2v66Yk/Screenshot-from-2020-03-23-12-47-15.png">
                    </div>
                    <div>
                      <img class=" img-thumbnail" src="https://i.postimg.cc/FFnmz8yj/Screenshot-from-2020-11-20-19-29-52.png">
                      </div>
                      <div>
                        <img class=" img-thumbnail" src="https://i.postimg.cc/Rq5GDvtr/Screenshot-from-2020-11-22-21-32-23.png">
                        </div>
                      <div>
                          <img class=" img-thumbnail" src="https://i.postimg.cc/3rpNMK5k/Screenshot-from-2020-11-22-21-14-19.png">
                      </div>
                      <div>
                        <img class=" img-thumbnail" src="https://i.postimg.cc/pd2zrmvc/Screenshot-from-2020-11-22-21-20-40.png">
                    </div>
                    <div>
                      <img class=" img-thumbnail" src="https://i.postimg.cc/jSTZ6dKP/Screenshot-from-2020-11-22-21-21-29.png">
                   </div>
                   <div>
                    <img class=" img-thumbnail" src="https://i.postimg.cc/mgwfCnxZ/Screenshot-from-2020-11-22-21-33-00.png">
                 </div>
              </div>
            
        </div>
        </div>
         <!-- end  work-->
           <!-- end  education-->
         <div class="education mt-4">
           <div class=" container p-4">
            <div class="mb-3 mt-3">
              <span class="h3 section-title">Education</span>
          </div>
              <div class="row">
                <div class="col-sm-8 mt-3">
                  <p>
                    On October 2017  I graduated from Sudan international university, faculty of  management information system, its combination between IT and management.
                  </p>
                  <p>
                    At college, I learned about business and accounting and marketing, and a lot of cool stuff there.
                  </p>
                  <p>
                    my specialization gives me the ability to think about your project from different points of view, the business one and technical view as well.
                  </p>
                  <span class="cgpa p-1">
                    <i style="color: #151641;
                    font-size: 18px" class=" fa fa-check-square"></i> CGPA : 3.48 out of 4.00</span>
                </div>
                <div class="col-sm-4">
                  <img class=" img-fluid" src="https://i.postimg.cc/Dz5THXwX/undraw-Graduation-ktn0-1.png">
                </div>
              </div>
           </div>
          </div>

           <!-- end  education-->
            <!-- start my-skills -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#130f40" fill-opacity="1" d="M0,96L24,122.7C48,149,96,203,144,202.7C192,203,240,149,288,117.3C336,85,384,75,432,112C480,149,528,235,576,234.7C624,235,672,149,720,133.3C768,117,816,171,864,197.3C912,224,960,224,1008,208C1056,192,1104,160,1152,170.7C1200,181,1248,235,1296,245.3C1344,256,1392,224,1416,208L1440,192L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>

            <div class="my-tools " style=" background:#130f40  ;">
              <div class=" container p-4">
               <div class="mb-3  ">
                 <span class="h3 mb-3 mt-3 section-title " style="
             
                 ">My Skills</span>
                 <p class="mt-3 text-white">Here are a few technologies I've been working with recently:
                </p>
             </div>
                  <div class="row my-skill-list mt-4" style="color:#fff" >
                       
                         <p class=" mb-4 col-sm-4 ">PHP</p>
                          <p class="mb-4  col-sm-4  " >MYSQL</p>
                          <p class="mb-4 col-sm-4  " >LARAVEL</p>
                          <p class=" col-sm-4 "> HTML/CSS </p>
                          <p class="col-sm-4 " >BOOTSTRAP</p>
                          <p class=" col-sm-4 " >VUEJS</p>
                        </div>
              </div>
             </div>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#130f40" fill-opacity="1" d="M0,64L30,106.7C60,149,120,235,180,240C240,245,300,171,360,138.7C420,107,480,117,540,117.3C600,117,660,107,720,90.7C780,75,840,53,900,74.7C960,96,1020,160,1080,186.7C1140,213,1200,203,1260,176C1320,149,1380,107,1410,85.3L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>             <!-- end my-skills -->
    <!-- end my-skills -->
     <!-- start contact me  -->
     <div class="contact-me">
      <div class=" container p-4">
        <div class="mb-3 mt-3">
          <span class="h3 section-title">Contact Me</span>
          <p class="mt-3 "> My inbox is always open. Whether you have a question or just want to say hi, I'll try my best to get back to you!

            <div class="row">
            <div class="offset-1 col-sm-6 mt-2"> 
          <form method="POST" action="{{url('sendemail/send')}}">
            {{ csrf_field() }}
            @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
          </div>
          @endif
        <input type="text" value="{{old('name')}}"  name="name" class="form-control mt-3 mb-3" placeholder="Your Name">
            <input type="email" value="{{old('email')}}" required name="email" class="form-control mt-3 mb-3" placeholder="Your Email">
            <input type="phone" value="{{old('phone')}}"name="phone" class="form-control mt-3 mb-3" placeholder="Your Phone [ optional ]">
            <textarea rows="5" required name="message" placeholder="Your Message" class="form-control">{{old('message')}}</textarea>
          <input type="submit" class="pl-3 pr-3 contact-me-submit-btn   btn btn-warning  " value="send">
          @if (count($errors) > 0)
          <div class="alert alert-danger">
           <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
          </ul>
          </div>
          @endif
        </form>
        </div>
          <div class="col-sm-5 mt-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2713293.93630849!2d30.497535229524164!3d14.822685900281384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15d91cc41072b195%3A0xd2bf70462a612b37!2sSudan!5e0!3m2!1sen!2s!4v1606239934774!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"   tabindex="0"></iframe>          </div>

        </div>
      </div>
        
      </div>
     </div>
      <!-- end contact me  -->
       <!-- start footer   -->
      <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#130f40" fill-opacity="1" d="M0,64L26.7,106.7C53.3,149,107,235,160,272C213.3,309,267,299,320,266.7C373.3,235,427,181,480,160C533.3,139,587,149,640,149.3C693.3,149,747,139,800,144C853.3,149,907,171,960,186.7C1013.3,203,1067,213,1120,213.3C1173.3,213,1227,203,1280,181.3C1333.3,160,1387,128,1413,112L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>      
        <div class="my-footer text-center text-white">
          <span>Designed and built with lots of love. <i class="fa fa-heart"></i></span>
          <br><span>
           <a target="_blank" class="social-media" href="https://www.facebook.com/hussam0683/">
            <i class="fa fa-facebook"></i>
             </a> 
           
             <a target="_blank" class="social-media" href="https://twitter.com/hussam0683">
              <i class="fa fa-twitter"></i>
               </a> 
               <a target="_blank" class="social-media" href="https://wa.me/+249112400011">
                <i class="fa fa-whatsapp"></i>
                 </a> 
          </span>
        </div>
      </footer>
        <!-- end footer   -->

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function(){
  $('.work-slider').slick({
    autoplay: true,
  autoplaySpeed: 4000,
  });
});
</script>
</html>

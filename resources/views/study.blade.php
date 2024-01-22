
@include('layouts.header')
         </div>
         <div class="bannerslider oneuspage">
            <div class="captionheader shadownone lefttextcap nohome">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <h1>World's <span>First</span></h1>
                     </div>
                  </div>
               </div>
            </div>
            <img src="{{ asset('web/images/atgalance.jpg')}}">
         </div>
         <section class="wecarepart atwecare">
            <div class="container">
               <div class="row mb-5 globeheading">
                  <div class="col-lg-6">
                     <div class="imgcall">  <img src="{{ asset('web/images/cloud-pro-img03.jpg')}}"></div>
                  </div>
                  <div class="col-lg-6">
                     <h4 class="">{{$heading}}</span></h4>
                  </div>
               </div>
            </div>
         </section>
         <section class="left-rightpart">
            <div class="container">
               <div class="row cloudimgrev">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <div class="textcloud">
                        <h3>AT A GLANCE </h3>
                        <p><strong>Challenges</strong></p>
                        <p>{{ $Challenges }}</p>
                        <p>Benefits</p>
                        <ol>
                           <li>{{ $Benefits1 }}</li>
                           <li>{{ $Benefits2 }}</li>
                           <li>{{ $Benefits3 }}</li>
                        </ol>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <div class="imgcall">  <img src="{{ asset('web/images/cloud-pro-img03.jpg')}}"></div>
                  </div>
               </div>
            </div>
         </section>
         <section class="right-leftpart">
            <div class="container">
               <div class="row cloudimgrev">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <div class="imgcall">  <img src="{{ asset('web/images/cloud-pro-img03.jpg')}}"></div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <div class="textcloud">
                        <h3>THE CHALLENGE </h3>
                        <p>{{$theChallenges}}</p>
                        <p>
                       
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="left-rightpart">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12 my-auto">
                     <div class="textcloud quoteimg">
                        <div class="quoteicon">
                          <img src="{{ asset('web/images/quoteicon.png')}}">
                        </div>
                       “{{$box}}"
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="textcloud">
                        <h2>OUR APPROACH</h2>
                           <p>{{$approachDescription}}

                    </p>
                     <ul>
                        <li> {{$approach1}}</li>
                        <li> {{$approach2}}</li>
                        <li> {{$approach3}}</li>
                        <li> {{$approach4}}</li>

                     </ul>
                      </div>
                     

                  
                  </div>
               </div>
            </div>
         </section>

           <section class="buildfaster ourbuildfaster">
            <div class="container">
               <div class="row cloudimgrev">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <div class="textcloud">
                        <h3>OUR SOLUTION </h3>
                        <p>{{$solutionDescription}}</p>
                        <ul>
                           <li>{{$solution1}}</li>
                           <li>{{$solution2}}</li>
                           <li>{{$solution3}}</li>
                           <li>{{$solution4}}</li>

                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <div class="imgcall">  <img src="{{ asset('web/images/cloud-pro-img04.jpg')}}"></div>
                  </div>
                  
               </div>
            </div>
         </section>

         
         <footer class="darkfooter">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <h6>Company</h6>
                     <ul class="fotnab">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="#">Career</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <h6>Help</h6>
                     <ul class="fotnab">
                        <li><a href="#"> Customer Support</a></li>
                        <li><a href="#">Delivery Details</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <h6>Resources</h6>
                     <ul class="fotnab">
                        <li><a href="#"> Free eBooks</a></li>
                        <li><a href="#">Development Tutorial</a></li>
                        <li><a href="#">How to - Blog</a></li>
                        <li><a href="#">Youtube Playlist</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <h6>Install App</h6>
                     <ul class="fotnab">
                        <li><a href="#"> <img src="{{ asset('/web/images/app-store.png')}}"> </a></li>
                        <li><a href="#"><img src="{{ asset('web/images/play-store.png')}}"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="container fotcopy">
               <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <p>© Copyright 2022, All Rights Reserved by DIS</p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <ul class="fotsocial">
                        <li><a href=""><img src="{{ asset('web/images/twitter-icon.svg')}}"></a></li>
                        <li><a href=""><img src="{{ asset('web/images/facebook-icon.svg')}}"></a></li>
                        <li><a href=""><img src="{{ asset('web/images/instagram-icon.svg')}}"></a></li>
                        <li><a href=""><img src="{{ asset('web/images/github-icon.svg')}}"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
         <script>
            $(document).ready(function() {
              var owl = $('.owl-bepart');
              owl.owlCarousel({
                margin: 0,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
            })
         </script>
      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>

@include('layouts.footer')
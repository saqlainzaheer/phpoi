@include('layouts.header')
<div class="bannerslider oneuspage">
  <div class="captionheader shadownone lefttextcap nohome">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Join <span>Us</span></h1>
        </div>
      </div>
    </div>
  </div>
  <video width="100%" height="100%" autoplay muted loop>
    <source src="{{ ('web/images/joinus.mp4')}}" type="video/mp4">
  </video>
</div>

<section class="wecarepart">
  <div class="container">
  @if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success')}}</p>
@endif
  @if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="row">
      <div class="col-lg-6 mx-auto text-center mb-75">
        <h4 class="mainheadingtext">Careers</h4>
        <p class="mb-5">The future of the fourth technological revolution remains uncertain, but what we do know is
that it should stem from and be driven by people. Joining DIS means not just getting the
tools for future tech challenges but also becoming part of an exclusive community.
</p>
        <a href="" class="btn btn-primary">Browse Open Positions</a>
      </div>
    </div>
    <div class="row mb-75">
      <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
        <div class="wecarefor">
          <img src="{{ ('web/images/joinus-img01.jpg')}}" alt="Dis">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-0">
        <div class="wecarefor">
          <img src="{{ ('web/images/joinus-img02.jpg')}}" alt="Dis">
        </div>
      </div>
    </div>
    <div class="row mb-75">
      <div class="col-lg-12 text-center">
        <h4 class="mainheadingtext">Values that define us</h4>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-4">
        <div class="joinusbox">
          <span> <img src="{{ ('web/images/joinus-icon01.svg')}}" class="iconjoin"></span>
          <h3>Employee Well-being</h3>
          <p>Fostering an inclusive and supportive work environment where everyone feels valued and
motivated to contribute their best.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="joinusbox">
          <span> <img src="{{ ('web/images/joinus-icon02.svg')}}" class="iconjoin"></span>
          <h3>Professional Growth</h3>
          <p>Extending to the professional growth of our employees, we provide opportunities for skill
development, training, and advancement, empowering them to thrive in their careers</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="joinusbox">
          <span> <img src="{{ ('web/images/joinus-icon03.svg')}}" class="iconjoin"></span>
          <h3> Work-Life Balance</h3>
          <p>Maintaining a healthy balance between work and personal life, our flexible work policies
ensure that employees can achieve equilibrium, leading to a great productivity.</p>
        </div>
      </div>
    </div>
    <div class="row mb-75">
      <div class="col-lg-4">
        <div class="joinusbox">
          <span> <img src="{{ ('web/images/joinus-icon04.svg')}}" class="iconjoin"></span>
          <h3>Ethical Leadership</h3>
          <p>Promoting transparency, fairness, and honesty in all aspects of our work, which leads to our
employees trust in the integrity of our leadership.
</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="joinusbox">
          <span> <img src="{{ ('web/images/joinus-icon05.svg')}}" class="iconjoin"></span>
          <h3>Environment Responsibility</h3>
          <p>We are committed to sustainable practices, minimizing our carbon footprint, and contributing
positively to the communities in which we operate.
</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="joinusbox">
          <span> <img src="{{ ('web/images/joinus-icon06.svg')}}" class="iconjoin"></span>
          <h3>Adaptability</h3>
          <p>Believing in the dynamic landscape of digital realm, we understand “adaptability is the key”.
We encourage a culture of flexibility, allowing our team to navigate challenges, embrace
change, and thrive in an ever-evolving industry.
</p>
        </div>
      </div>
    </div>
    <div class="row mb-75 mt-75">
      <div class="col-lg-12 text-center">
        <h4 class="mainheadingtext">Current job open positions</h4>
      </div>
    </div>

    <div class="row mb-4">
    @forelse($jobPositions as $key=> $position)

      <div class="col-lg-6">
        <div class="currentjob">

          <h3>{{$position->title}}</h3>
          <span><a href="#"> {{$position->subtitle}}</a></span>
          <p> {{$position->description}}</p>
          <a href="#" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal{{$key}}" data-bs-toggle="modal" data-bs-target="#exampleModal{{$key}}">Apply Now</a>
          <!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->
        </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply Now</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
    <form action="{{url('/apply-now')}}" method="post"  enctype="multipart/form-data">
      
        @csrf
       <div class="mb-3">
       <input type="hidden" name="id" value="{{$position->id}}">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="John Doe">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
        <input type="number" class="form-control" name="phone_number" id="exampleFormControlInput1" placeholder="+15345454453">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Resume</label>
        <input type="file" class="form-control" name="resume" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <input type="submit"  class="btn btn-primary" value="Save changes">
      </div>
    </form>

      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
       
      </div>
      
    </div>
  </div>
</div>
        @empty
        <p>No jobs available.</p>
    @endforelse
</div>

      <!-- <div class="currentjob">

        <h3>Web Designer & Developer</h3>
        <span><a href="#"> San Francisco, CA</a> </span>| <span> <a href="#"> Part Time</a></span>
        <p>It is a long established fact that a reader will be distracted by the readable. Lorem Ipsum looking at it layout.</p>
        <a href="#" class="btn btn-outline-dark">Apply Now</a>
        </div>
     </div>
      <div class="col-lg-6">
        <div class="currentjob">

          <h3>Front-end developer</h3>
          <span><a href="#"> San Francisco, CA</a> </span>| <span> <a href="#"> Part Time</a></span>
          <p>It is a long established fact that a reader will be distracted by the readable. Lorem Ipsum looking at it layout.</p>
          <a href="#" class="btn btn-outline-dark">Apply Now</a>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-lg-6">
        <div class="currentjob">

          <h3>SEO Specialist</h3>
          <span><a href="#"> San Francisco, CA</a> </span>| <span> <a href="#"> Full Time</a></span>
          <p>It is a long established fact that a reader will be distracted by the readable. Lorem Ipsum looking at it layout.</p>
          <a href="#" class="btn btn-outline-dark">Apply Now</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="currentjob">

          <h3>UI / UX Designer</h3>
          <span><a href="#"> San Francisco, CA</a> </span>| <span> <a href="#"> Full Time</a></span>
          <p>It is a long established fact that a reader will be distracted by the readable. Lorem Ipsum looking at it layout.</p>
          <a href="#" class="btn btn-outline-dark">Apply Now</a>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-lg-6">
        <div class="currentjob">

          <h3>Backend Developer</h3>
          <span><a href="#"> San Francisco, CA</a> </span>| <span> <a href="#"> Part Time</a></span>
          <p>It is a long established fact that a reader will be distracted by the readable. Lorem Ipsum looking at it layout.</p>
          <a href="#" class="btn btn-outline-dark">Apply Now</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="currentjob">

          <h3>Condent Wrtiter</h3>
          <span><a href="#"> San Francisco, CA</a> </span>| <span> <a href="#"> Part Time</a></span>
          <p>It is a long established fact that a reader will be distracted by the readable. Lorem Ipsum looking at it layout.</p>
          <a href="#" class="btn btn-outline-dark">Apply Now</a>
        </div>
      </div>
    </div> -->


  </div>
</section>





@include('layouts.footer')
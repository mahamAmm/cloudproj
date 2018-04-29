
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa d-inline fa-lg fa-cloud"></i><b>&nbsp; Cloud Services</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-bookmark-o"></i> Bookmarks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-envelope-o"></i> Contacts</a>
          </li>
        </ul>
        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a  href="{{ route('login') }}"class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
                    <a  href="{{ route('register') }}"class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Register</a>

                    @endauth
                </div>
            @endif
      </div>
    </div>
  </nav>
  <div class="py-5 text-center" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_event.jpg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-3 mb-4 text-primary">Cloud Services</h1>
          <p class="lead mb-5"> <h2 >Azure is the right choice</h2> <br />

Organizations all over the world recognize Azure over AWS as the most trusted cloud.<br />

    More regions than any other cloud provider<br />
    The only consistent hybrid cloud<br />
    Unparalleled developer productivity<br />

</p>
          <a href="{{ route('register') }}" class="btn btn-lg btn-primary mx-1">Start Free</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="mb-4 text-primary">Trust the cloud that helps protect your work</h1>
          <p class="lead">our features are</p>
          <div class="row text-left mt-5">
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-mars"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary"><b>Reduce risk and complexity with real hybrid consistency</b></h5>
                </div>
              </div>
              <p>With the hybrid environment, we have the flexibility to place our applications and data on the appropriate cloud, based on our business, technology, and regulatory needs.</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2 col-md-4"><i class="d-block mx-auto fa fa-3x fa-venus"></i></div>
                <div class="align-self-center col-10 col-md-8">
                <h5 class="text-secondary"><b>Expand globally with the most regions</b></h5>

                </div>
                <div class="align-self-center col-10 col-md-4">
                  <h5 class="text-secondary">
                    <br> </h5>
                </div>
              </div>
              <p>All the traffic that we had—and it was more than we ever had before—went through the new Azure architecture and it was remarkably trouble-free.</p>
            </div>
            <div class="col-md-4 my-3">
              <div class="row mb-3">
                <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-neuter"></i></div>
                <div class="align-self-center col-10">
                  <h5 class="text-secondary">&nbsp;Certifications&nbsp;</h5>
                </div>
              </div>
              <p>Globalization requires that companies redefine their strategies and processes in order to achieve the efficient use of resources and increased productivity.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">Cloud Services</h2>
          <p class="text-white">one stop solution for your cloud services</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-secondary">Mapsite</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-white">Home</a>
            <br>
            <a href="#" class="text-white">About us</a>
            <br>
            <a href="#" class="text-white">Our services</a>
            <br>
            <a href="#" class="text-white">Stories</a>
          </ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Contact</h2>
          <p>
            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>0</a>21-3918291</p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>info@cloudservices.com</a>
          </p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>Address is IBA</a>/p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">Subscribe</h2>
          <form>
            <fieldset class="form-group text-white"> <label for="exampleInputEmail1">Get our newsletter</label>
              <input type="email" class="form-control" placeholder="Enter email"> </fieldset>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2018 cloud services- All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:180px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>
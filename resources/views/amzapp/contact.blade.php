@extends('layout.app')

@section('content')
<div class="offcanvas-info inverse-text">
      <button class="plain offcanvas-close offcanvas-info-close"><i class="jam jam-close"></i></button>
      <a href="index.html"><img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" /></a>
      <div class="space30"></div>
      <p>Snowlake is a multi-concept and powerful site template contains rich layouts with possibility of unlimited combinations & beautiful elements.</p>
      <div class="space20"></div>
      <div class="widget">
        <h5 class="widget-title">Contact Info</h5>
        <address> Moonshine St. 14/05 <br /> Light City, London <div class="space20"></div>
          <a href="mailto:first.last@email.com" class="nocolor">info@email.com</a><br /> +00 (123) 456 78 90 </address>
      </div>
      <!-- /.widget -->
      <div class="widget">
        <h3 class="widget-title">Learn More</h3>
        <ul class="list-unstyled">
          <li><a href="#" class="nocolor">Our Story</a></li>
          <li><a href="#" class="nocolor">Terms of Use</a></li>
          <li><a href="#" class="nocolor">Privacy Policy</a></li>
          <li><a href="#" class="nocolor">Contact Us</a></li>
        </ul>
      </div>
      <!-- /.widget -->
      <div class="widget">
        <h3 class="widget-title">Follow Us</h3>
        <ul class="social social-mute social-s ml-auto">
          <li><a href="#"><i class="jam jam-twitter"></i></a></li>
          <li><a href="#"><i class="jam jam-facebook"></i></a></li>
          <li><a href="#"><i class="jam jam-instagram"></i></a></li>
          <li><a href="#"><i class="jam jam-vimeo"></i></a></li>
          <li><a href="#"><i class="jam jam-youtube"></i></a></li>
        </ul>
      </div>
      <!-- /.widget -->
    </div>
    <!-- /.offcanvas-info -->
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/bg3.jpg">
      <div class="container inner text-center">
        <div class="space90"></div>
        <h1 class="page-title">Contact Us</h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
      </div>
      <!-- /.container -->
    </div>

	<!-- Success Message start -->
	@if (session('success'))
	<div class="alert alert-success" role="alert"> 
	{{ session('success') }}
	</div>
	@endif
	<!-- Success Message end -->

    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <h2 class="section-title">How can we help?</h2>
        <p class="lead larger">If you have any questions, please fill out the form below. We will get back to you within 24 hours.</p>
        <div class="space40"></div>
        <div class="row">
          <div class="col-lg-7">
            <form class="fields-white" method="post" action="{{route('contact')}}">
			      @csrf
              <div class="messages"></div>
                <div class="controls">
                  <div class="form-row">
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name *">
                        @error('name')
                        <div class="help-block with-errors">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
				      <div class="col-lg-12 col-xl-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email *">
					            @error('email')
              		    <div class="help-block with-errors">{{$message}}</div>
            		      @enderror
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-12 col-xl-12">
                    <div class="form-group">
                      <input type="text" name="asin" class="form-control" placeholder="ASIN">
					            @error('asin')
              		    <div class="help-block with-errors">{{$message}}</div>
            		      @enderror
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control" placeholder="Message *" rows="4"></textarea>
					            @error('message')
              		    <div class="help-block with-errors">{{$message}}</div>
            		      @enderror
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <!-- hidden page_id field -->
                  <input type="hidden" name="page_id" value="2">

                  <div class="col-md-12">
                    <input type="submit" class="btn btn-send" value="Send message">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                  </div>
                </div>
              </div>
            </form>
            <!-- /form -->
          </div>
          <!--/column -->
          <div class="space30 d-none d-md-block d-lg-none"></div>
          <div class="col-lg-4 offset-lg-1">
            <div class="d-flex flex-row">
              <div>
                <div class="icon color-default fs-34 mr-25"> <i class="icofont-location-pin"></i> </div>
              </div>
              <div>
                <h6 class="mb-5">Address</h6>
                <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United Kingdom</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon color-default fs-34 mr-25"> <i class="icofont-telephone"></i> </div>
              </div>
              <div>
                <h6 class="mb-5">Phone</h6>
                <p>00 (123) 456 78 90 <br class="d-none d-md-block" />00 (987) 654 32 10</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon color-default fs-34 mr-25"> <i class="icofont-mail-box"></i> </div>
              </div>
              <div>
                <h6 class="mb-5">E-mail</h6>
                <p><a href="mailto:snowlake@email.com" class="nocolor">snowlake@email.com</a> <br class="d-none d-md-block" /><a href="mailto:help@snowlake.com" class="nocolor">help@snowlake.com</a></p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->

@endsection

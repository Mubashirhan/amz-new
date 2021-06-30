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
    <div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/bg4.jpg">
      <div class="container inner text-center">
        <div class="space90"></div>
        <h1 class="page-title">Home</h1>
        <p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
      </div>
      <!-- /.container -->
    </div>
    <div class="wrapper light-wrapper">
      <div class="image-block-wrapper">
        <div class="image-block col-lg-6 p-0">
          <div class="google-map map-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.4564967931838!2d-122.03250858386237!3d37.33169997984258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5b6e94ffe23%3A0x63bb79532baa6af4!2sApple+Campus!5e0!3m2!1sen!2str!4v1553850783971!5m2!1sen!2str" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
          </div>
          <!--/.google-map -->
        </div>
        <!--/.image-block -->

        <!-- Success Message start -->
        @if (session('success'))
        <div class="alert alert-success" role="alert"> 
        {{ session('success') }}
        </div>
        @endif
        <!-- Success Message end -->

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 offset-lg-6">
              <div class="box d-flex pr-25">
                <div class="align-self-center">
                  <h3>What's your Amazon SEO Score?</h3>
                  <p>See how well your listing is optimized?</p>
                  <div class="space30"></div>
                  <form method="post" action="{{route('contact')}}">
                    @csrf
                    <div class="controls">
                      <div class="form-row">
                        <div class="col-lg-12 col-xl-12">
                          <div class="form-group">
                            <input type="text" name="asin" class="form-control" placeholder="URL or ASIN *">
                            @error('asin')
                            <div class="help-block with-errors">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-12 col-xl-6">
                          <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email *">
                            @error('email')
                            <div class="help-block with-errors">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Company Name *">
                            @error('name')
                            <div class="help-block with-errors">{{$message}}</div>
                            @enderror
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
                          </div>
                        </div>
                        <!-- hidden do_post field -->
                        <input type="hidden" name="page_id" value="1">

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
              </div>
              <!-- /.box -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.container-fluid -->
      </div>
      <!--/.image-block-wrapper -->
    </div>
    <!-- /.wrapper -->
@endsection

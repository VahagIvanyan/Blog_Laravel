@extends('main')

@section('title','| Homepage')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to VIB(VIctory Blog)!</h1>
          <p class="lead">Thank You For Visiting.</p>
            <h2 style="color: purple;"> Read The Popular Posts!<br>
            Register and Like/Dislike them! Winner will get the JackPot.</h2><br>
           <a href="#" class="btn btn-success">Register</a>
         
      </div>
    </div>
  </div><!-- end of header .row -->
  <div class="row">
    <div class="col-md-8">
      <div class="post">
         <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
        <h3>Post Title</h3>
        <p>"in vino veritas, in cervesio felicitas, in aqua sanitas" - in wine there is truth, in beer there is joy, in water there is health. </p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
      <hr>
      <div class="post">
        <h3>Post Title</h3>
        <p>"in vino veritas, in cervesio felicitas, in aqua sanitas" - in wine there is truth, in beer there is joy, in water there is health. </p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
      <hr>
    </div>
    <div class="col-md-3 col-md-offset-1" style="background-color:#A9A9A9;">
      <h2>Sidebar</h2>
    </div>
  </div>
@endsection
@section('scripts')
  <!--script>
    confirm('I loaded up some JS');
  </script-->
@endsection
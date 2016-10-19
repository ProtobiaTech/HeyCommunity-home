@extends('layouts.default-home')

@section('content')
<div id="getting-started">
  <br>
  <br>
  <br>
  <div class="text-center">
    <h2>Start building with Ionic!</h2>
    <p class="sub-heading">
      These three simple steps will have you building high-quality mobile apps
      in minutes. For a more in-depth overview, watch our <a target="_blank" href="https://www.youtube.com/watch?v=C-UwOWB9Io4&amp;feature=youtu.be">Crash
      Course video</a>, or take our free online Ionic and Angular course, <a target="_blank" href="http://appcamp.io/">Appcamp</a>.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <br>
        <br>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')
<section class="container-fluid login">
</section>
<section class="container">
<div class="row">
<div class="col-lg-2 col-lg-offset-5 centered">
<form  class="" role="form">

 <div class="form-group">


      <input type="text" class="form-control" id="inputUsername" placeholder="Username">

  </div>
 <div class="form-group">


      <input type="password" class="form-control" id="inputPassword" placeholder="Password">

  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</section>


@stop

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block flash">
  <button type="button" class="close" data-dismiss='alert'>Successful!</button>
 
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block flash p-3 mt-1 py-2">
  <button type="button" class="close" data-dismiss='alert'>wrong email or password</button>
  
</div>
@endif


@if ($message = Session::get('successverified'))
<div class="alert alert-success alert-block flash">
  <button type="button" class="close" data-dismiss='alert'>confirmed <a href="/admin"> Click here </a> to login</button>
 <p></p>
</div>
@endif


@if ($message = Session::get('errorconfirm'))
<div class="alert alert-danger alert-block flash">
  <button type="button" class="close" data-dismiss='alert'>Please confirm your verification code</button>
  <p></p>
</div>
@endif

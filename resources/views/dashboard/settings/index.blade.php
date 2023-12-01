@extends('dashboard.layout.layout')

@section('body')

<form action="{{route('dashboard.settings.update')}}" method="post" enctype="multipart/form-data">

@csrf
@method('PUT')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Name -->
<div class="mb-3">
  <input name="name" type="text" class="form-control" placeholder="Name">
</div>

<!-- description -->
<div class="mb-3">
  <input name="description" type="text" class="form-control" placeholder="Description">
</div>

<!-- email -->
<div class="mb-3">
  <input name="email" type="email" class="form-control" placeholder="Email">
</div>

<!-- phone -->
<div class="mb-3">
  <input name="phone" type="number" class="form-control" placeholder="Phone">
</div>

<!-- address -->
<div class="mb-3">
  <textarea name="address" placeholder="Enter address" class="form-control" rows="3"></textarea>
</div>

<!-- facebook -->
<div class="mb-3">
    <input name="facebook" type="text" class="form-control" placeholder="Facebook link">
</div>

<!-- instagram -->
<div class="mb-3">
    <input name="instagram" type="text" class="form-control" placeholder="Instagram link">
</div>

<!-- twitter -->
<div class="mb-3">
    <input name="twitter" type="text" class="form-control" placeholder="Twitter link">
</div>

<!-- youtube -->
<div class="mb-3">
    <input name="youtube" type="text" class="form-control" placeholder="Youtube link">
</div>

<!-- tiktok -->
<div class="mb-3">
    <input name="tiktok" type="text" class="form-control" placeholder="Tiktok link">
</div>

<!-- add logo -->

<div class="mb-3">
  <label for="formFile" class="form-label">Upload logo file</label>
  <input name="logo" class="form-control" type="file" id="formFile">
</div>

<!-- /add logo -->

<!-- add favicon -->

<div class="mb-3">
  <label for="formFile" class="form-label">Upload favicon file</label>
  <input name="favicon" class="form-control" type="file" id="formFile">
</div>

<!-- /add favicon -->

<!-- submit -->
<button class="btn btn-primary d-block m-auto" type="submit">Save</button>
</form>

@endsection

@extends('dashboard.layout.layout')

@section('body')

<form action="{{route('dashboard.settings.update', $setting->id)}}" method="post" enctype="multipart/form-data">

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

@if(session()->has('success'))
<div class="alert alert-info">{{session()->get('success')}}</div>
@endif
<!-- Name -->
<div class="mb-3">
  <input name="name" type="text" class="form-control" placeholder="Name" value="{{$setting->name}}">
</div>

<!-- description -->
<div class="mb-3">
  <input name="description" type="text" class="form-control" placeholder="Description" value="{{$setting->description}}">
</div>

<!-- email -->
<div class="mb-3">
  <input name="email" type="email" class="form-control" placeholder="Email" value="{{$setting->email}}">
</div>

<!-- phone -->
<div class="mb-3">
  <input name="phone" type="number" class="form-control" placeholder="Phone" value="{{$setting->phone}}">
</div>

<!-- address -->
<div class="mb-3">
  <textarea name="address" placeholder="Enter address" class="form-control" rows="3"></textarea>
</div>

<!-- facebook -->
<div class="mb-3">
    <input name="facebook" type="text" class="form-control" placeholder="Facebook link" value="{{$setting->facebook}}">
</div>

<!-- instagram -->
<div class="mb-3">
    <input name="instagram" type="text" class="form-control" placeholder="Instagram link" value="{{$setting->instagram}}">
</div>

<!-- twitter -->
<div class="mb-3">
    <input name="twitter" type="text" class="form-control" placeholder="Twitter link" value="{{$setting->twitter}}">
</div>

<!-- youtube -->
<div class="mb-3">
    <input name="youtube" type="text" class="form-control" placeholder="Youtube link" value="{{$setting->youtube}}">
</div>

<!-- tiktok -->
<div class="mb-3">
    <input name="tiktok" type="text" class="form-control" placeholder="Tiktok link" value="{{$setting->tiktok}}">
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

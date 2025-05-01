@extends('layouts.master')
@section('title', 'Vigilium - Profil')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12 ">
                <div class="breadcrumb-path mb-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><img src="{{asset('img/dash.png')}}" class="mr-2" alt="breadcrumb">Home</a>
                        </li>
                        <li class="breadcrumb-item active"> Setting</li>
                    </ul>
                    <h3>Profile	</h3>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="head-link-set">
                    <ul>
                        <li><a href="{{ route('setting', ['section' => 'employement']) }}" class="{{ $section == 'employement' ? 'active' : '' }}">Employement</a></li>
                        <li><a href="profile-detail.html">Detail</a></li>
                        <li><a href="profile-document.html">Document</a></li>
                        <li><a href="profile-payroll.html">Payroll</a></li>
                        <li><a href="profile-timeoff.html">Timeoff</a></li>
                        <li><a href="profile-review.html">Reviews</a></li>
                        <li><a href="{{ route('setting', ['section' => 'profile']) }}" class="{{ $section == 'profile' ? 'active' : '' }}">Profil</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 ">
                <div class="row">
                    <div class="col-xl-6 col-sm-12 col-12">
                        <div class="card ">
                            <div class="card-header">
                                <h2 class="card-titles">Photo de profil</h2>
                            </div>
                            <div class="card-body">
                                <div class="company-logo">
                                    @if(Auth::user()->profile_photo)
                                        <form action="{{ route('storeprofile') }}" method="POST" enctype="multipart/form-data" style="display: inline;">
                                            @csrf
                                            <label class="logo-upload" for="edit_img">
                                                <input type="file" name="profile_photo" id="edit_img" class="form-control" style="display: none;" onchange="this.form.submit()">
                                                <a><i data-feather="edit"></i></a> 
                                            </label>
                                        </form>
                                        <img src="{{ asset('storage/profile/' . Auth::user()->profile_photo) }}" alt="Profile Image" width="150" height="150" />
                                    @else
                                        <i class="fas fa-user-circle fa-3x"></i>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-titles">Change Password
                                    <span>Your password needs to be at least 8 characters long.</span>
                                </h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('edit_password') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" name="current_password" placeholder="Current Password" class="form-control" value="{{ old('current_password') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="new_password" placeholder="New Password" class="form-control" value="{{ old('new_password') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="repeat_password" placeholder="Repeat Password" class="form-control" value="{{ old('repeat_password') }}">
                                    </div>
                                    <div class="btn-set pl-0">
                                        <button type="submit" class="btn btn-apply">Change My Password</button>
                                    </div>
                                </form>
                            </div>                            
                    </div>                    
                </div>
            </div>	
        </div>
        
    </div>
</div>
<!-- /Page Wrapper -->

<!-- popup screen -->
<div class="customize_popup">
    <div class="modal fade" id="addteam" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lgs">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Create New Team</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class=" col-md-12 p-0">
                    <div class=" form-popup">
                        <label>Team Name</label>
                        <input type="text" >
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Add</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
      </div>
    </div>
</div>
@endsection

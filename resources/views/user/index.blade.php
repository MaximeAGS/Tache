@extends('layouts.master_user')
@section('title', 'Vigilium - Dashbord')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-name 	mb-4">
                <h4 class="m-0">
                    @if(Auth::user()->profile_photo)
                        <img src="{{ asset('storage/profile/' . Auth::user()->profile_photo) }}" alt="Profile Image" width="50" height="50" />
                    @else
                        <i class="fas fa-user-circle fa-2x"></i> 
                    @endif
                    Bienvenue, {{ ucfirst(Auth::user()->username) }}
                </h4>
                
                <label><?php setlocale(LC_TIME, 'fr_FR.UTF-8', 'fra'); echo strftime('%a, %d %b %Y'); ?></label>
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 col-sm-12 col-12">
                    <div  class="breadcrumb-path ">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" ><img src="{{asset('img/dash.png')}}" class="mr-3"  alt="breadcrumb"/>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                        <h3>Admin Dashboard</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6 col-12">
                            <a class="btn-dash" href="#"> Admin Dashboard</a>
                        </div>
                        <div class="col-xl-6 col-sm-6 col-12">
                            <a class="btn-emp" href="index-employee.html">Employee Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill1 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Personnels</label>
                                <h4>{{ $userCount }}</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{asset('img/dash1.png')}}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill2 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Projets</label>
                                <h4>{{ $projectCount }}</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{asset('img/dash2.png')}}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill3 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Tâches</label>
                                <h4>{{ $taskCount }}</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{asset('img/dash3.png')}}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill4 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Salaire</label>
                                <h4>{{ $totalSalary }} CFA</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="{{asset('img/dash4.png')}}" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-sm-12 col-12 d-flex">
                    <div class="card card-list flex-fill" >
                        <div class="card-header ">
                            <h4 class="card-title">Total Salary By Unit</h4>
                        </div>
                        <div class="card-body">
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{asset('img/profiles/avatar-03.jpg')}}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>Maria Cotton</label>
                                        <span>PHP</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2" ></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{asset('img/profiles/avatar-04.jpg')}}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>Linda Craver</label>
                                        <span>IOS</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2" ></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{asset('img/profiles/avatar-06.jpg')}}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>Jenni Sims</label>
                                        <span>Android</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2" ></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-img">
                                        <img src="{{asset('img/profiles/avatar-11.jpg')}}" alt="avatar" />
                                    </div>
                                    <div class="team-content">
                                        <label>Danny</label>
                                        <span>Design</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a><i data-feather="trash-2"></i></a></li>
                                        <li><a><i data-feather="edit-2" ></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12 col-12 d-flex">
                    <div class="card card-list flex-fill" >
                        <div class="card-header">
                            <div class="">
                                <h4 class="card-title">Recent Activities</h3>
                            </div>
                        </div>
                        <div class="card-body dash-activity">
                            <div class="slimscroll activity_scroll">
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-05.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>3 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-07.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>4 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-08.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>5 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-09.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>6 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-10.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-12.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>3 hours ago</span>
                                    </div>
                                </div>
                                <div class="activity-set">
                                    <div class="activity-img">
                                        <img src="{{asset('img/profiles/avatar-13.jpg')}}" alt="avatar">
                                    </div>
                                    <div class="activity-content">
                                        <label>Lorem ipsum dolor sit amet,</label>
                                        <span>4 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-viewall activit">
                                <a>View all <img src="{{asset('img/right-arrow.png')}}" class="ml-2" alt="arrow"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12 col-12 d-flex">
                    <div class="card card-list flex-fill">
                        <div class="card-header ">
                            <h4 class="card-title-dash">Your Upcoming Leave</h4>
                            <div class="dropdown">
                                <button class="btn btn-action " type="button" id="roomsBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="roomsBtn" >
                                    <a class="dropdown-item" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="leave-set">
                                <span class="leave-inactive">	
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Mon, 16 Dec 2021</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Fri, 20 Dec 2021</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Wed, 25 Dec 2021</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Fri, 27 Dec 2021</label>
                            </div>
                            <div class="leave-set">
                                <span class="leave-active">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <label>Tue, 31 Dec 2021</label>
                            </div>
                            <div class="leave-viewall">
                                <a href="leave.html">View all <img src="{{asset('img/right-arrow.png')}}" class="ml-2" alt="arrow" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
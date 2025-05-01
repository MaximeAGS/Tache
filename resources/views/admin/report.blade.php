@extends('layouts.master')
@section('title', 'Vigilium - Report')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12 ">
                <div class="breadcrumb-path mb-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><img src="{{asset('img/dash.png')}}" class="mr-2" alt="breadcrumb">Home</a>
                        </li>
                        <li class="breadcrumb-item active"> Reports</li>
                    </ul>
                    <h3>Reports	</h3>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="head-link-set">
                    <ul>
                        <li><a class="active" href="#">Team Reports</a></li>
                        <li><a href="leave-report.html">Leave Reports</a></li>
                        <li><a href="payroll-report.html">Payroll Reports</a></li>
                        <li><a href="contact-report.html">Contact Reports</a></li>
                        <li><a href="email-report.html">Email Reports</a></li>
                        <li><a href="security-report.html">Security Reports</a></li>
                        <li><a href="wfh-report.html">W F H Reports</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="form-set">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 ">
                            <div class="form-group">
                                <input type="text" placeholder="start Date">
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text"   placeholder="From">
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 ">
                            <div class="form-group">
                                <input type="text" placeholder="To">
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 ">
                            <a class="btn btn-save">Apply Filter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="head-link-set">
                    <ul>
                        <li><a class="active" href="#">Offical Reports</a></li>
                        <li><a href="personal-report.html">Personal  Reports</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table  custom-table  no-footer">
                            <thead>
                                <tr >
                                    <th>Reviewers</th>
                                    <th>Active	</th>
                                    <th>Employment</th>
                                    <th>Email</th>
                                    <th>Job Title	</th>
                                    <th>Line Manager	</th>
                                    <th>Team Name	</th>
                                    <th>Start Date	</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{asset('img/profiles/avatar-10.jpg')}}" alt="profile" class="img-table"></a>
                                            <label>Danny Ward</label>
                                        </div>
                                    </td>
                                    <td class="tab-select">
                                        <select  class="select">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </td>		
                                    <td>
                                        <label>Permanent</label>
                                    </td>
                                    <td><label><a href="https://dleohr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f1f4fbece2f4e7f1d5f0edf4f8e5f9f0bbf6faf8">[email&#160;protected]</a>	</label></td>
                                    <td><label>Team Lead</label></td>
                                    <td><label>Richard Wilson	</label></td>
                                    <td><label>Designing</label></td>
                                    <td>
                                        <label>Designing</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{asset('img/profiles/avatar-17.jpg')}}" alt="profile" class="img-table"></a>
                                            <label>Linda Craver</label>
                                        </div>
                                    </td>
                                    <td class="tab-select">
                                        <select  class="select">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Permanent</label>
                                    </td>
                                    <td><label><a href="https://dleohr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1cdc8cfc5c0c2d3c0d7c4d3e1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a></label></td>
                                    <td><label>Team Lead</label></td>
                                    <td><label>Richard Wilson	</label></td>
                                    <td><label>Designing</label></td>
                                    <td>
                                        <label>Designing</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{asset('img/profiles/avatar-19.jpg')}}" alt="profile" class="img-table"></a>
                                            <label>Jenni Sims</label>
                                        </div>
                                    </td>
                                    <td class="tab-select">
                                        <select  class="select">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Permanent</label>
                                    </td>
                                    <td><label><a href="https://dleohr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e8828d8686819b81859ba88d90898598848dc68b8785">[email&#160;protected]</a></label></td>
                                    <td><label>Team Lead</label></td>
                                    <td><label>Richard Wilson	</label></td>
                                    <td><label>Designing</label></td>
                                    <td>
                                        <label>Designing</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{asset('img/profiles/avatar-14.jpg')}}" alt="profile" class="img-table"></a>
                                            <label>Maria Cotton</label>
                                        </div>
                                    </td>
                                    <td class="tab-select">
                                        <select  class="select">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Permanent</label>
                                    </td>
                                    <td><label><a href="https://dleohr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e636f7c676f6d617a7a61604e6b766f637e626b206d6163">[email&#160;protected]</a></label></td>
                                    <td><label>Team Lead</label></td>
                                    <td><label>Richard Wilson	</label></td>
                                    <td><label>Designing</label></td>
                                    <td>
                                        <label>Designing</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html"><img src="{{asset('img/profiles/avatar-18.jpg')}}" alt="profile" class="img-table"></a>
                                            <label>John Gibbs</label>
                                        </div>
                                    </td>
                                    <td class="tab-select">
                                        <select  class="select">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Permanent</label>
                                    </td>
                                    <td><label><a href="https://dleohr.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c76737472786e656f787d70795c79647d716c7079327f7371">[email&#160;protected]</a></label></td>
                                    <td><label>Team Lead</label></td>
                                    <td><label>Richard Wilson	</label></td>
                                    <td><label>Designing</label></td>
                                    <td>
                                        <label>Designing</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.main')
@section('title', 'Add Teacher')
@section('main-body')
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3> Teacher Entry Form</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p><a href="index-2.html">Dashboard</a> <i class="fas fa-caret-right"></i> Teacher Entry Form</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card_box box_shadow position-relative mb_30">
                    <div class="white_box_tittle">
                        <div class="main-title2">
                            <h4 class="mb-2 nowrap">Teacher Entry Form</h4>
                        </div>
                    </div>
                    <form class="theme-form" action="/addTeacher" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Teacher Name</label>
                                    <div class="col-xl-5 col-sm-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Date of Birth</label>
                                    <div class="col-xl-5 col-sm-9 common_date_picker">
                                        <input class="datepicker-here digits" type="text" data-language="en" name="date_of_birth">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Address</label>
                                    <div class="col-xl-5 col-sm-9">
                                        <textarea class="form-control" rows="3" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Subject Taught</label>
                                    <div class="col-xl-5 col-sm-9">
                                        <select class="form-select" name="subject_taught">
                                            <option selected disabled>Select Subject</option>
                                            <option value="English">English</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Science">Science</option>
                                            <option value="Social Studies">Social Studies</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Physical Education">Physical Education</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Class Assigned</label>
                                    <div class="col-xl-5 col-sm-9">
                                        <select class="form-select" name="class_assigned_id">
                                            @foreach($classes as $id => $className)
                                                <option value="{{ $id }}">{{ $className }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

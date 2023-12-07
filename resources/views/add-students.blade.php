@extends('layouts.main')
@section('title','Add Student')
        @section('main-body')
        <div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="dashboard_header mb_50">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard_header_title">
                            <h3> Student Entry Form</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dashboard_breadcam text-end">
                            <p><a href="index-2.html">Dashboard</a> <i class="fas fa-caret-right"></i> Student Entry Form</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card_box box_shadow position-relative mb_30">
                <div class="white_box_tittle">
                    <div class="main-title2">
                        <h4 class="mb-2 nowrap">Student Entry Form</h4>
                    </div>
                </div>
                <div class="box_body">
                <form class="theme-form" action="/AddStudent" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Student Name</label>
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
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Class</label>
                            <div class="col-xl-5 col-sm-9">
                                <select class="form-select" name="class">
                                    @foreach($classes as $id => $className)
                                        <option value="{{ $id }}">{{ $className }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Gender</label>
                            <div class="col-xl-5 col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Religion</label>
                            <div class="col-xl-5 col-sm-9">
                                <input type="text" class="form-control" name="religion">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Community</label>
                            <div class="col-xl-5 col-sm-9">
                                <input type="text" class="form-control" name="community">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Mother Tongue</label>
                            <div class="col-xl-5 col-sm-9">
                                <input type="text" class="form-control" name="mother_tongue">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Father's Name</label>
                            <div class="col-xl-5 col-sm-9">
                                <input type="text" class="form-control" name="father_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Mother's Name</label>
                            <div class="col-xl-5 col-sm-9">
                                <input type="text" class="form-control" name="mother_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Parent Number</label>
                            <div class="col-xl-5  col-sm-9">
                                <input type="text" class="form-control" name="parent_number">
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
      
  
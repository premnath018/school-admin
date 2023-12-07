@extends('layouts.main')
@section('title', 'Add Class')
@section('main-body')
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3> Class Entry Form</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p><a href="index-2.html">Class</a> <i class="fas fa-caret-right"></i>Add Class</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card_box box_shadow position-relative mb_30">
                    <div class="white_box_tittle">
                        <div class="main-title2">
                            <h4 class="mb-2 nowrap">Class Entry Form</h4>
                        </div>
                    </div>
                    <form class="theme-form" action="/addClass" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="form-label col-sm-3 col-form-label text-end f_w_500 f_s_15">Class Name</label>
                            <div class="col-xl-5 col-sm-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <!-- Add more fields as needed for the class entry form -->

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
@endsection

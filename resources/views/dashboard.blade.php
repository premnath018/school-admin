@extends('layouts.main')
@section('title','Dashboard')
        @section('main-body')
        <div class="container-fluid p-0 sm_padding_15px">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dashboard_header_title">
                                            <h3>Admin Dashboard</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-8">
                            <div class="white_box mb_30">
                                <div class="box_header">
                                    <div class="main-title">
                                        <h3 class="mb_25">Students Report For Class X</h3>
                                    </div>
                                    <div class="float-end d-none d-md-inline-block">
                                        <div class="btn-group mb-2" role="group">
                                            <button type="button" class="btn btn-sm btn-light">Today</button>
                                            <button type="button" class="btn btn-sm btn-light">Weekly</button>
                                            <button type="button" class="btn btn-sm btn-light">Monthly</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-column-chart2"></div>
                                <div class="card_footer_white">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="list_counter_wrapper white_box mb_30 p-0 card_height_100">
                                <div class="single_list_counter">
                                    <h3 class="deep_blue_2"><span class="counter deep_blue_2">50</span> +</h3>
                                    <p>Total Teachers</p>
                                </div>
                                <div class="single_list_counter">
                                    <h3 class="deep_blue_2"><span class="counter deep_blue_2">500</span> +</h3>
                                    <p>Total Students</p>
                                </div>
                                <div class="single_list_counter">
                                    <h3 class="deep_blue_2"><span class="counter deep_blue_2">20</span> +</h3>
                                    <p>Total Clubs</p>
                                </div>
                                <div class="single_list_counter">
                                    <h3 class="deep_blue_2"><span class="counter deep_blue_2">10</span> +</h3>
                                    <p>Total Co-ordinators</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        @endsection
      
  
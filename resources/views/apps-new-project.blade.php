@extends('layouts.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/lightpick/lightpick.css') }}" rel="stylesheet" />
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Projects @endslot
            @slot('li_3') Create @endslot
            @slot('title') Create Project @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Create Project Form</h4>
                                <p class="text-muted mb-0">Basic example to create project form styles.</p>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form>
                                    <div class="form-group">
                                        <label class="form-label" for="projectName">Project Name :</label>
                                        <input type="text" class="form-control" id="projectName" aria-describedby="emailHelp" placeholder="Enter project name">
                                    </div><!--end form-group-->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                <label class="form-label" for="pro-start-date">Project Start Date</label>
                                                <input type="text" class="form-control" id="pro-start-date" placeholder="Enter start date">
                                            </div><!--end col-->
                                            <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                <label class="form-label" for="pro-end-date">Project End Date</label>
                                                <input type="text" class="form-control" id="pro-end-date" placeholder="Enter end date">
                                            </div><!--end col-->
                                            <div class="col-lg-3 col-6">
                                                <label class="form-label" for="pro-rate">Rate</label>
                                                <input type="text" class="form-control" id="pro-rate" placeholder="Enter rate">
                                            </div><!--end col-->
                                            <div class="col-lg-3 col-6">
                                                <label class="form-label" for="pro-end-date">Price Type</label>
                                                <select class="form-control">
                                                    <option>Hourly</option>
                                                    <option>Daily</option>
                                                    <option>Fix</option>
                                                </select>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end form-group-->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2 mb-lg-0">
                                                <label class="form-label" for="pro-end-date">Required</label>
                                                <select class="form-select">
                                                    <option>--Select--</option>
                                                    <option>UI/UX Design</option>
                                                    <option>Payment System </option>
                                                    <option>Android 10</option>
                                                </select>
                                            </div><!--end col-->
                                            <div class="col-lg-3 col-6">
                                                <label class="form-label" for="pro-end-date">Invoice Time</label>
                                                <select class="form-select">
                                                    <option>30 Day</option>
                                                    <option>3 Month</option>
                                                    <option>1 Year</option>
                                                </select>
                                            </div><!--end col-->
                                            <div class="col-lg-3 col-6">
                                                <label class="form-label" for="pro-end-date">Priority</label>
                                                <select class="form-select">
                                                    <option>-- select --</option>
                                                    <option>High</option>
                                                    <option>Medium</option>
                                                    <option>Low</option>
                                                </select>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end form-group-->
                                    <div class="form-group">
                                        <label class="form-label" for="pro-message">Message</label>
                                        <textarea class="form-control" rows="5" id="pro-message"  placeholder="writing here.."></textarea>
                                    </div><!--end form-group-->

                                    <button type="submit" class="btn btn-soft-primary btn-sm">Create project</button>
                                    <button type="button" class="btn btn-soft-danger btn-sm">Cancel</button>
                                </form>  <!--end form-->
                            </div><!--end col-->
                            <div class="col-lg-5 ms-auto align-self-center">
                                <form>
                                    <div class="form-group">
                                        <label for="pro-avatar">Project Avatar</label>
                                        <img src="{{ URL::asset('assets/images/widgets/project3.jpg') }}" alt="" class="thumb-lg mx-3">
                                        <div class="add-file btn btn-soft-primary btn-sm position-relative overflow-hidden">
                                            Change Avatar
                                            <input type="file" name="file" class="add-file-input"/>
                                        </div>
                                    </div><!--end form-group-->
                                    <h5 class="font-weight-normal my-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</h5>
                                    <div class="form-group">
                                        <label for="team-leader">Project team members</label>
                                        <div class="img-group ms-3">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-3.jpg') }}" alt="user" class="thumb-xs rounded-circle">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="thumb-xs rounded-circle">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-10.jpg') }}" alt="user" class="thumb-xs rounded-circle">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="thumb-xs rounded-circle">
                                            </a>
                                        </div><!--end img-group-->
                                        <button type="button" class="btn btn-soft-primary btn-sm add-member ms-3 px-3">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div><!--end form-group-->
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/lightpick/lightpick.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.projects_new.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

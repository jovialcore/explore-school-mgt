<!-- Page content -->

<div class="row">
    <div class="col-xl-4 order-xl-2">
        <div class="card card-profile">
            <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        <a href="#">
                            <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-info  mr-4 "></a>
                    <a href="#" class="btn btn-sm btn-default float-right"></a>
                </div>
            </div>
            <div class="card-body pt-0 ">
                <div class="row mb-4">
                    {{-- <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center">
                            <div>
                                <span class="heading">-</span>
                                <span class="description">-</span>
                            </div>
                            <div>
                                <span class="heading">-</span>
                                <span class="description">-</span>
                            </div>
                            <div>
                                <span class="heading">-</span>
                                <span class="description">-</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="text-center">
                    <h5 class="h3">
                        {{ $student->user->name }}
                    </h5>
                    <div class="h5 font-weight-300">

                        <span class="h3"> Age: </span><span
                            class="font-weight-light">  </span>

                        <i class="ni location_pin mr-2"></i>
                    </div>
                    <div class="h5 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                    </div>
                    <div>
                        <i class="ni education_hat mr-2"></i>Explore School Academy
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Student profile </h3>
                    </div>
                    {{-- <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div> --}}
                </div>
            </div>
            <div class="card-body">
               
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Exam Number</label>
                                    <h5 class="h4">
                                        {{ $student->user->email }} 
                                    </h5>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Name</label>
                                    <h5 class="h4"> {{ $student->user->name }} </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Date OF Birth</label>
                                    <h5 class="h4"> {{ $student->user->name }} </h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">LGA</label>
                                    <h5 class="h4">{{ $student->lga }}  </h5>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">State</label>
                                    <h5 class="h4"> {{ $student->state}}  </h5>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Country</label>
                                    <h5 class="h4"> {{ $student->country}}  </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Address</label>
                                    <h5 class="h4"> {{ $student->current_address }} </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">City</label>
                                    <input type="text" id="input-city" class="form-control" placeholder="City"
                                        value="New York">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Country</label>
                                    <input type="text" id="input-country" class="form-control" placeholder="Country"
                                        value="United States">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Postal code</label>
                                    <input type="number" id="input-postal-code" class="form-control"
                                        placeholder="Postal code">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

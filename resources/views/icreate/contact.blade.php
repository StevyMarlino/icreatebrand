@extends('layouts.app')

@section('content')


    <!-- hero content -->
    <div style="padding-top: 8rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="fw-bolder heading-1 text-center mb-3"><span class="text-warning">Lets design something
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="py-3 mt-3 mb-3">
        <!--   Big container   -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 ">


                    <!-- wizard-form -->


                    <div class="multisteps-form mb-5">
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto my-5">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button"
                                            title="User Info">
                                        <span>About</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Address">
                                        <span>What are we designing</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                                        <span>Specifics</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-8 m-auto">
                                <form class="multisteps-form__form" style="height: 631px;">

                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                         data-animation="FadeIn">
                                        <div class="row text-center ">
                                            <div class="col-12 mx-auto">
                                                <h5 class="font-weight-normal">
                                                    Lets begin with your basic information
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">

                                                <div class="col-12 col-sm-12 mt-4 mt-sm-0 text-start">
                                                    <label>First Name</label>
                                                    <input class="multisteps-form__input form-control mb-3" type="text"
                                                           placeholder="Eg. Michael">
                                                    <label>Last Name</label>
                                                    <input class="multisteps-form__input form-control mb-3" type="text"
                                                           placeholder="Eg. Tomson">
                                                    <label>Email Address</label>
                                                    <input class="multisteps-form__input form-control" type="email"
                                                           placeholder="Eg. argon@dashboard.com">
                                                    <label>Phone number</label>
                                                    <input class="multisteps-form__input form-control" type="email"
                                                           placeholder="Eg. argon@dashboard.com">
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-warning ms-auto mb-0 js-btn-next"
                                                        type="button" title="Next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                         data-animation="FadeIn">
                                        <div class="row text-center justify-content-center">
                                            <div class="col-12 mx-auto">
                                                <h5 class="font-weight-normal">
                                                    What are we Designing today?
                                                </h5>
                                                <p>
                                                    Please select a project type below
                                                </p>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-4 text-center">
                                                <div class="col-sm-6 mb-3">
                                                    <input type="checkbox" class="btn-check" id="btncheck1"
                                                           autocomplete="off">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-3 py-2"
                                                           for="btncheck1">
                                                        <i class="fas fa-mobile-alt"></i>
                                                    </label>
                                                    <h6>UI/UX</h6>
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <input type="checkbox" class="btn-check" id="btncheck2"
                                                           autocomplete="off">
                                                    <label
                                                        class="btn btn-lg btn-outline-secondary border-2 border-2 px-3 py-2"
                                                        for="btncheck2">
                                                        <i class="fas fa-file-certificate"></i>
                                                    </label>
                                                    <h6>Logo/branding</h6>
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <input type="checkbox" class="btn-check" id="btncheck3"
                                                           autocomplete="off">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-3 py-2"
                                                           for="btncheck3">
                                                        <i class="fas fa-images"></i>
                                                    </label>
                                                    <h6>Flyer/poster</h6>
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <input type="checkbox" class="btn-check" id="btncheck4"
                                                           autocomplete="off">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-3 py-2"
                                                           for="btncheck4">
                                                        <i class="fas fa-box"></i>
                                                    </label>
                                                    <h6>Packaging design</h6>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                        title="Prev">
                                                    Prev
                                                </button>
                                                <button class="btn bg-gradient-warning ms-auto mb-0 js-btn-next"
                                                        type="button" title="Next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                         data-animation="FadeIn">
                                        <div class="row text-center">
                                            <div class="col-12 mx-auto">
                                                <h5 class="font-weight-normal">
                                                    Tell us your vision about the design
                                                </h5>
                                                <p>
                                                    with the important details i should consider
                                                </p>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row text-start">
                                                <form>
                                                    <div class="form-group">

                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                                  rows="3"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="button-row d-flex mt-4 col-12">
                                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                            title="Prev">
                                                        Prev
                                                    </button>
                                                    <button class="btn bg-gradient-warning ms-auto mb-0" type="button"
                                                            title="Send">
                                                        Send
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- wizard-form -->
                </div>
            </div> <!--  big container -->

@endsection

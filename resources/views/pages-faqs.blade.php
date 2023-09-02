@extends('layouts.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Pages @endslot
            @slot('li_3') FAQs @endslot
            @slot('title') FAQs @endslot
        @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Most Commonly Asked Questions</h4>
                            <p class="text-muted mb-0">Anim pariatur cliche reprehenderit,
                                enim eiusmod high life accusamus terry richardson ad squid.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled faq-qa">
                                        <li class="mb-5">
                                            <h6 class="">1. What is Dastone?</h6>
                                            <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                                enim eiusmod high life accusamus terry richardson ad squid.
                                            </p>
                                        </li>
                                        <li class="mb-5">
                                            <h6 class="">3. What cryptocurrency can i use to buy Dastone?</h6>
                                            <p class="font-14 text-muted  ms-3">Anim pariatur cliche reprehenderit,
                                                enim eiusmod high life accusamus terry richardson ad squid.
                                            </p>
                                        </li>
                                        <li class="mb-5 mb-lg-0">
                                            <h6 class="">5. Can i trade Dastone?</h6>
                                            <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                                enim eiusmod high life accusamus terry richardson ad squid.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled faq-qa">
                                        <li class="mb-5">
                                            <h6 class="">2. How buy Dastone on coin?</h6>
                                            <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                                enim eiusmod high life accusamus terry richardson ad squid.
                                            </p>
                                        </li>
                                        <li class="mb-5">
                                            <h6 class="">4. Where can i download the wallet?</h6>
                                            <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                                enim eiusmod high life accusamus terry richardson ad squid.
                                            </p>
                                        </li>
                                        <li class="mb-5 mb-lg-0">
                                            <h6 class="">6. What is Dastone?</h6>
                                            <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                                enim eiusmod high life accusamus terry richardson ad squid.
                                            </p>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Most Commonly Asked Questions</h4>
                            <p class="text-muted mb-0">Anim pariatur cliche reprehenderit,
                                enim eiusmod high life accusamus terry richardson ad squid.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="accordion" id="accordionExample-faq">
                                <div class="accordion-item">
                                    <h2 class="accordion-header mt-0" id="headingOne">
                                        <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is Dastone?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample-faq">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high
                                        life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        3 wolf moon officia aute, non cupidatat life accusamus terry richardson ad squid.
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header mt-0" id="headingTwo">
                                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How buy Dastone on coin?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample-faq">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                            3 wolf moon officia aute, non cupidatat life accusamus terry richardson ad squid.
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header mt-0" id="headingThree">
                                        <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What cryptocurrency can i use to buy Dastone?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample-faq">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high
                                        life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        3 wolf moon officia aute, non cupidatat life accusamus terry richardson ad squid.
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </div>
                                    </div>
                                </div>
                            </div><!--end accordion-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Have More Questions</h4>
                            <p class="text-muted mb-0">Don't Worry ! Email us your Questions or you can send us twitter.</p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-lg-6  mo-b-15">
                                                <input class="form-control" type="text" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="email" id="example-email-input3" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" id="subject2" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block px-4">Send Email</button>
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

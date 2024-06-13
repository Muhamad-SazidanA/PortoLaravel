@extends('master')

@section('content')
    <section class="text-center pt-5 resume-section" id="skills">
        <h1 class="text-center fw-bold mb-4">Skills</h1>
        <div class=" p-4">
            <h3 class="text-center mb-4">Programming <span class="text-warning">Languages</span> &amp; <span
                    class="text-primary">Tools</span></h3>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fab fa-html5 fa-3x text-danger"></i>
                            </div>
                        </li>
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fab fa-css3-alt fa-3x text-primary"></i>
                            </div>
                        </li>
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fab fa-js-square fa-3x text-warning"></i>
                            </div>
                        </li>
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fab fa-php fa-3x text-info"></i>
                            </div>
                        </li>
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fab fa-bootstrap fa-3x text-primary"></i>
                            </div>
                        </li>
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fab fa-laravel fa-3x text-danger"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="col-auto">
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fa-solid fa-solar-panel fa-3x text-success"></i>
                            </div>
                        </li>
                        <li class="list-inline-item m-3">
                            <div class="icon-container p-3 rounded bg-white shadow">
                                <i class="fa-solid fa-code fa-3x text-dark"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('master')

@section('content')
    <section class="py-5 ">
        <div class="container px-5">
            <div class="text-center  mb-5">
                <h1 class="fw-bolder">Kontak Saya</h1>
            </div>
            <div class="bg-body rounded-4 py-5 px-4 px-md-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form id="contactForm">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                    data-sb-validations="required" data-sb-can-submit="no" fdprocessedid="8mhyl5">
                                <label for="name">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                    data-sb-validations="required,email" data-sb-can-submit="no" fdprocessedid="7lingd">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                    data-sb-validations="required" data-sb-can-submit="no" fdprocessedid="i3yauq">
                                <label for="phone">No. telp</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                                <label for="message">Pesan</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg " id="submitButton" type="submit"
                                    fdprocessedid="rdrwfl">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

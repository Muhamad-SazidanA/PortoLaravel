<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<style>
    .nav-link-hover:hover {
        color: black;
    }

    .nav-link {
        color: rgb(67, 67, 67);
        border-radius: 50px;
    }

    .bg-img {
        background-image: url('assets/img/bg.avif');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>

<body class="bg-img">
    <div class="container">
        <header
            class="d-flex mt-3 shadow container fixed-top px-5 bg-body rounded-5 flex-wrap justify-content-center py-1 mb-4 w-auto">
            <nav class="nav nav-pills">
                <a class="nav-link fw-bolder nav-link-hover" href="/">Home</a>
                <a class="nav-link fw-bolder nav-link-hover" href="/about">Tentang</a>
                <a class="nav-link fw-bolder nav-link-hover" href="/project">Project</a>
                <a class="nav-link fw-bolder nav-link-hover" href="/skill">Skill</a>
                <a class="nav-link fw-bolder nav-link-hover" href="/contact">Contact</a>
            </nav>
        </header>

        <main class="pt-5 mt-5">
            @yield('content')
        </main>

    </div>
    <footer class="mt-5 d-flex bg-light flex-wrap justify-content-between align-items-center py-3 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="text-muted">© 2024 Sazidan</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a href="https://github.com/muhamadsazidan12" target="_blank" class="btn bg-white p-1">
                    <img src="https://cdns.iconmonstr.com/wp-content/releases/preview/2012/240/iconmonstr-github-1.png"
                        alt="" width="35px">
                </a>
            </li>
            <li class="ms-3">
                <a href="https://www.linkedin.com/in/muhamad-sazidan-al-zahran-9395aa181/" target="_blank"
                    class="btn bg-white p-2 px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="16px" height="16px" viewBox="0 0 512 512" xml:space="preserve">
                        <g id="7935ec95c421cee6d86eb22ecd125aef">
                            <path style="display: inline; fill-rule: evenodd; clip-rule: evenodd;"
                                d="M116.504,500.219V170.654H6.975v329.564H116.504   L116.504,500.219z M61.751,125.674c38.183,0,61.968-25.328,61.968-56.953c-0.722-32.328-23.785-56.941-61.252-56.941   C24.994,11.781,0.5,36.394,0.5,68.722c0,31.625,23.772,56.953,60.53,56.953H61.751L61.751,125.674z M177.124,500.219   c0,0,1.437-298.643,0-329.564H286.67v47.794h-0.727c14.404-22.49,40.354-55.533,99.44-55.533   c72.085,0,126.116,47.103,126.116,148.333v188.971H401.971V323.912c0-44.301-15.848-74.531-55.497-74.531   c-30.254,0-48.284,20.38-56.202,40.08c-2.897,7.012-3.602,16.861-3.602,26.711v184.047H177.124L177.124,500.219z">
                            </path>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

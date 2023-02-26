<div>
    <div class="container">
        @livewire('users.navbar')
    </div>
        <div class="container">
            <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background-image: url({{ asset('users/images/watch-cover.jpg)') }}; background-repeat: no-repeat;
            background-size: 100% 100%; height: 60vh;">
                <div class="container py-5 t">
                    <div class="row px-4 px-lg-5 text-light text-right d-flex justify-content-end">
                        <div class="col-lg-6 ">
                            <p class="small text-uppercase mb-2">New Inspiration 2023</p>
                            <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark"
                                href="#">Browse collections</a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="pt-5">
                <header class="text-center">
                    <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
                    <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
                </header>
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="owl-carousel owl-theme featured-carousel">
                        <div class="col mx-2">
                            <a class="category-item mb-4" href="#"><img class="img-fluid"
                                    src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/cat-img-2.1b2e51d9.jpg"
                                    style="height: 38vh;" alt=""></a>
                        </div>
                        <div class="col mx-2">
                            <a class="category-item" href="#"><img class="img-fluid"
                                    src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/cat-img-3.49411dee.jpg"
                                    style="height: 38vh;" alt=""></a>
                        </div>
                        <div class="col mx-2">
                            <a class="category-item" href="#"><img class="img-fluid"
                                    src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-7.1f4b5e9b.jpg"
                                    style="height: 38vh;" alt=""></a>
                        </div>
                        <div class="col mx-2">
                            <a class="category-item" href="#"><img class="img-fluid w-100"
                                    src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-1.37a0a89c.jpg"
                                    style="height: 38vh;" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5">
                <header>
                    <p class="small text-muted small text-uppercase mb-1">Made the elegant way</p>
                    <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
                </header>

                <div class="py-2">
                    <div class="row row-cols-1">
                        @foreach ($products as $pro)
                        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card p-2"><a href="{{ route('product' , $pro->id) }}">
                                <img src="{{ asset('product/'.$pro->image) }}" class="card-img-top" alt="img" /></a>

                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!" class="text-muted">{{ $pro->name }}</a></p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        {{-- <h5 class="mb-0">Lancome Tresor In Love</h5> --}}
                                        <h5 class="text-dark mb-0">${{ $pro->price }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach






                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top bg-black text-light bg-dark">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3  text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>Links</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Products</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Categories</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Login</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Register</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Categories</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Electronics</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Laptops</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Perfumes</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Shoes</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Make-up</a></li>
            </ul>
        </div>
    </footer>

</div>

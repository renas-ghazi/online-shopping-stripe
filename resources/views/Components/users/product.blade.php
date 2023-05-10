<div>
    <div class="container">
        @livewire('users.navbar')
        <section class="py-5">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-lg-6">
                        <!-- PRODUCT SLIDER-->
                        <div class="outer">
                            <img style="width: 600px" src="{{ asset('product/'.$getProductSingle->image) }}" alt="">
                        </div>
                    </div>
                    <!-- PRODUCT DETAILS-->
                    <div class="col-lg-6 p-5" style="background-color: rgb(250, 250, 250);">
                        <ul class="list-inline mb-2 text-sm">
                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                            <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                        </ul>

                        <h1>{{$getProductSingle->name}}</h1>
                        <p class="text-muted lead">${{ $getProductSingle->price }}</p>
                        <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut
                            ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient
                            montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                       @auth
                          <div class="col-8" x-data='addOrder'>
                            <div class="row">
                                <div class="col-md-5">
                                    <a
                                    class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0"
                                    @click='addOrder({{ $getProductSingle->id }})'
                                    >Add to cart</a>
                                </div>
                                <div class="col-md-1">
                                    <button @click='addQuantity' class="btn btn-success btn-sm">+</button>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" x-model='quantity' class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <button @click='removeQuantity' class="btn btn-danger btn-sm">-</button>
                                </div>
                            </div>
                          </div>

                       @endauth
                        {{-- <a class="text-dark p-0 mb-4 d-inline-block" href="#!"><i
                                class="far fa-heart me-2"></i>Add to wish list</a> --}}
                        <ul class="list-unstyled small d-inline-block">
                            {{-- <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span
                                    class="ms-2 text-muted">039</span></li> --}}
                            <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                    class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2"
                                    href="#!">{{ $getProductSingle->category }}</a></li>
                        </ul>
                    </div>
                </div>
                <!-- DETAILS TABS-->
                <h1>Reviews</h1>
                <div class="p-4 p-lg-5 mb-5 mt-4 rounded" style="background-color: rgb(251, 251, 251);">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0"><img class="rounded-circle"
                                        src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/customer-1.2909e6e3.png"
                                        alt="" width="50"></div>
                                <div class="ms-3 flex-shrink-1">
                                    <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                                    <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                    <ul class="list-inline mb-1 text-xs">
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i
                                                class="fas fa-star-half-alt text-warning"></i></li>
                                    </ul>
                                    <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img class="rounded-circle"
                                        src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/customer-2.f49623e8.png"
                                        alt="" width="50"></div>
                                <div class="ms-3 flex-shrink-1">
                                    <h6 class="mb-0 text-uppercase">Jane Doe</h6>
                                    <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                    <ul class="list-inline mb-1 text-xs">
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item m-0"><i
                                                class="fas fa-star-half-alt text-warning"></i></li>
                                    </ul>
                                    <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RELATED PRODUCTS-->
                <h2 class="h5 text-uppercase mb-4">Related products</h2>
                <div class="row">
                    <!-- PRODUCT-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="product text-center skel-loader">
                            <div class="d-block mb-3 position-relative"><a class="d-block" href=""><img
                                        class="img-fluid w-100"
                                        src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-1.37a0a89c.jpg"
                                        alt="..."></a>

                            </div>
                            <h6> <a class="reset-anchor" >Kui Ye Chen’s AirPods</a></h6>
                            <p class="small text-muted">$250</p>
                        </div>
                    </div>
                    <!-- PRODUCT-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="product text-center skel-loader">
                            <div class="d-block mb-3 position-relative"><a class="d-block" href=""><img
                                        class="img-fluid w-100"
                                        src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-2.1adefbd6.jpg"
                                        alt="..."></a>
                                <div class="product-overlay">
                                    <ul class="mb-0 mt-4 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark px-4"
                                                href="#!">Add to cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h6> <a class="reset-anchor" href="">Air Jordan 12 gym red</a></h6>
                            <p class="small text-muted">$300</p>
                        </div>
                    </div>
                    <!-- PRODUCT-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="product text-center skel-loader">
                            <div class="d-block mb-3 position-relative"><a class="d-block" href=""><img
                                        class="img-fluid w-100"
                                        src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-3.e4af5b82.jpg"
                                        alt="..."></a>
                                <div class="product-overlay">
                                    <ul class="mb-0 mt-4 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark px-4"
                                                href="#!">Add to cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h6> <a class="reset-anchor" href="">Cyan cotton t-shirt</a></h6>
                            <p class="small text-muted">$25</p>
                        </div>
                    </div>
                    <!-- PRODUCT-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="product text-center skel-loader">
                            <div class="d-block mb-3 position-relative"><a class="d-block" href=""><img
                                        class="img-fluid w-100"
                                        src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-4.719c3a60.jpg"
                                        alt="..."></a>
                                <div class="product-overlay">
                                    <ul class="mb-0 mt-4 list-inline">
                                        <li class="list-inline-item m-0"><a class="btn btn-sm btn-dark px-4"
                                                href="#!">Add to cart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h6> <a class="reset-anchor" href="">Timex Originals</a></h6>
                            <p class="small text-muted">$351</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
          function addOrder() {
            return {
                rem: false,
                remaining: 0,
                btnStatus: false,
                quantity: 1,
                ifRemPrice: 0,

                addQuantity() {
                    this.quantity++;
                },
                removeQuantity() {
                    this.quantity <= 1 ? this.quantity = 1 : this.quantity--;
                },
                addOrder(id) {
                    @this.call('addToCart', id, this.quantity);
                    this.quantity = 1;
                    this.btnStatus = true;
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Adeed To Cart',
                    showConfirmButton: false,
                    timer: 1500
                    });
                },
                delteOrder(id) {
                    @this.call('delteOrder', id);
                },
                addQuantityTocart(id) {
                    @this.call('addQuantityTocart', id);
                },
                removeQuantityFromCart(id) {
                    @this.call('removeQuantityFromCart', id);

                }
            }
        }
    </script>
</div>

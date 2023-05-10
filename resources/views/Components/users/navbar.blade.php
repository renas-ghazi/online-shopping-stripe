<div>
        <!-- Navbar-->
        <header class="header bg-white">
            <div class="container px-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light py-3 ">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <span class="fw-bold text-uppercase text-dark">Online Shoping</span>
                    </a>
                    <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto ">
                            <li class="nav-item">
                                <!-- Link-->
                                <a class="nav-link active fw-semibold" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <!-- Link-->
                                <a class="nav-link fw-semibold" href="#">Shop</a>
                            </li>
                            <li class="nav-item">
                                <!-- Link-->
                                <a class="nav-link fw-semibold" href="pages/product-details.html">Product detail</a>
                            </li>
                            <li class="nav-item">
                                <!-- Link-->
                                <a class="nav-link fw-semibold" href="#">Categories</a>
                            </li>
                        </ul>
                        @if (!Auth::check())
                        <ul class="navbar-nav d-flex justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link fw-semibold " href="{{ route('login') }}">
                                    <button type="button" class="btn fw-semibold nav-link">Login</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('register') }}">
                                    <button type="button" class="btn button-outline fw-semibold">Register</button>
                                </a>
                            </li>
                        </ul>
                        @else
                        <button wire:click='logout' class="btn btn-danger m-1">
                            Logout
                        </button>
                        <a href="{{ route('order') }}" class="btn btn-success">
                            My Order
                        </a>
                            @livewire('users.cart')
                        @endif
                    </div>
                </nav>
            </div>
        </header>

</div>

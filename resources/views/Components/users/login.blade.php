<div>
    <section class="vh-100" style="background-color: #ece9e9;">
        <div class="container py-5 h-100">
            <div class="col">
                <span>
                    <a href="{{ route('home') }}"><img src="{{ asset('users/images/back.png') }}" alt=""
                            style="height: 30px; width: 30px;"></a>
                </span>
            </div>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('users/images/gianni-venturi.jpg') }}" alt="login form"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    @if (session()->has('error'))
                                    <div class="alert alert-danger text-center ">
                                        {{ session('error') }}
                                    </div>
                                    @endif
                                    <div class="mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0">Welcome!</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                    </h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" placeholder="Email address" wire:model.defer="email"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" placeholder="Password" wire:model.defer="password"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button wire:click.prevent='login' class="btn btn-dark btn-lg  px-5"
                                            type="button">Login</button>
                                    </div>

                                    <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                            href="register.html" style="color: #393f81;">Register here</a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

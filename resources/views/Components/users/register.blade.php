<div>
    <section class="h-100" style="background-color: #ece9e9;">
        <div class="container p-5 h-100">
            <div class="col">
                <span>
                    <a href="{{ route('home') }}"><img src="{{ asset('users/images/back.png') }}" alt="" style="height: 30px; width: 30px;"></a>
                </span>
            </div>
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="{{ asset('users/images/rolex.jpg') }}"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <div class="mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">Registration</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign-Up now!</h5>
                        @if ( $errors->any() )
                        @foreach ($errors -> all() as $error)
                        <div class="alert alert-danger text-center">
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif
                        <div class="row">

                            <div class="col-md-6 mb-4">

                              <div class="form-outline">
                                <input type="text" placeholder="First Name" wire:model.defer="firstName" class="form-control form-control-lg" />
                              </div>

                            </div>
                            <div class="col-md-6 mb-4">

                              <div class="form-outline">
                                <input type="text" placeholder="Last Name" wire:model.defer="lastName" class="form-control form-control-lg" />
                              </div>

                            </div>
                          </div>

                        <div class="form-outline mb-4">
                          <input type="email" placeholder="Email address" wire:model.defer="email" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" placeholder="Password" wire:model.defer="password" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" placeholder="Enter Password again" wire:model.defer="cPass" class="form-control form-control-lg" />
                          </div>

                          <div class="form-check d-flex  mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                            <label class="form-check-label" for="form2Example3g">
                              I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                          </div>

                          <div class="pt-1 mb-4">
                            <button wire:click.prevent='register' class="btn btn-dark btn-lg  px-5" type="button">Register</button>
                          </div>

                          <p class="text-muted mt-5 mb-0">Have already an account? <a href="login.html"
                              class="fw-bold text-body"><u>Login here</u></a></p>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

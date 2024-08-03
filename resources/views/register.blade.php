@extends('master')
@section('main')
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Sign up</h1>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		
		<!-- Start Contact Form -->
		<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">
              <form>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="fname">First name</label>
                      <input type="text" class="form-control" id="fname">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="lname">Last name</label>
                      <input type="text" class="form-control" id="lname">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="text-black" for="email">Email address</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label class="text-black" for="email">Password</label>
                  <input type="password" class="form-control" id="password">
                </div>

                <br><button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
                <a href="{{route('account')}}">Login Account</a>
              </form>

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>

  <!-- End Contact Form -->

		
@stop()
@extends('master')
@section('main')
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Login</h1>
								
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


            <div class="col-md-8 col-lg-8 pb-4">


             

              <form>
                <div class="form-group">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label class="text-black" for="email">Password</label>
                  <input type="password" class="form-control" id="password">
                </div>


                <br><button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
				<a href="{{route('register')}}">Sign up for an Account ?</a>
              </form>

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>

  <!-- End Contact Form -->

		
@stop()
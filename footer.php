  <!-- Modal -->
  <div class="modal fade" id="login_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Login</h5>
        </div>
        <form method="post" name="landing_login" action="includes/login.php">
          <div class="modal-body">
            <div id="login_result"></div>
            <div class="bs-example bs-example-form">
              <div class="form-group input-group" id="username">
                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user"></i> Username</span>
                <input type="text" class="form-control" placeholder="Username" name="username">
              </div>
              <div class="form-group input-group" id="password">
                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-lock"></i> Password</span>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="register_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Sign Up</h5>
        </div>
        <div class="modal-body">
          <form method="post" name="landing_signup"  action="includes/signup.php">
            <div id="signup_result"></div>

            <div class="row">
              <div class="form-group col-md-6" id="username">
                <label for="inputEmail4">*Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group col-md-6" id="email">
                <label for="inputPassword4">*Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6" id="password">
                <label for="inputEmail4">*Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group col-md-6" id="re_password">
                <label for="inputPassword4">*Confirm Password</label>
                <input type="password" class="form-control" name="re_password" placeholder="Confirm Password">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6" id="first_name">
                <label for="inputEmail4">*First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="First Name">
              </div>
              <div class="form-group col-md-6" id="last_name">
                <label for="inputPassword4">*Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6" id="birth_date">
                <label for="inputPassword4">*Birth Date</label>
                <input type="date" class="form-control" name="birth_date">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Gender</label>
                <select class="custom-select" name="gender" style="width: 100%;height:38px">
                  <?php foreach ($gender as $res) { ?>
                    <option value="<?php echo $res['id']; ?>"><?php echo $res['gender']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="row">

              <div class="form-group col-md-6" id="contact_no">
                <label for="inputPassword4">*Contact No</label>
                <input type="number" class="form-control" name="contact_no" placeholder="Contact No#">
              </div>
              <div class="form-group col-md-6" id="address">
                <label for="inputPassword4">*Address</label>
                <textarea class="form-control" name="address" rows="4" placeholder="Address"></textarea>
              </div>

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- Footer section -->
<!-- <footer class="footer">
</footer> -->
<!-- Footer section  -->
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script>  
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="js/jquery.devrama.slider.min-0.9.4.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.slider-banner').DrSlider({
				'transition': 'fade',
				showNavigation: false,
				progressColor: "#03A9F4"
			});
		});
	</script> 
</body>
</html>
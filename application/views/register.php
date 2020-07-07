<?php require('header.php'); ?>

<div class="banner text-center">

     <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login Here</h3>
                    <form action="<?php echo base_url('register/login')?>" method="post">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login As Candidate" name="1" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login As Employer" name="0" />
                        </div>
						
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Register Here</h3>
                    <form action="<?php echo base_url('register/signin')?>" method="post" >
						<div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Username *" value="" name="username" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" name="email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Skills...... *" value="" name="skills" required/>
                        </div>
						<div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" name="password" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register As Candidate" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

</section>



<?php require('footer.php'); ?>

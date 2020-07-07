<?php require('header.php'); ?>

<div class="banner ">

     <div class="container login-container login-container-2">
       

             <div class="login-form-3">
             <h3>Add Job Details </h3>
                    <form action="<?php echo base_url('register/addNewJob')?>" method="post">
                        <div class="form-group">
							TITLE 
                            <input type="text" class="form-control" placeholder="Title of Job Post" value="" name="title" required/>
                        </div>
						<div class="form-group">
							COMPANY NAME
                            <input type="text" class="form-control" placeholder="Company Name" value="" name="com_name" required/>
                        </div>
						<div class="form-group">
							EXPERIENCE
                            <input type="text" class="form-control" placeholder="0 - 1 YEARS" value="" name="experience" required/>
                        </div>

                        <div class="form-group">
							SALARY PER MONTH
                            <input type="text" class="form-control" placeholder="20000" value="" name="salary" required/>
                        </div>
						<div class="form-group">
							LOCATION
                            <input type="text" class="form-control" placeholder="Ahmedabad" value="" name="loc" required />
                        </div>
						<div class="form-group">
							SKILLS
                            <input type="text" class="form-control" placeholder="JAVA, HTML, CSS...." value="" name="skills" required/>
                        </div>
						<div class="form-group">
							DESCRIPTION
							<textarea class="form-control" rows="3" placeholder="Some description about the job" value="" name="description" required></textarea>
                            
                        </div>
					
                        <div class="form-group text-center">
							<br><br>
							<input type="submit" class="btnSubmit" value="Register" />
                        </div>
                    </form>
            </div>
        </div>

</section>





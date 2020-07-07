<?php require('header.php'); ?>

<div class="banner ">

    <div class="container login-container">
            
        <div class="login-form-3">
				
				<?php 
				
				$names = explode(",", $job['job_skills']);
				
				echo "<h4><b>".$job['job_title']."</b></h4>
				<p>".$job['job_company_name']."</p>
				<i class='fa fa-briefcase'></i><span> ".$job['job_experience']."</span><br/>
				<i class='fa fa-inr'></i><span> ".$job['job_experience']."</span><br/>
				<i class='fa fa-map-marker'></i><span> ".$job['job_salary']."</span>
				<p>Skills <i class='fa fa-angle-double-right'></i>";
	
				foreach($names as $name){ echo '<small> '.$name.'</small>'; }
	
				echo "<p>Description <i class='fa fa-angle-double-right'></i> ".$job['job_description'];
				
				?>
			
            
		</div>
    </div>

</section>



<?php require('footer.php'); ?>

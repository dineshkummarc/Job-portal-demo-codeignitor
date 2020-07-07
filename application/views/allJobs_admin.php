<html>
<?php require('header.php'); ?>

<!--------Recent Jobs--------->
<section id="jobs">
<div class="container">
<h5>JOBS POSTED BY <?php echo $this->session->userdata('username')?></h5>

<?php
foreach($jobs as $index => $job){
	
	$names = explode(",", $job['job_skills']);
	
	echo '
<div class="company-details">
<div class="job-update">
	<h4><b>'.$job['job_title'].'</b></h4>
	<p>'.$job['job_company_name'].'</p>
	<i class="fa fa-briefcase"></i><span>'.$job['job_experience'].'</span><br/>
	<i class="fa fa-inr"></i><span>'.$job['job_salary'].'</span><br/>
	<i class="fa fa-map-marker"></i><span>'.$job['job_location'].'</span>
	<p>Skills <i class="fa fa-angle-double-right"></i>';
	
	foreach($names as $name){ echo '<small>'.$name.'</small>'; }
	
	echo '<p>Description <i class="fa fa-angle-double-right"></i>'.$job['job_description'].'
		<a href="'.base_url('description/'.$index).'">Read more...</a></p>
</div>
	<div class="apply-btn">
	<button type="button" class="btn btn-primary">Apply</Button>
	</div>
</div>
';

}
?>
<ul class="page-link text-center">
	<li class="left-arrow">&#8592;</li>
	<li class="active">1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
	<li class="right-arrow">&#8594;</li>
</ul>

</div>
</section>


<?php require('footer.php'); ?>
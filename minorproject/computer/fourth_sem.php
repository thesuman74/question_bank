
	<?php 
			include('../../admin/connection.inc.php');
			              $subject = "SELECT * FROM subject WHERE state_id = '4'";
			              $link = "SELECT link FROM questions WHERE semester ='I'";
                          $subject_query = mysqli_query($conn,$subject);
                          $link_query = mysqli_query($conn,$link);

                 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fourth_sem_subjects</title>

	<link rel="stylesheet" type="text/css" href="../style.css">
	<!-- <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> -->


	<style>
		a {
			align-items: center;
			line-height: 28px;
			justify-content: center;

		}

		iframe {
			border: hidden;
			object-fit: contain;
			overflow: hidden;
		}
	</style>

</head>

<body>

	<!-- <header -->

	<?php
	include '../includes/header.php';
	include '../includes/scripts.php';
	include '../links/links.php';

	?>
	<!-- header ends here -->

	<!-- section starts here  -->
	<section id="popular-books" class="bookshelf">
		<div class="container">
			<div class="row">
				<div class="inner-content">

					<div class="section-header align-center">
						<div class="title">
							<div class="row float-left">
								<span class="text-danger "><a class="text-secondary " href="../courses.php">courses</a>>><a class="text-secondary " href="semesters.php">Computer</a>>><a class="text-secondary " href="subjects.php">Fourth semester</a></span>

							</div><br>

						</div>
						<h2 class="section-title text-secondary ">Select subjects</h2>
					</div>

					<div class="container-fluid">

						 <div class="row m-2">
						 	<?php 
			                    while(($sub = mysqli_fetch_array($subject_query)) && ($lin = mysqli_fetch_array($link_query))) {

                           ?>
							<div class="col-lg-4 col-md-6 animate__animated animate__fadeIn animate__delay-0.5s">
								<h5 class="m-3 "><?php echo $sub['name']; ?></h5>
								<iframe id="pic" class="shadow-lg p-3 mb-3 bg-white rounded animate__animated animate__fadeIn" src="<?php echo $lin['link']; ?> " width="300" height="200" allow=""></iframe>
								<a href="Menu.pdf" class="btn btn-success btn-lg d-flex  text-white" style="width:200px; height: 30px;"> Download </a>
							</div>
							<?php 
						       }
						     ?>

					     </div>
					 </div>







						</div>
						


					</div>


	</section>

</body>

</html>
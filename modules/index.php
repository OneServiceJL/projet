<?php 
session_start();

include 'config/function.php';
?>


<?php include 'includes_2/header.php'; ?>

<?php include 'includes_2/sidebar.php'; ?>

<?php include 'modal.php' ?>


<!-- Module Header -->

<div style="margin-top: 2.5em;" class="page-wrapper">
	<div class="content">
		<?php include 'includes_2/nav_menu.php'; ?>

		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="index.php" method="POST">
									<div class="mb-3">
										<label for="name" name="name" class="col-form-label">Nom</label>
										<input type="text" name="name" class="form-control" id="recipient-name">
									</div>
									<div class="mb-3">
										<label for="post_name" name="post_nam" class="col-form-label">Post Nom</label>
										<textarea class="form-control" id="post_nam"></textarea>
									</div>
									<div class="mb-3">
										<label for="email" name="email" class="col-form-label">Email</label>
										<textarea class="form-control" id="email"></textarea>
									</div>
									<div class="mb-3">
										<label for="phone" name="phone" class="col-form-label">Phone</label>
										<textarea class="form-control" id="phone"></textarea>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" name="save_btn" class="btn btn-premary">Send message</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php

		if (isset($_SESSION['staus']) && $_SESSION('status') != '') {
			
		?>

			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php

			unset($_SESSION['status']);
		}

		?>

	</div>
</div>

<?php include 'includes_2/footer.php'; ?>
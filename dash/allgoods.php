<?php 

include '../shared/session.php';
include '../shared/header.php';

?>

<?php if (isset($_SESSION['good-mes'])): ?>

	<div class="alert alert-success">
		<?php echo $_SESSION['good-mes']; unset($_SESSION['good-mes']); ?>
	</div>

<?php endif ?>




<?php include '../shared/footer.php'; ?>
<?php
session_start();
	function logged_in() {
		return isset($_SESSION['MEMBER_ID']);
        
	}
	function confirm_logged_in() {
		if (!logged_in()) {
?>
			<script type="text/javascript">
				window.location = "fun.php";
			</script>
<?php
		}
	}
?>
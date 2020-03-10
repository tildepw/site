<?php $title = "sign up"; include('header.php'); ?>
			<form method="post">
			    <?php include 'signup-handler.php'; ?>
<p>your desired username (numbers and lowercase letters only, no spaces)</p>
<input name="username" value="<?=$_REQUEST["username"] ?? ""?>" type="text" required>

<p>email to contact you with account info</p>
<input name="email" value="<?=$_REQUEST["email"] ?? ""?>" type="text" required>

<p>what interests you about tilde.pw? we want to make sure you're a real human being :)</p>
<textarea required  name="interest" id="" cols="40" rows="7"><?=$_REQUEST["interest"] ?? ""?></textarea>

<p>SSH public key</p>
<textarea required class="form-control" name="sshkey" id="" cols="40" rows="10"><?=$_REQUEST["sshkey"] ?? ""?></textarea>

<br><br><button type="submit">submit! <3</button>
</form>
<?php include('footer.php'); ?>

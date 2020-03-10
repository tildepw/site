<?php $title = "users"; include('header.php'); ?>
<p><b>note:</b> only shows users who have changed their index.html page</p>
				<ol>
					<?php foreach (glob("/home/*") as $user) {
						$index = "$user/public_html/index.html";
						if (!file_exists($index) || 
							in_array(sha1_file($index), 
							// these are the hashes of previous and current default pages
							["386a1e5ec2359ed8996d9b6687c7b306d7e79c0c"])) continue;
						$user = basename($user); ?>
						<li><a href="/~<?=$user?>/">~<?=$user?></a></li>
					<?php } ?>
				</ol>

<?php include('footer.php'); ?>

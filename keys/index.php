<?php require('../header.php'); ?>
	
    <a href="#gpg">GPG</a>
    
    <div id="gpg">
    	<div class="key">
        	<textarea class="key_holder">
            	<?php
					$gpg = file_get_contents('gpg');
				?>
            </textarea>
        </div>
    </div>
    
<?php require('../footer.php'); ?>
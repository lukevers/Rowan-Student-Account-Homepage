<?php require('header.php'); ?>
            <div class="desc">
            	OH HELLO! LOOKS LIKE YOU'VE FOUND MY ROWAN PAGE. 
                I PROBABLY WON'T UPDATE THIS MUCH, SO FEEL FREE
                TO CONTACT ME BELOW:
            </div>
            <hr>
            <a href="http://lukevers.com/">WEBSITE</a> -
            <a href="https://github.com/lukevers">GITHUB</a> -
            <a href="#email">EMAIL</a> -
            <a href="keys/">KEYS</a> -
            <a href="https://maryland.projectmeshnet.org">MESHNET</a>
		</div>
        <div id="email">
        	<div class="mail">
            	SEND ME AN EMAIL <a href="" class="exit">(CLOSE)</a>
                <form method="POST" action="scripts/email.php" >
					<input type="email" name="email" placeholder="Email" class="eform" autocomplete="on" autofocus/>
                    <input type="text" name="subject" placeholder="Subject" class="eform"/>
                    <textarea class="eform" placeholder="Body" rows="10" name="body"></textarea>
					<input type="submit" value="Submit" class="eform"/>
                </form>
            </div>
        </div>
        <div id="thanks">
        	<div class="thanks">
            	THANKS FOR THE EMAIL!<a href="" class="exit">(CLOSE)</a>
            </div>
<?php require('footer.php'); ?>
<div class="grid-container">
		<div class="responsive-nav-social-mobile" data-responsive-toggle="responsive-nav-social" data-hide-for="medium">
		  <div class="responsive-nav-social-mobile-right">
			<button class="menu-icon" type="button" data-toggle="responsive-nav-social"></button>
		  </div>
		</div>

		<div data-sticky-container>
		  <div class="responsive-nav-social" id="responsive-nav-social" data-sticky data-options="marginTop:0;">
				<div class="row align-justify align-middle" id="responsive-menu">
					<div class="responsive-nav-social-right">
						<ul class="menu vertical medium-horizontal">
							<?php
								menuItem($APPpath, "index.php", "<i class='fas fa-2x fa-copy'></i> Naslovna");
								menuItem($APPpath, "ERA.php", "<i class='fas fa-2x fa-copy'></i> ERA");
								menuItem($APPpath, "dashboard.php", "<i class='fas fa-2x fa-copy'></i> Nadzorna ploča");
								menuItem($APPpath, "about.php", "<i class='fas fa-2x fa-copy'></i> O nama");
								menuItem($APPpath, "contact.php", "<i class='fas fa-2x fa-copy'></i> Kontakt");
							?>
						</ul>
					</div>
				</div>
		  </div>
		</div>
	</div>
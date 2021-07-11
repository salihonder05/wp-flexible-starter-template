			<footer>
				<div class="wrap xl-flexbox xl-middle xl-2 container">
					<div class="col">
						<a href="<?=home_url()?>" title="<?php bloginfo('name'); ?> Home">LOGO</a>
					</div>
					<div class="col xl-right">
						FOTER CONTENT
					</div>
				</div>
			</footer>

		</div> <!-- #page -->


		<!-- Popups -->
		<div id="mobile-menu" class="popup">
			<div class="close-button"><a href="#" close-popup>&times;</a></div>
			<div class="wrap">
				<div class="col xl-1-2 xl-paddingx-20 xl-paddingy-20 sm-1-1 xl-center">

					<nav class="mobile"><?php sitename_menu() ?></nav>

				</div>
			</div>
			<div class="overlay"></div>
		</div>

		<div id="video" class="popup">
			<div class="close-button"><a href="#" close-popup>&times;</a></div>
			<div class="wrap container">
				<div class="col xl-1-1 xl-paddingx-20 xl-paddingy-20">

					<div class="video-wrapper full">

						<video 
							class="fill"
							src=""
							controls
							loop playsinline webkit-playsinline></video>

						<div class="play-button">

							<a href="#">PLAY</a>

						</div>

						<div class="pause-button">

							<a href="#">PAUSE</a>

						</div>

					</div>

				</div>
			</div>
			<div class="overlay"></div>
		</div>

		<div id="sample" class="popup">
			<div class="close-button"><a href="#" close-popup>&times;</a></div>
			<div class="wrap container">
				<div class="col xl-1-1 xl-paddingx-20 xl-paddingy-20">

					<div class="h2-size">Popup Content Here</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repudiandae quisquam tempora aperiam velit a vel autem architecto ea. Magni quaerat consequatur voluptatibus itaque. Id tenetur dolorum labore necessitatibus officia?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repudiandae quisquam tempora aperiam velit a vel autem architecto ea. Magni quaerat consequatur voluptatibus itaque. Id tenetur dolorum labore necessitatibus officia?</p>

					<a href="#" class="button" close-popup>Close Popup</a>

				</div>
			</div>
			<div class="overlay"></div>
		</div>

		<div id="sample-not-closeable-by-overlay" class="popup no-overlay-close">
			<div class="close-button"><a href="#" close-popup>&times;</a></div>
			<div class="wrap container">
				<div class="col xl-1-1 xl-paddingx-20 xl-paddingy-20">

					<div class="h2-size">Popup Content Here</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repudiandae quisquam tempora aperiam velit a vel autem architecto ea. Magni quaerat consequatur voluptatibus itaque. Id tenetur dolorum labore necessitatibus officia?</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repudiandae quisquam tempora aperiam velit a vel autem architecto ea. Magni quaerat consequatur voluptatibus itaque. Id tenetur dolorum labore necessitatibus officia?</p>

					<a href="#" class="button" close-popup>Close Popup</a>

				</div>
			</div>
			<div class="overlay"></div>
		</div>


		<?php wp_footer(); ?>

	</body>
</html>
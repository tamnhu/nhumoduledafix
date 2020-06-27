<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1811 pt-5 pb-5">
    <div class="container-fluid s-contact">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="s-contact-element">
					<div class="s-contact-icon">
						<i class="fas fa-phone-square-alt"></i>
					</div>
					<h4 class="title">CALL US</h4>
					<p class="strong">+001 234 56 78</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="s-contact-element">
					<div class="s-contact-icon">
						<i class="fas fa-envelope"></i>
					</div>
					<h4 class="title">EMAIL</h4>
					<p>hello@dream-theme.com</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="s-contact-element">
					<div class="s-contact-icon">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<h4 class="title">LOCATION</h4>
					<p>121 Rock Sreet, 21 Avenue, New York, NY 92103-9000</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="s-contact-element">
					<div class="s-contact-icon">
						<i class="fas fa-clock"></i>
					</div>
					<h4 class="title">BUSINESS HOURS</h4>
					<p>Monday – Friday … 10 am – 8 pm Saturday, Sunday … Closed</p>
				</div>
			</div>
		</div>
    </div>
</div>
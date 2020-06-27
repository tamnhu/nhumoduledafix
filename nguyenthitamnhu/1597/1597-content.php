<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1597 pt-5 pb-5">
    <div class="container-fluid s-contact">
		<div class="row">
			<div class="col-md-4">
				<div class="s-contact-element">
					<a href="#" class="s-contact-icon">
						<i class="fas fa-book-open"></i>
					</a>
					<h4 class="title"><a href="#">Discover our story</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattir dapibus leo.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="s-contact-element">
					<a href="#" class="s-contact-icon">
						<i class="fas fa-window-restore"></i>
					</a>
					<h4 class="title"><a href="#">Our services</a></h4>
					<p>Ut elit tellus - luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="s-contact-element">
					<a href="#" class="s-contact-icon">
						<i class="fas fa-print"></i>
					</a>
					<h4 class="title"><a href="#">Get a quote</a></h4>
					<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo nulla.</p>
				</div>
			</div>
		</div>
    </div>
</div>
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1768 pt-5 pb-5">
    <div class="container-fluid s-blog px-4">
 
		  <ul class="nav s-blog-tabs">
		    <li>
		    	<a class="active show" data-toggle="tab" href="#all">View all</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#company">Company</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#industry">Industry</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#media">Media</a>
		    </li>
		    <li>
		    	<div class="sort">
		    		<a id="date-sort" href="#"><i class="far fa-calendar-alt"></i></a>
		    		<a href="#" class="switch-sort">
		    			<span></span>
		    		</a>
		    		<a href="#">AZ</a>
		    	</div>
		    </li>
		    <li>
		    	<div class="sort">
		    		<a href="#"><i class="fas fa-sort-amount-down"></i></a>
		    		<a href="#" class="switch-sort">
		    			<span></span>
		    		</a>
		    		<a href="#"><i class="fas fa-sort-amount-up"></i></a>
		    	</div>
		    </li>
		  </ul>

		  <div class="tab-content element">
		    <div id="all" class="tab-pane fade in active show">
		      <div class="row">
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img1.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Fusce aliquam – nunc ac suscipit</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Industry</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Morbi ut mi metus. Mauris at orci urna. Nulla sodales odio nulla, vitae dignissim arcu malesuada vel. Vestibulum at tincidunt lorem. Sed molestie sollicitudin tempor.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/image2.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Aliquam erat volutpat</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Media</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Suspendisse pulvinar nulla et lacus fringilla semper. Nam volutpat varius nisi. Duis et fringilla est. Vestibulum non diam sem. Cras pulvinar enim ut rhoncus faucibus.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img3.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Quisque semper malesuada ipsum</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Company</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Vestibulum semper sed magna pretium congue. Fusce eget arcu eget nisi mattis lacinia sit amet at sem. Quisque porttitor bibendum leo ornare pharetra. Curabitur cursus sapien sed porta dapibus. Quisque quis ex mattis, euismod mauris eget, scelerisque sapien.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img4.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Suspendisse lacinia dolor</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Industry</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Vestibulum semper sed magna pretium congue. Fusce eget arcu eget nisi mattis lacinia sit amet at sem. Quisque porttitor bibendum leo ornare pharetra. Curabitur cursus sapien sed porta dapibus. Quisque quis ex mattis, euismod mauris eget, scelerisque sapien.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img5.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Aliquam bibendum – augue a dictum posuere</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Company</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Aliquam bibendum, augue a dictum posuere, ante diam malesuada felis, ac ultrices metus velit eget mauris. Aenean mollis tristique dolor quis mattis. Nullam tellus libero, viverra a rutrum a, sagittis vel massa. Praesent tempus dignissim tellus, quis lobortis lorem aliquam ac.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img6.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Maecenas sit amet commodo tellus</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Media</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Maecenas feugiat ante et dolor sollicitudin, in sodales leo aliquet. Aliquam sit amet massa condimentum erat ultrices gravida at ac nibh. Integer a urna nec lorem eleifend volutpat.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img7.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Nulla – sodales odio nulla</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Media</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Nulla sodales odio nulla, vitae dignissim arcu malesuada vel. Vestibulum at tincidunt lorem. Sed molestie sollicitudin tempor. Etiam id justo in erat suscipit aliquet non id velit.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img8.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Mauris at orci urna dolor</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Company</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Morbi ut mi metus. Mauris at orci urna. Nulla sodales odio nulla, vitae dignissim arcu malesuada vel. Vestibulum at tincidunt lorem. Sed molestie sollicitudin tempor. Etiam id justo in erat suscipit aliquet non id velit.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      </div>
		    </div>

		    <div id="company" class="tab-pane fade">
		      <div class="row">

		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img3.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Quisque semper malesuada ipsum</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Company</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Vestibulum semper sed magna pretium congue. Fusce eget arcu eget nisi mattis lacinia sit amet at sem. Quisque porttitor bibendum leo ornare pharetra. Curabitur cursus sapien sed porta dapibus. Quisque quis ex mattis, euismod mauris eget, scelerisque sapien.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>

		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img5.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Aliquam bibendum – augue a dictum posuere</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Company</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Aliquam bibendum, augue a dictum posuere, ante diam malesuada felis, ac ultrices metus velit eget mauris. Aenean mollis tristique dolor quis mattis. Nullam tellus libero, viverra a rutrum a, sagittis vel massa. Praesent tempus dignissim tellus, quis lobortis lorem aliquam ac.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>


		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img8.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Mauris at orci urna dolor</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Company</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Morbi ut mi metus. Mauris at orci urna. Nulla sodales odio nulla, vitae dignissim arcu malesuada vel. Vestibulum at tincidunt lorem. Sed molestie sollicitudin tempor. Etiam id justo in erat suscipit aliquet non id velit.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      </div>
		    </div>

		    <div id="industry" class="tab-pane fade">
		      <div class="row">
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img1.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Fusce aliquam – nunc ac suscipit</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Industry</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Morbi ut mi metus. Mauris at orci urna. Nulla sodales odio nulla, vitae dignissim arcu malesuada vel. Vestibulum at tincidunt lorem. Sed molestie sollicitudin tempor.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>

		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img4.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Suspendisse lacinia dolor</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Industry</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Vestibulum semper sed magna pretium congue. Fusce eget arcu eget nisi mattis lacinia sit amet at sem. Quisque porttitor bibendum leo ornare pharetra. Curabitur cursus sapien sed porta dapibus. Quisque quis ex mattis, euismod mauris eget, scelerisque sapien.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>

		      </div>
		    </div>

		    <div id="media" class="tab-pane fade">
		      <div class="row">
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/image2.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Aliquam erat volutpat</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Media</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Suspendisse pulvinar nulla et lacus fringilla semper. Nam volutpat varius nisi. Duis et fringilla est. Vestibulum non diam sem. Cras pulvinar enim ut rhoncus faucibus.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>

		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img6.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Maecenas sit amet commodo tellus</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Media</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Maecenas feugiat ante et dolor sollicitudin, in sodales leo aliquet. Aliquam sit amet massa condimentum erat ultrices gravida at ac nibh. Integer a urna nec lorem eleifend volutpat.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>
		      	<div class="col-lg-3 col-md-4 col-sm-6 hd-ct">
		      		<div class="element-image">
		      			<div class="opa-image">
		      			</div>
		      			<a href="#" class="plus-link">
		      				<i class="fas fa-plus"></i>
		      			</a>
		      			<a href="#">
		      				<img class="img-fluid" src="images/img7.jpg" alt="">
		      			</a>
		      		</div>
		      		<div class="element-content px-4 pt-3 pb-3">
		      			<h3>
		      				<a href="#">Nulla – sodales odio nulla</a>
		      			</h3>
			      		<div class="element-meta mt-3">
			      			<span>Media</span>
			      			<span>&#8226;</span>
			      			<span>November 13, 2019</span>
			      		</div>
			      		<p class="st-dec">Nulla sodales odio nulla, vitae dignissim arcu malesuada vel. Vestibulum at tincidunt lorem. Sed molestie sollicitudin tempor. Etiam id justo in erat suscipit aliquet non id velit.</p>
			      		<a class="read-more" href="#">Read more &ensp;<i class="fas fa-caret-right"></i></a>
		      		</div>
		      	</div>

		      </div>
		    </div>
		  </div>

		  <div class="paginator text-center pt-5">
		  	<a href="#" class="page p-active">1</a>
		  	<a href="#" class="page">2</a>
		  	<a href="#" class="p-next"><i class="fas fa-long-arrow-alt-right"></i></a>
		  </div>
    </div>
</div>
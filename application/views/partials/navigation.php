	</head>
		<body>
			<div id="top_nav" class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a href="" class="brand">Book Review</a>
						<div class="nav-collapse">
							<ul class="nav">
<?php 				if(isset($is_logged_in) && $is_logged_in)
					{	?>
<?php 				}
					else
					{	?>
								<li><a href="/books/index">Home</a></li>
<?php 				}	?>
							</ul>

							<ul class="nav pull-right">
<?php 				if(isset($is_logged_in) && $is_logged_in)
					{	?>
								<li><a href="/">Log off</a></li>
<?php 				}
					else
					{	?>
<?php 				}	?>
							</ul>
						</div>
					</div>
				</div>
			</div>

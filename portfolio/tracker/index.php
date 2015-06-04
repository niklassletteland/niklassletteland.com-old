<?php
	$theme_color = '#00BF00';
?>
<?php include('../../includes/top.php'); ?>
	
	<title>portfolio - Tracker</title>
	<style type="text/css">
		header nav ul li a#portfolio {
			background-color: <?php echo($theme_color); ?>;
			border: 1px solid black;
		}
		@media (max-width: 730px) {
			header nav ul li a#portfolio {
				background-color: #949494;
				border: none;
			}
			header nav ul li a#portfolio:hover { 
				background-color: #949494;
			}
		}
		#content {
			border: 1px solid <?php echo($theme_color); ?>;
		}
		iframe {
			width: 670px;
			height: 360px;
			margin: 20px auto;
			display: block;
		}
	</style>		
</head>

<?php include('../../includes/middle.php'); ?>
					
					
	<div class="breadcrumbs">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">tracker</a>
	</div>
	
	<p><a href="http://cryptic-cliffs-4694.herokuapp.com/Tracker/" target="_blank">Tracker</a>: a custom web-app used to keep track of hours and projects (currenlty a 
	work in progress).</p>
	
	<div class="img-box" style="max-width:1000px;">
		<img src="../../img/portfolio/tracker-1.png" alt="Timing a project using the Tracker" />
		<p class="caption">The Tracker allows a user to create projects and subprojects and keep track of time spent for each.</p>
	</div>	

	<p>This is a work-in-progress that I've been toying with in my spare time. It's a time-keeper and work organizer app that I'm making, which I plan to use
	for keeping track of the time I spend on various projects and clients. The basic idea is simple: the user creates 'work objects', which represent some project,
	client, or any other thing I would spend time on and want to track. Work objects can be created as a sub-project of an existing one, to track the time spent on
	a particular section of a project. When working, you simply log in, start a new timer instance, and start working. Each work instance has fields for a description, 
	work completed, tags, and notes, allowing the user to keep their work organized and go back later in time and see clearly how the time was used and find any
	pertinent information that was recorded.</p>
	
	<p>There are a many similar apps to this online that I could have leveraged to keep track of my time, of course. The impetus for creating this was to be more
	of a learning experience - something not too complex, but that would give me some experience working on a custom web-app with a MVC approach. And I think it 
	will be useful for me in the future. The app is hosted on Heroku and runs Node.js on the back-end - in particular, working on this has been a way for me to
	start learing Node.js, which I've had an interest in checking out for a while.</p>
	
	<p>I spent a good amount of time on the front-end interface of the Tracker. I wanted the UI to be fully responsive, so that I can access from my cell phone and keep
	track of related work while I'm not at my desk. The interface is completely custom, using HTML5 and CSS3, and features a tab-based navigation system.</p>
	
	<div class="img-box" style="max-width:906px;">
		<img src="../../img/portfolio/tracker-5.png" alt="demonstration of the tracker responding to screen size" />
		<p class="caption">the tracker is fully responsive. the custom tab interface is used to navigate between UI elements</p>
	</div>
	
	<div class="img-box" style="max-width:1000px;">
		<img src="../../img/portfolio/tracker-2.png" alt="viewing past projects with the tracker" />
		<p class="caption">viewing past work is easy. also, I integrated the Zingchart charting library to graphically display the time spent of projects</p>
	</div>
	
	<p>As I say, this is a work in progress. You can view the current version <a href="http://cryptic-cliffs-4694.herokuapp.com/Tracker/" target="_blank">on Heroku here</a>.
	It isn't yet integrated with a database; currently the sample data is being pulled from a static JSON file. If interested, you can check out the source
	on <a href="https://github.com/niklassletteland/Tracker" target="_blank">Github</a>. I'll post updates as I have time to improve upon and complete the project.</p>
	
	
	<div class="breadcrumbs last">
		<a href="<?php echo($home); ?>">home</a> &mdash;> <a href="<?php echo($home); ?>portfolio/">portfolio</a> &mdash;> <a href="">tracker</a>
	</div>
				

<?php include('../../includes/footer.php'); ?>
		

	
	
	
<?php include('../../includes/bottom.php'); ?>
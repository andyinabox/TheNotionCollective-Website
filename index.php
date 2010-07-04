
<?php

	// WHEREVER YOU GO, THERE YOU ARE
	$html_base = explode('/', $_SERVER['SCRIPT_NAME']);
	array_pop($html_base);
	$html_base = implode($html_base, '/').'/';
?>
<!-- //////////////////////


      T
      H
      E

      N
      O
      T
      I
      O
  THE NOTION COLLECTIVE
  
      C
      O
      L
      L
      E
      C
      T
      I
      V
      E


/////////////////////// -->

<!DOCTYPE html>

<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="Jason Bahling, Andy Dayton, Michael Eckblad, Jonathan Wohl, Candice Heberer" />
		<meta name="copyright" content="The Notion Collective" />
		<meta name="company" content="The Notion Collective" />
		<meta name="description" content="The Notion Collective. Great minds think together." />
		<meta name="keywords" content="art, design, consulting, creative, web development, brooklyn, nyc, collective, notion" />
		
		<title>The Notion Collective</title>

		<script src="js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery-ui-1.8.2.custom.min.js" type="text/javascript" charset="utf-8"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(function(){
				$('#work_button').click(function(e) {
					e.preventDefault();
					$('#Work').toggle();
				});
				$('#Work a').click(takeMeThere);
				$('#Nav #collective_notions').click(takeMeThere);
				$('a#close').click(function(e) { e.preventDefault; window.location.href = $('iframe#Portal').attr('src'); });
			});
			
			function takeMeThere(e) {
				// keep from clicking
				e.preventDefault();
				
				// where are we going?
				var src = $(this).attr('href');
				
				// close the work navigation if it was a work link
				if($(this).parents('#Work').length != 0) {
					$('#Work').toggle();
				}
				
				// simply refresh if the path is here
				if(src == '.') { window.location.href = window.location.href; }
				
				// otherwise, load link into frame
				else { $('iframe#Portal').attr('src', src); }
			}
		</script>
		
		<style type="text/css" media="screen">
		
			html, body, iframe, div#Container { margin:0; padding:0; height:100%; }
			
			body {
				margin: 0;
				padding: 0;
				font-family: Helvetica, Arial, sans-serif;
				font-size: small;
				overflow: hidden;
			}
			h1 {}
			
			a, a:link, a:visited {
				text-decoration: none;
				color: #000;
				padding: .2em;
			}
			a:hover {
				background: #000;
				color: #fff;
			}
			
			ul {
				list-style: none;
				padding: 0;
			}
			ul li {
				margin: .5em 1em .5em 1.5em;
				padding: 0;
				margin-left: 7px;
			}

			#Container {
		
			}

			#Header {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
/*				background: #fff;*/
				height:2.9em;
				border-bottom: 1px solid #ccc;
			}
			
			#Header h1 {
				position: absolute;
				margin: 0;
				top: 0;
				line-height: 1.5em;
			}
			
			#Nav {
				position: absolute;
				top: 2em;
				right: 0px;
				margin-right: 1em;
				text-align: left;
				text-transform: uppercase;
				font-size: 80%;
			}
			
			
			#Work {
				position: absolute;
				top: 2.9em;
				right: 0;
				background: #fff;
				border-left: 1px solid #ccc;
				border-bottom: 1px solid #ccc;
				margin-top: 0;
				z-index: 100;
			}
			
			body.js #Work { display: none; }
			
			iframe#Portal {
				display: block;
				border: none;
				height: 100%;
				width: 100%;
				margin-top: 2.9em;
			}

		</style>
		<base href="<?php echo $html_base ?>" />
</head>

<body>
	
	<!-- activate js styles for auto-hiding -->
	<script type="text/javascript" charset="utf-8">$('body').addClass('js');</script>

	<div id="Container">
		<div id="Header">
			<h1><a href="." title="that's us">The Notion Collective</a></h1>
			<div id="Nav">
				<a title="get to know us" id="collective_notions" href="http://notioncollective.tumblr.com">collective notions</a> |
				<a title="send us a message" href="mailto:info@notioncollective.com">email</a> |
				<a title="see what we've been up to" href="#" id="work_button">work &darr;</a> |
				<a title="close this bar" id="close" href="#">x</a>
			</div>
			
			<div id="Work">
				<ul id="work_list">
					<li id="kalrieman"> &larr; <strong>Kal Rieman</strong> | <a target="Portal" title="see Kal Rieman's website" href="http://kalrieman.com">http://kalrieman.com</a></li>
					<li id="home"> &larr; <strong>The Notion Collective</strong> | <a target="Portal" title="our website" href=".">http://notioncollective.com</a></li>
				</ul>
			</div>
		</div>

		<iframe id="Portal" src="http://www.google.com/search?hl=en&q=the+notion+collective" seamless></iframe>
	</div>
	
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Treerock - HTML5 Image Loading</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://treerock.me/assets/favicon.ico">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/project.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://treerock.me/assets/js/html5shiv.js"></script>
      <script src="http://treerock.me/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="clearfix">
        <div class="container">
            <ul>
                <li><a href="//treerock.me/">Home</a></li>
                <!-- <li><a href="#">News</a></li> -->
                <li><a href="//sandbox.treerock.me/">Sandbox</a></li>
            </ul>
        </div>
    </nav>
    <header class="section">
        <div class="container">
        	<h1>Treerock</h1>
        	<p class="sub"><span>Sandbox - Drag and Drop Image</span></p>    
        </div>
    </header>

    <div class="container main clearfix">

        <div class="row sb-project clearfix show">
            <div class="col col-6">
                <p id="fr-status" class="hold">File API &amp; FileReader API not supported so this won't work.</p>
                <div id="holder"></div>
                <p class="button"><a href="#" id="clear">Clear</a></p>
            </div>
            <div class="col col-6 meta">
				<p class="date">June 2013</p>
                <p>This is me playing around with the File Reader API.</p>
				<p>It uses HTML5 Drag and Drop features that allow you to grab local files and drag them onto a webpage and the FileReader API which allows you to generate a date URL representing the image file.</p>
                <ul class="reading-list">
                    <li><a href="//www.html5rocks.com/en/tutorials/file/dndfiles/">Using the File APIs</a>
                    </li>
                    <li><a href="//www.w3.org/TR/file-upload/">W3C File Specification</a></li>
                    <li><a href="//developer.mozilla.org/en-US/docs/DragDrop/Drag_and_Drop">Drag and Drop</a></li>
                    <li><a href="//developer.mozilla.org/en-US/docs/Web/API/FileReader">FileReader API</a></li>
					<li><a href="http://jsfiddle.net/jimschubert/DqcUg/">Example on JSFiddle</a></li>
                </ul>
                <p><a href="//github.com/treerock/sb-image-loading">Page Source on Github</a></p>
            </div>
        </div>
    </div>

    <footer class="section clearfix">
        <div class="container">
        	<p>Fais ce que tu veux.</p>
        </div>
    </footer>
    <script src="scripts/project.js"></script>
</body>

</html>
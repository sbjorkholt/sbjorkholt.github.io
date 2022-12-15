<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet", type="text/css", href="./styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <title>Short Stories</title>

    </head>
    <body>
    <header>
        <nav id="navbar" class="navbar item-nav">
			<ul>
			    <li><a href="#foiluniverse" class="nav-header">Four characters</a>
                <p class = "navbar-name">The lives of Amanda, Joanna, Benjamin and John</p>
                    <ul><a href="#hope">Hope</a></ul>
                    <ul><a href="#joannaswan">Joanna and the swan</a></ul>
                    <ul><a href="#benjaminsjourney">Benjamin's journey</a></ul>
                    <ul><a href="#amandassin">Amanda's sin</a></ul>
                </li>
				<li><a href="#creators" class="nav-header">The creators</a>
                <p class = "navbar-name">Reflections from the creators of the world</p>
                    <ul><a href="#librarian">The Librarian</a></ul>
                    <ul><a href="#dataanalyst">The Data Analyst</a></ul>
                    <ul><a href="#mismatchmaker">The Mismatchmaker</a></ul>
                    <ul><a href="#birthofnobody">The birth of nobody</a></ul>
                </li>
                <li><a href="#freestanding" class="nav-header">Free-standing stories</a>
                <p class = "navbar-name">Stories written outside the other two universes</p>
                    <ul><a href="#goodgirls">Good girls</a></ul>
                    <ul><a href="#awakening">Awakening</a></ul>
                    <ul><a href="#equation42">Equation 42</a></ul>
                    <ul><a href="#letter">Letter intended for my future nephew or niece</a></ul>
                </li>
			</ul>
		</nav>
    </header>
        <section class = "main_div">
            <section id = "foiluniverse">
                <h1>Four characters</h1>
                <div>
                    <div><h3 id="hope">Hope</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Hope.txt')); ?></p></div>
                    <div><h3 id="joannaswan">Joanna and the swan</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Joanna and the swan.txt')); ?></p></div>
                    <div><h3 id="benjaminsjourney">Benjamin's journey</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Benjamins Journey.txt')); ?></p></div>
                    <div><h3 id = "amandassin">Amanda's sin</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Amandas Sin.txt')); ?></p></div>
                </div>
            </section>
            <section id = "creators">
                <h1>The creators</h1>
                <div>
                    <div><h3 id = "librarian">The Librarian</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/The Librarian.txt')); ?></p></div>
                    <div id = "dataanalyst"><h3>The Data Analyst</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/The Data Analyst.txt')); ?></p></div>
                    <div id = "mismatchmaker"><h3>The Mismatchmaker</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/The Mismatchmaker.txt')); ?></p></div>    
                    <div id = "birthofnobody"><h3>The birth of Nobody</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/The birth of Nobody.txt')); ?></p></div>
                </div>
            </section>
            <section id = "freestanding">
                <h1>Free-standing stories</h1>
                <div>
                    <div><h3 id = "goodgirls">Good girls</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Good girls.txt')); ?></p></div>
                    <div><h3 id = "awakening">Awakening</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Raw Awakening.txt')); ?></p></div>
                    <div id = "equation42"><h3>Equation 42</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Equation 42.txt')); ?></p></div>
                    <div id = "letter"><h3>Letter intended for my future nephew or niece</h3>
                    <p><?php echo nl2br(file_get_contents('./txt/Letter intended for my future nephew or niece.txt')); ?></p>
                </div>
            </section>
        </section>
    <footer>
    </footer>
    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/kube.min.js"></script>
    <script src="js/site.js"></script>
    </body>
</html>
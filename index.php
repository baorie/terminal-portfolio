<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mohnjatthews | johnmatthews</title>
    <style>
        a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}

        @font-face {
            font-family: 'dos';
            src: url('/dos.ttf');
        }

        html {
            background-color: #bbbbbb;
        }

        body {
            margin: 0;
            color: #bbbbbb;
            font-family: 'dos', monospace;
            font-size: 20px;
            line-height: 20px;
            word-wrap: break-word;
            background-color: #000084;
        }

        h1, h2, h3 {
            font-size: 18px;
            padding: 0;
            color: white;
            text-transform: uppercase;
        }

        a {
            text-decoration: none;
            color: #fefe54;
        }

        a:hover {
            background-color: #FFA500;
        }

        main {
            padding-left: 15px;
            padding-right: 15px;
            max-width: 800px;
        }

        nav ul {
            color: black;
            list-style-type: none;
            margin: 0;
            padding-left: 10px;
            margin-bottom: 20px;
            overflow: hidden;
            background-color: #bbbbbb;
        }

        nav li {
            float: left;
        }

        nav li a {
            text-transform: uppercase;
            font-size: 20px;
            display: block;
            color: black;
            margin-right: 5px;
            padding-left: 5px;
            padding-right: 4px;
            text-decoration: none;
        }

        nav li a:hover {
            background-color: #111;
            color: white;
        }

        nav .active {
            background-color: #111;
            color: white;
        }

        h1 {
            color: black;
            background: #00aaaa;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

        h2 {
            color: pink;
            margin-top: 15px;
        }

        p span {
            color: white;
        }

        .lead {
            padding: 9px 14px 9px 14px;
            border: 2px solid #bbbbbb;
        }

        contact p {
            cursor: pointer;
        }

        footer {
            color: black;
            background: #bbbbbb;
            margin-top: 30px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

        footer a {
            color: black;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <header>
            <h1>baorie.github.io</h1>
        </header>

        <about id="about">
            <h2>>>> Greetings!</h2>
            <p class="lead">I'm Rielle Quiambao. I write code and engineer! Contact information is at the bottom, recent projects are in the middle, and the introductory paragraph is right here.</p>
        </about>

        <projects id="projects">
            <h2>>>> Projects</h2>
            /*
            <p><a href="//striphealthcafe.com/">striphealthcafe.com</a><br>Website, hosting, and graphic design for a healthy-food cafe based in Manchester UK.</p><br>
            <p><a href="//theninjareport.co.uk">theninjareport.co.uk</a><br>Website and hosting for a metal band in the UK.</p><br>
            <p><a href="//mohnjatthews.github.io/friendsum/">friendsum.site</a><br>Custom lorem ipsum generator created during a hackday.</p><br>
            <p><a href="//davidmollard.co.uk">davidmollard.co.uk</a><br>Website for a personal fitness instructor contact website.</p><br>
            <p><a href="//mohnjatthews.com/projects/lotr-timer">lotr-timer.site</a><br>The Lord of the Rings related hackday project.</p><br>
            <p><a href="//www.tithebarn.net/">tithebarn.net</a><br>Website, hosting, and company branding for a bed and breakfast in Cumbria, UK.</p><br>*/
        </projects>

        <contact id="contact">
            <h2>>>> Contact</h2>
            <p id="email-address-reveal"><a onclick="toggleEmail()">Click for Email</a></p>
            <p><a href="//github.com/baorie">GitHub</a></p>
            <p><a href="//www.linkedin.com/in/riellemq">LinkedIn</a></p>
        </contact>
    </main>

    <footer>
        <p>Loaded <?= filesize(basename($_SERVER['SCRIPT_FILENAME'])); ?>KB in 15.<?= rand(1,11); ?>ms</p>
    </footer>
</body>
<script>
    function toggleEmail() {
    var o = "rielle.quiambao@gmail.com";
    document.getElementById("email-address-reveal").innerHTML != '<a href="mailto:' + o + '">' + o + "</a>" ? document.getElementById("email-address-reveal").innerHTML = '<a href="mailto:' + o + '">' + o + "</a>" : document.getElementById("email-address-reveal").innerHTML = "&nbsp;"
    }
</script>
</html>

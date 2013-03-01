<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8"/>

    <meta name = "viewport" content = "width = device-width"/>
    <meta name = "viewport" content = "initial-scale = 1.0"/>

    <title>Caravan of Comics Australian Cartoonists Tour of North America | <?= $title ?></title>

    <link rel="stylesheet" type="text/css" href="/css/jquery.lightbox-0.5.css" media="screen" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/base.css" />

    <link rel="stylesheet" type="text/css" media="screen and (max-width: 700px)" href="/css/480.css" />
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 320px)" href="/css/320.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 700px) and (max-width: 960px)" href="/css/768.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 960px)" href="/css/960.css" />

    <script type="text/javascript" src="http://use.typekit.com/jtu8mti.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body class='<?= $bodyclass ?>'>
    <div id="container">
        <header>
            <a href="/"><h1><span class='caravan'>Caravan</span> <span class="of">of</span> <span class='comics'>Comics</span></h1></a>
            <h2><span class="epic">An epic tour of </span>the finest Australian cartoonists <span class="epic">money can buy</span></h2>
        </header>
        <section id="nav">
            <h2><span class="epic">May-June 2012. </span><span class="cities">Canada and North America</span></h2>
            <span class='nav-left'>
              <a class="home" href="/" title="home">Home</a>
              <a class="press" href="/about" title="All about where we'll be">Details</a>
            </span>
            <span class='nav-right'>
              <a class="support" href="/support" title="Get on board the caravan">Support!</a>
              <a class="blog" href="http://2012-diary.caravanofcomics.com" title="Stay up to date">Blog</a>

            </span>
        </section>
        <div id="artists-content">
            <section id="artists">
                <h2>Artists</h2>
                <ul>
                    <li class='bruce-mutard'><a href="/artist/bruce-mutard" title="Bruce Mutard">Bruce Mutard</a></li>
                    <li class='mirranda-burton'><a href="/artist/mirranda-burton" title="Mirranda Burton">Mirranda Burton</a></li>
                    <li class='scarlette-baccini'><a href="/artist/scarlette-baccini" title="Scarlette Baccini">Scarlette Baccini</a></li>
                    <li class='pat-alexander'><a href="/artist/pat-alexander" title="Patrick Alexander">Patrick Alexander</a></li>
                    <li class='gregory-mackay'><a href="/artist/gregory-mackay" title="Gregory Mackay">Gregory Mackay</a></li>
                    <li class='marijka-gooding'><a href="/artist/marijka-gooding" title="Marijka Gooding">Marijka Gooding</a></li>
                    <li class='dan-hayward'><a href="/artist/dan-hayward" title="Dan Hayward">Dan Hayward</a></li>
                    <li class='friends'><a href="/friends" title="Friends of the Caravan">Friends of the Caravan</a></li>
                </ul>
            </section>

            <?= $content ?>

        </div>

        <footer>
            <div id="credits">
                <p>View Previous Caravans: <a href="/2012">2012</a> |
                Site design by <a href="http://www.sixty40.com/">Matt Taylor</a> |
                Web Development by <a href="http://bundle.com.au">Andrew @ bundle</a></p>
            </div>
        </footer>

    </div>

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="/js/jquery.lightbox-0.5.min.js"></script>
    <script src="/js/slides.min.jquery.js"></script>
    <script src="/js/caravan.js"></script>
    <!--<script src="http://caravanofcomics-2012.tumblr.com/api/read/json?num=1&callback=show_tumblr"></script>-->
    <script src="//static.getclicky.com/js" type="text/javascript"></script>
    <script type="text/javascript">try{ clicky.init(66524776); }catch(e){}</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66524776ns.gif" /></p></noscript>
</body>

</html>

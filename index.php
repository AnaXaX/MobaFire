<!DOCTYPE html>
<html>

<head>
    <title>Page de test</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <div id="wrapper">
<!-- Nav BAR -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Test Badouch</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Menu 1<span class="sr-only">(current)</span></a>
                </li>
                <li><a href="#">Menu 2</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">9is hna<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Ginger</a>
                        </li>
                        <li><a href="#">Nigga</a>
                        </li>
                        <li><a href="#">Bghit ner9a9</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Alpha/Yuho</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Taqi chkadir hna</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="3alaych kat9léb ?">
                    </div>
                    <button type="submit" class="btn btn-default">wrék hna</button>
                </form>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- END Nav Bar -->

<p id="video-controls" class="black-65">Video controls:
    <br /><a href="#" class="tubular-play">Play</a> | <a href="#" class="tubular-pause">Pause</a> | <a href="#" class="tubular-volume-up">Volume Up</a> | <a href="#" class="tubular-volume-down">Volume Down</a> | <a href="#" class="tubular-mute">Mute</a>
</p>
<div class="black-50">

    <div class="container">
        <div class="row">
            <h2>Page de test</h2>
            <?php echo '
          <p class="navbar-text ">
                    Cette page contient <strong>uniquement</strong> du code HTML.<br /><br>
                    Voici quelques petits tests :
                </p>
    ';?>

        </div>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item" style="color: blue;">Texte en bleu</li>
                <li class="list-group-item" style="color: red;">Texte en rouge</li>
                <li class="list-group-item" style="color: green;">Texte en vert</li>
            </ul>
        </div>
    </div>
    </div>
</body>

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" charset="utf-8" src="js/jquery.tubular.1.0.js"></script>	
<script type="text/javascript" charset="utf-8" src="js/index.js"></script>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>
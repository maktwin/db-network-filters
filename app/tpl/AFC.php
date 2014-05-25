<html>
<head>
	<link rel="stylesheet" type="text/css" href="/static/vendors/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/vendors/humane.libnotify.css" />
    <link rel="stylesheet" type="text/css" href="/static/vendors/bootswatch/cerulean.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/vendors/bootstrap/css/bootstrap-responsive.css" />

	<script type="text/javascript" src="/static/vendors/jquery.js"></script>
	<script type="text/javascript" src="/static/vendors/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="/static/scripts/script.js"></script>
    <script type="text/javascript" src="/static/vendors/humane.min.js"></script>
</head>
<body>
    <div class="body-container container">
        <div>
            <div class="block_link"><a href="/filters" class="all_filters">Back to all filters</a></div>
            <h3 class="muted">База даних фільтрів для ЕМС</h3>
            <!-- <?php // include __DIR__ . '/navigation.php'; ?> -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li><a href="#help">Допомога</a></li>
                            <li class="active"><a href="#settings">Загальні налашування</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <img src='/static/image/<?=$this->AFC['ID']?>.png'>
    </div>
</body>
</html>

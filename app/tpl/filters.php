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
        <div>
            <fieldset><legend>Управління фільтрами</legend></fieldset>
            <table class="table table-striped table-hover table-filter">
                <thead>
                    <th>Назва</th>
                    <th>Виробник</th>
                    <th>Тип</th>
                    <th>Струм</th>
                    <th>Напруга</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                <?php foreach ( $this->filters as $filter ) {
                ?>
                    <tr>
                        <input type="hidden" type="text" class="delete-filterID" value="<?=$filter['ID']?>"/>

                        <td><input class="input-small base" type="text" name="name" value="<?=$filter['name']?>"/></td>
                        <td><input class="input-small base" type="text" name="vendor" value="<?=$filter['vendor'];?>"/></td>
                        <td><input class="input-small base" type="text" name="type" value="<?=$filter['type']?>"/></td>
                        <td><input class="input-small base" type="text" name="mA" value="<?=$filter['mA']?>"/></td>
                        <td><input class="input-small base" type="text" name="mV" value="<?=$filter['mV']?>"/></td>
                        <td>
                            <button class="btn update_filter">Update</button>
                            <button class="btn delete_filter">Delete</button>
                        </td>
                        <td>
                            <div class="link_AFC"><a href="/AFC/<?=$filter['AFCID']?>">AFC</a></div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                    <tr><td colspan="8"><button class="btn button-add_filter">Add filter</button></td></tr>
                </tfoot>
            </table>
        </div>
        <? include  __DIR__ . '/form_add_filter.php'; ?>
    </div>

</body>
</html>
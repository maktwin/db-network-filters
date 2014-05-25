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
        <div class="block_AFC">
        <table>
            <thead>
                <td>10</td>
                <td>15</td>
                <td>20</td>
                <td>25</td>
                <td>30</td>
                <td>50</td>
                <td>100</td>
                <td>150</td>
                <td>200</td>
                <td>250</td>
                <td>300</td>
                <td>500</td>
                <td>1000</td>
                <td>1500</td>
                <td>2000</td>
                <td>2500</td>
                <td>3000</td>
                <td>5000</td>
                <td>10000</td>
                <td>15000</td>
                <td>20000</td>
                <td>30000</td>
            </thead>
            <tr>
                <input type="hidden" class="update-AFCID" value="<?= $this->AFC['ID']; ?>">
                <td><input type="text" class="input-small AFC" name="10" value="<?=$this->AFC['10']?>"></td>
                <td><input type="text" class="input-small AFC" name="15" value="<?=$this->AFC['15']?>"></td>
                <td><input type="text" class="input-small AFC" name="20" value="<?=$this->AFC['20']?>"></td>
                <td><input type="text" class="input-small AFC" name="25" value="<?=$this->AFC['25']?>"></td>
                <td><input type="text" class="input-small AFC" name="30" value="<?=$this->AFC['30']?>"></td>
                <td><input type="text" class="input-small AFC" name="50" value="<?=$this->AFC['50']?>"></td>
                <td><input type="text" class="input-small AFC" name="100" value="<?=$this->AFC['100']?>"></td>
                <td><input type="text" class="input-small AFC" name="150" value="<?=$this->AFC['150']?>"></td>
                <td><input type="text" class="input-small AFC" name="200" value="<?=$this->AFC['200']?>"></td>
                <td><input type="text" class="input-small AFC" name="250" value="<?=$this->AFC['250']?>"></td>
                <td><input type="text" class="input-small AFC" name="300" value="<?=$this->AFC['300']?>"></td>
                <td><input type="text" class="input-small AFC" name="500" value="<?=$this->AFC['500']?>"></td>
                <td><input type="text" class="input-small AFC" name="1000" value="<?=$this->AFC['1000']?>"></td>
                <td><input type="text" class="input-small AFC" name="1500" value="<?=$this->AFC['1500']?>"></td>
                <td><input type="text" class="input-small AFC" name="2000" value="<?=$this->AFC['2000']?>"></td>
                <td><input type="text" class="input-small AFC" name="2500" value="<?=$this->AFC['2500']?>"></td>
                <td><input type="text" class="input-small AFC" name="3000" value="<?=$this->AFC['3000']?>"></td>
                <td><input type="text" class="input-small AFC" name="5000" value="<?=$this->AFC['5000']?>"></td>
                <td><input type="text" class="input-small AFC" name="10000" value="<?=$this->AFC['10000']?>"></td>
                <td><input type="text" class="input-small AFC" name="15000" value="<?=$this->AFC['15000']?>"></td>
                <td><input type="text" class="input-small AFC" name="20000" value="<?=$this->AFC['20000']?>"></td>
                <td><input type="text" class="input-small AFC" name="30000" value="<?=$this->AFC['30000']?>"></td>
            </tr>
        </table>
            <button class="btn update_AFC">Update</button>
        </div>
        <div class="chart_AFC"><img src='/static/image/<?=$this->AFC['ID']?>.png'></div>
    </div>
</body>
</html>

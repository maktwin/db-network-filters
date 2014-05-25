<?

define('PCHART_PATH', implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'vendors', 'pChart')));

include_once implode(DIRECTORY_SEPARATOR, array(PCHART_PATH, 'class', 'pData.class.php'));
include_once implode(DIRECTORY_SEPARATOR, array(PCHART_PATH, 'class', 'pDraw.class.php'));
include_once implode(DIRECTORY_SEPARATOR, array(PCHART_PATH, 'class', 'pImage.class.php'));

class Chart {

	public function createImage($AFCID, $AFC) {

		$myData = new pData();

		$myData->addPoints(array_values($AFC), 'dB');
		$myData->addPoints(array_keys($AFC), 'Hz');

		$myData->setAxisName(0, 'dB');
		$myData->setAbscissa('Hz');

		$myPicture = new pImage(1200, 800, $myData);

		$myPicture->setGraphArea(100, 100, 1000, 600);
		$myPicture->setFontProperties(array('FontName' => PCHART_PATH . '/fonts/MankSans.ttf', 'FontSize' => 8));

		$scaleSettings = array('GridR' => 200, 'GridG' => 200, 'GridB' => 200, 'DrawSubTicks' => TRUE, 'CycleBackground' => TRUE);

		$myPicture->drawScale($scaleSettings);
		$myPicture->drawSplineChart();

		$myPicture->render('static/image/'.$AFCID.'.png');
	}
}

?>
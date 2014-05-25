<?

include_once implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'repositories', 'AFCQuery.php'));
include_once implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'chartAFC.php'));

class AFC extends View {

	public function show($AFCID) {
		$AFCData = AFCQuery::getInstance()->findByID($AFCID);

		$this->set('AFC', $AFCData);
		$this->render("AFC.php");
	}

	public function update($dataJSON) {
		$data = json_decode($dataJSON);
		$AFC = array();

		foreach ($data->AFC as $key => $value) {
			$AFC[$key] = $value;
		}

		$result = AFCQuery::getInstance()->update($AFC, $data->AFCID);

		$chart = new Chart($AFC);
		$chart->createImage($data->AFCID, $AFC);
	}
}

?>
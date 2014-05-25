<?php

include_once implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'repositories', 'FiltersQuery.php'));
include_once implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'chartAFC.php'));

class Filters extends View {

	public function show() {
		$filters = FiltersQuery::getInstance()->findAll();

		$this->set('filters', $filters);
		$this->render("filters.php");
	}

	public function create($dataJSON) {
		$data = json_decode($dataJSON);
		$base = array();
		$AFC  = array();

		foreach ($data->base as $key => $value) {
			$base[$key] = $value;
		}

		foreach ($data->AFC as $key => $value) {
			$AFC[$key] = $value;
		}

		$AFCID = FiltersQuery::getInstance()->create($base, $AFC);

		$chart = new Chart($AFC);
		$chart->createImage($AFCID, $AFC);
	}

	public function update($dataJSON) {
		$data = json_decode($dataJSON);
		$base = array();

		foreach ($data->base as $key => $value) {
			$base[$key] = $value;
		}

		$result = FiltersQuery::getInstance()->update($base, $data->filterID);
	}

	public function delete($dataJSON) {
		$data = json_decode($dataJSON);
		$result = FiltersQuery::getInstance()->delete($data->filterID);
	}
}

?>
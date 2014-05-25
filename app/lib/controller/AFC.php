<?

include_once implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', 'repositories', 'AFCQuery.php'));

class AFC extends View {

	public function show() {
		$AFCData = AFCQuery::getInstance()->findByID($AFCID);

		$this->set('AFC', $AFCData);
		$this->render("AFC.php");
	}
}

?>
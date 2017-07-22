<?
class Log {
	public static function add($module, $event) {
		$db = new DB();
		$db->store("INSERT into log (module, event) VALUES ('$module', '$event')");

	}
}
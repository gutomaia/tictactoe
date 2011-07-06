<?php
class UnitTestSuite {
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('All Unit Tests');
		$suite->addTestSuite('TicTacToeTest');
		return $suite;
	}
}

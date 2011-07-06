<?php
class TicTacToeTest extends PHPUnit_Framework_TestCase {

	private $initialBoard;

	private	$game;

	public function setUp(){
		$this->initialBoard = array (
			array (' ', ' ', ' '),
			array (' ', ' ', ' '),
			array (' ', ' ', ' ')
		);
		$this->game = new net_guto_tictactoe_TicTacToeGame();

	}

	private function printBoard($board){
		echo "\n";
		for ($line = 0; $line <3; $line++){
			echo $board[$line][0].'|'.$board[$line][1].'|'.$board[$line][2]."\n";
			if ($line != 2)
				echo "-----\n";
		}
	}

	public function assertBoardEquals($expected, $actual){
		for ($line = 0; $line <3; $line++)
			for ($col = 0; $col <3; $col++)
				$this->assertEquals($expected[$line][$col],$actual[$line][$col]);
	}

	
	public function testStartGame(){
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneFistSquare(){
		$this->initialBoard[0][0] = 'O';
		$this->game->start('1');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneSecondSquare(){
		$this->initialBoard[0][1] = 'O';
		$this->game->start('2');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}


	public function testStartPlayerOneThirdSquare(){
		$this->initialBoard[0][2] = 'O';
		$this->game->start('3');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneForthSquare(){
		$this->initialBoard[1][0] = 'O';
		$this->game->start('4');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneFifthSquare(){
		$this->initialBoard[1][1] = 'O';
		$this->game->start('5');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneSixthSquare(){
		$this->initialBoard[1][2] = 'O';
		$this->game->start('6');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneSeventhSquare(){
		$this->initialBoard[2][0] = 'O';
		$this->game->start('7');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneEigthSquare(){
		$this->initialBoard[2][1] = 'O';
		$this->game->start('8');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneNinethSquare(){
		$this->initialBoard[2][2] = 'O';
		$this->game->start('9');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneFirstSquareAndPlayerTwoSecondSquare(){
		$this->initialBoard[0][0] = 'O';
		$this->initialBoard[0][1] = 'X';
		$this->game->start('12');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testStartPlayerOneFirstSquareAndPlayerTwoThirdSquare(){
		$this->initialBoard[0][0] = 'O';
		$this->initialBoard[0][2] = 'X';
		$this->game->start('13');
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
	}

	public function testPlayerOneWinsInTheFirstRow(){
		$this->game->start('14253');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}

	public function testPlayerOneWinsInTheSecondRow(){
		$this->game->start('41526');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}

	public function testPlayerOneWinsInTheThirdRow(){
		$this->game->start('71829');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}

	public function testPlayerOneWinsIntheFirstCol(){
		$this->game->start('12457');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}


	public function testPlayerOneWinsIntheSecondCol(){
		$this->game->start('21548');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}

	
	public function testPlayerOneWinsIntheThirdCol(){
		$this->game->start('31649');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}

	public function testPlayerOneWinsIntheFirstDiagonal(){
		$this->game->start('12539');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}


	public function testPlayerOneWinsIntheSecondDiagonal(){
		$this->game->start('71523');
		$this->assertTrue($this->game->playerOneWins());
		$this->assertFalse($this->game->playerTwoWins());
	}

	public function testPlayerTwoWinsInTheFirstRow(){
		$this->game->start('914253');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}
	
	public function testPlayerTwoWinsInTheSecondRow(){
		$this->game->start('941526');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}

	public function testPlayerTwoWinsInTheThirdRow(){
		$this->game->start('471829');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}

	public function testPlayerTwoWinsIntheFirstCol(){
		$this->game->start('912457');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}

	public function testPlayerTwoWinsIntheSecondCol(){
		$this->game->start('321548');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}

	public function testPlayerTwoWinsIntheThirdCol(){
		$this->game->start('231649');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}

	public function testPlayerTwoWinsIntheFirstDiagonal(){
		$this->game->start('712539');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}

	public function testPlayerTwoWinsInTheSecondDiagonal(){
		$this->game->start('871523');
		$this->assertFalse($this->game->playerOneWins());
		$this->assertTrue($this->game->playerTwoWins());
	}

	public function testGameMatch(){
		$this->game->move(3);
		$this->initialBoard[0][2] = 'O';
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
		
		$this->game->move(1);
		$this->initialBoard[0][0] = 'X';
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
		
		$this->game->move(7);
		$this->initialBoard[2][0] = 'O';
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
		$this->assertFalse($this->game->PlayerOneWins());
		$this->assertFalse($this->game->PlayerTwoWins());
		
		$this->game->move(5);
		$this->initialBoard[1][1] = 'X';
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
		$this->assertFalse($this->game->PlayerOneWins());
		$this->assertFalse($this->game->PlayerTwoWins());
		
		$this->game->move(9);
		$this->initialBoard[2][2] = 'O';
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
		$this->assertFalse($this->game->PlayerOneWins());
		$this->assertFalse($this->game->PlayerTwoWins());

		$this->game->move(8);
		$this->initialBoard[2][1] = 'X';
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
		$this->assertFalse($this->game->PlayerOneWins());
		$this->assertFalse($this->game->PlayerTwoWins());

		$this->game->move(6);
		$this->initialBoard[1][2] = 'O';
		$board = $this->game->getBoard();
		$this->assertBoardEquals($this->initialBoard, $board);
		$this->assertTrue($this->game->PlayerOneWins());
		$this->assertFalse($this->game->PlayerTwoWins());
	}

	public function testFailureOnMoveInAAlreadyWonGame(){
		$this->game->start('3175986');
		$this->assertTrue($this->game->PlayerOneWins());
		$this->assertFalse($this->game->PlayerTwoWins());
		try {
			$this->game->move(3);
			//$this->fail('This move should be invalid');
		}catch (net_guto_tictactoe_MoveException $e){

		}
	}




}



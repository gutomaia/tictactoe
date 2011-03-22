<?php

class net_guto_tictactoe_TicTacToeGame {

	private $player1Moves = 0;
	private $player2Moves = 0;
	private $playerTurn;

	public function start($moves = null){
		if ($moves == null)
			return;
		$moves_array = preg_split('//', $moves, -1, PREG_SPLIT_NO_EMPTY);
		$playerTurn = 1;
		foreach ($moves_array as $move){
			$player = 'player'.$playerTurn.'Moves';
			$this->$player = $this->$player | pow(2, $move-1);
			$playerTurn = ($playerTurn == 1)?2:1;	
		}
	}

	public function move($move){
		$boardMoves = $this->player1Moves || $this->player2Moves;
	}

	public function playerOneWins(){
		return $this->checkWinnerMoves($this->player1Moves);	
	}

	public function playerTwoWins(){
		return $this->checkWinnerMoves($this->player2Moves);
	}

	public function checkWinnerMoves($moves){
		return (($moves & 7 )== 7)
			|| (($moves & 56) == 56)
			|| (($moves & 448) == 448)
			|| (($moves & 73) == 73)
			|| (($moves & 146) == 146)
			|| (($moves & 292) == 292)
			|| (($moves & 273) == 273)
			|| (($moves & 84) == 84);
	}

	public function hasAWinner(){
		return $this->playerOneWins() || $this->playerTwoWins();
	}

	public function checkWinner($player1Moves, $player2Moves){
		
	}

	public function fillBoard(&$board, $value, $moves){
		if (($moves & 1) == 1){
			$board[0][0] = $value;
		}
		if (($moves & 2 ) == 2){
			$board[0][1] = $value;
		}
		if (($moves & 4 ) == 4){
			$board[0][2] = $value;
		}
		if (($moves & 8 ) == 8){
			$board[1][0] = $value;
		}
		if (($moves & 16 ) == 16){
			$board[1][1] = $value;
		}
		if (($moves & 32 ) == 32){
			$board[1][2] = $value;
		}
		if (($moves & 64 ) == 64){
			$board[2][0] = $value;
		}
		if (($moves & 128 ) == 128){
			$board[2][1] = $value;
		}
		if (($moves & 256 ) == 256){
			$board[2][2] = $value;
		}
		return $board;
	}

	public function getBoard(){
		$board = array (
			array (' ', ' ', ' '),
			array (' ', ' ', ' '),
			array (' ', ' ', ' ')
		);
		$board = $this->fillBoard($board, 'O', $this->player1Moves);
		$board = $this->fillBoard($board, 'X', $this->player2Moves);

		return $board;
	}
}

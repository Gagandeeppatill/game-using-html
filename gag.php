<?php
// LudoGame.php

class LudoGame {
    private $players;
    private $gameBoard;
    private $currentPlayer;

    public function __construct() {
        $this->players = [];
        $this->gameBoard = [];
        $this->currentPlayer = 0;
    }

    public function addPlayer($playerName) {
        $this->players[] = $playerName;
    }

    public function rollDice() {
        // Simulate rolling a dice
        $roll = rand(1, 6);
        return $roll;
    }

    public function movePlayer($playerName, $roll) {
        // Move the player on the game board
        $playerIndex = array_search($playerName, $this->players);
        $this->gameBoard[$playerIndex] += $roll;
    }

    public function checkWin() {
        // Check if a player has won the game
        foreach ($this->gameBoard as $playerIndex => $position) {
            if ($position >= 100) {
                return $this->players[$playerIndex];
            }
        }
        return null;
    }

    public function getCurrentPlayer() {
        return $this->players[$this->currentPlayer];
    }

    public function nextPlayer() {
        $this->currentPlayer = ($this->currentPlayer + 1) % count($this->players);
    }
}
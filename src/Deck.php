<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 8/8/18
 * Time: 2:46 PM
 */

namespace Difulv\Cards;

class Deck
{
    private $cards;

    public function __construct()
    {
        $this->cards = array();
        foreach(Card::SUITS as $suit){
            foreach(Card::FACES as $face){
                $card = new Card($face,$suit);
                array_push($this->cards, $card);
            }
        }

    }

    public function shuffle()
    {
        shuffle($this->cards);
    }

    public function getCardCount()
    {
        return count($this->cards);
    }

    public function draw($numCards = 1)
    {
        for($i=1; $i<=$numCards; $i++) {
            return (array_shift($this->cards));
        }
    }

    public function getCards()
    {
        return $this->cards;
    }
}
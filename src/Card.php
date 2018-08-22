<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 8/8/18
 * Time: 2:46 PM
 */

namespace Difulv\Cards;

class Card
{
    const SUITS = array('S','H','D','C');
    const FACES = array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
    private $suit;
    private $face;

    public function __construct($face, $suit)
    {
        if (in_array($face , Card::FACES) || in_array($suit , CARD::SUITS)){
            $this->face = $face;
            $this->suit = $suit;
        }
        else{
            echo 'This is not a valid card';
        }
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getFace()
    {
        return $this->face;
    }

    public function __toString()
    {
        return $this->getFace()." ".$this->getSuit();
    }

    public function getCard()
    {
        return $this->getFace()." ".$this->getSuit();
    }
}
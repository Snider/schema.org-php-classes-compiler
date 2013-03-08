<?php

class Thing_Organization_Corporation extends Thing_Organization{

             /**
              * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we reccommend using the controlled vocaulary of Market Identifier Codes (MIC) specified in ISO15022.
              *
              * @var $tickerSymbol string
              */
              public $tickerSymbol;
}
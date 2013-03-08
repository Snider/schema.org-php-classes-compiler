<?php

class Thing_CreativeWork_Book extends Thing_CreativeWork{

             /**
              * The edition of the book.
              *
              * @var $bookEdition string
              */
              public $bookEdition;

             /**
              * The format of the book.
              *
              * @var $bookFormat Thing_Intangible_Enumeration_BookFormatType
              */
              public $bookFormat;

             /**
              * The illustrator of the book.
              *
              * @var $illustrator Thing_Person
              */
              public $illustrator;

             /**
              * The ISBN of the book.
              *
              * @var $isbn string
              */
              public $isbn;

             /**
              * The number of pages in the book.
              *
              * @var $numberOfPages Integer
              */
              public $numberOfPages;
}
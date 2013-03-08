<?php

class Thing_CreativeWork_Article_NewsArticle extends Thing_CreativeWork_Article{

             /**
              * The location where the NewsArticle was produced.
              *
              * @var $dateline string
              */
              public $dateline;

             /**
              * The number of the column in which the NewsArticle appears in the print edition.
              *
              * @var $printColumn string
              */
              public $printColumn;

             /**
              * The edition of the print product in which the NewsArticle appears.
              *
              * @var $printEdition string
              */
              public $printEdition;

             /**
              * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
              *
              * @var $printPage string
              */
              public $printPage;

             /**
              * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
              *
              * @var $printSection string
              */
              public $printSection;
}
<?php

class Thing{

             /**
              * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
              *
              * @var $additionalType string
              */
              public $additionalType;

             /**
              * A short description of the item.
              *
              * @var $description string
              */
              public $description;

             /**
              * URL of an image of the item.
              *
              * @var $image string
              */
              public $image;

             /**
              * The name of the item.
              *
              * @var $name string
              */
              public $name;

             /**
              * URL of the item.
              *
              * @var $url string
              */
              public $url;
}
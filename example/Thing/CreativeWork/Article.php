<?php

class Thing_CreativeWork_Article extends Thing_CreativeWork{

             /**
              * The actual body of the article.
              *
              * @var $articleBody string
              */
              public $articleBody;

             /**
              * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
              *
              * @var $articleSection string
              */
              public $articleSection;

             /**
              * The number of words in the text of the Article.
              *
              * @var $wordCount Integer
              */
              public $wordCount;
}
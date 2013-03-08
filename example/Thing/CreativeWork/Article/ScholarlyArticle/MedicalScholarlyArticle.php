<?php

class Thing_CreativeWork_Article_ScholarlyArticle_MedicalScholarlyArticle extends Thing_CreativeWork_Article_ScholarlyArticle{

             /**
              * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc. NOTE: Candidate for promotion to ScholarlyArticle.
              *
              * @var $citation Thing_CreativeWork|string
              */
              public $citation;

             /**
              * The type of the medical article, taken from the US NLM MeSH publication type catalog.
              *
              * @var $publicationType string
              */
              public $publicationType;
}
<?php

class Thing_MedicalEntity_MedicalIntangible_MedicalCode extends Thing_MedicalEntity_MedicalIntangible{

             /**
              * The actual code.
              *
              * @var $codeValue string
              */
              public $codeValue;

             /**
              * The coding system, e.g. 'ICD-10'.
              *
              * @var $codingSystem string
              */
              public $codingSystem;
}
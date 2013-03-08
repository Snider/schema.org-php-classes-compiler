<?php

class Thing_MedicalEntity_MedicalCause extends Thing_MedicalEntity{

             /**
              * The condition, complication, symptom, sign, etc. caused.
              *
              * @var $causeOf Thing_MedicalEntity
              */
              public $causeOf;
}
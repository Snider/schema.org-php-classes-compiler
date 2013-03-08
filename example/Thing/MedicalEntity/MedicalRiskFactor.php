<?php

class Thing_MedicalEntity_MedicalRiskFactor extends Thing_MedicalEntity{

             /**
              * The condition, complication, etc. influenced by this factor.
              *
              * @var $increasesRiskOf Thing_MedicalEntity
              */
              public $increasesRiskOf;
}
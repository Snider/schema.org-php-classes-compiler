<?php

class Thing_MedicalEntity_MedicalIntangible_MedicalConditionStage extends Thing_MedicalEntity_MedicalIntangible{

             /**
              * The stage represented as a number, e.g. 3.
              *
              * @var $stageAsNumber Number
              */
              public $stageAsNumber;

             /**
              * The substage, e.g. 'a' for Stage IIIa.
              *
              * @var $subStageSuffix string
              */
              public $subStageSuffix;
}
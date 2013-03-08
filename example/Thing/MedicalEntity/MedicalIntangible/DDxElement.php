<?php

class Thing_MedicalEntity_MedicalIntangible_DDxElement extends Thing_MedicalEntity_MedicalIntangible{

             /**
              * One or more alternative conditions considered in the differential diagnosis process.
              *
              * @var $diagnosis Thing_MedicalEntity_MedicalCondition
              */
              public $diagnosis;

             /**
              * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
              *
              * @var $distinguishingSign Thing_MedicalEntity_MedicalSignOrSymptom
              */
              public $distinguishingSign;
}
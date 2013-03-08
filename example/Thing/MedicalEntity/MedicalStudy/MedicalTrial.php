<?php

class Thing_MedicalEntity_MedicalStudy_MedicalTrial extends Thing_MedicalEntity_MedicalStudy{

             /**
              * The phase of the trial.
              *
              * @var $phase string
              */
              public $phase;

             /**
              * Specifics about the trial design (enumerated).
              *
              * @var $trialDesign Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicalTrialDesign
              */
              public $trialDesign;
}
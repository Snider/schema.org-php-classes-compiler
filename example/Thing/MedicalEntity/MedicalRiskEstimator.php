<?php

class Thing_MedicalEntity_MedicalRiskEstimator extends Thing_MedicalEntity{

             /**
              * The condition, complication, or symptom whose risk is being estimated.
              *
              * @var $estimatesRiskOf Thing_MedicalEntity
              */
              public $estimatesRiskOf;

             /**
              * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
              *
              * @var $includedRiskFactor Thing_MedicalEntity_MedicalRiskFactor
              */
              public $includedRiskFactor;
}
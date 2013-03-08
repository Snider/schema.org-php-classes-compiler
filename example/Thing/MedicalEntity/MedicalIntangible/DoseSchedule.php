<?php

class Thing_MedicalEntity_MedicalIntangible_DoseSchedule extends Thing_MedicalEntity_MedicalIntangible{

             /**
              * The unit of the dose, e.g. 'mg'.
              *
              * @var $doseUnit string
              */
              public $doseUnit;

             /**
              * The value of the dose, e.g. 500.
              *
              * @var $doseValue Number
              */
              public $doseValue;

             /**
              * How often the dose is taken, e.g. 'daily'.
              *
              * @var $frequency string
              */
              public $frequency;

             /**
              * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
              *
              * @var $targetPopulation string
              */
              public $targetPopulation;
}
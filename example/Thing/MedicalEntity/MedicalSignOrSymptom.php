<?php

class Thing_MedicalEntity_MedicalSignOrSymptom extends Thing_MedicalEntity{

             /**
              * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
              *
              * @var $cause Thing_MedicalEntity_MedicalCause
              */
              public $cause;

             /**
              * A possible treatment to address this condition, sign or symptom.
              *
              * @var $possibleTreatment Thing_MedicalEntity_MedicalTherapy
              */
              public $possibleTreatment;
}
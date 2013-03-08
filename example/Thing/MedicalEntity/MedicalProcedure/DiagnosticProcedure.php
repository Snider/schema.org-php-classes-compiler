<?php

class Thing_MedicalEntity_MedicalProcedure_DiagnosticProcedure extends Thing_MedicalEntity_MedicalProcedure{

             /**
              * Drugs that affect the test's results.
              *
              * @var $affectedBy Thing_MedicalEntity_MedicalTherapy_Drug
              */
              public $affectedBy;

             /**
              * Range of acceptable values for a typical patient, when applicable.
              *
              * @var $normalRange string
              */
              public $normalRange;

             /**
              * A sign detected by the test.
              *
              * @var $signDetected Thing_MedicalEntity_MedicalSignOrSymptom_MedicalSign
              */
              public $signDetected;

             /**
              * A condition the test is used to diagnose.
              *
              * @var $usedToDiagnose Thing_MedicalEntity_MedicalCondition
              */
              public $usedToDiagnose;

             /**
              * Device used to perform the test.
              *
              * @var $usesDevice Thing_MedicalEntity_MedicalDevice
              */
              public $usesDevice;
}
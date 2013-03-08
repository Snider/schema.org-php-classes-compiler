<?php

class Thing_MedicalEntity_MedicalSignOrSymptom_MedicalSign extends Thing_MedicalEntity_MedicalSignOrSymptom{

             /**
              * A physical examination that can identify this sign.
              *
              * @var $identifyingExam Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_PhysicalExam
              */
              public $identifyingExam;

             /**
              * A diagnostic test that can identify this sign.
              *
              * @var $identifyingTest Thing_MedicalEntity_MedicalTest
              */
              public $identifyingTest;
}
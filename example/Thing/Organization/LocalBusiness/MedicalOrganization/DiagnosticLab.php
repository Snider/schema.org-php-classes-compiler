<?php

class Thing_Organization_LocalBusiness_MedicalOrganization_DiagnosticLab extends Thing_Organization_LocalBusiness_MedicalOrganization{

             /**
              * A diagnostic test or procedure offered by this lab.
              *
              * @var $availableTest Thing_MedicalEntity_MedicalTest
              */
              public $availableTest;
}
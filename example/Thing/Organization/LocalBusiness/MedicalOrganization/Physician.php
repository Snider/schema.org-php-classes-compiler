<?php

class Thing_Organization_LocalBusiness_MedicalOrganization_Physician extends Thing_Organization_LocalBusiness_MedicalOrganization{

             /**
              * A medical service available from this provider.
              *
              * @var $availableService Thing_MedicalEntity_MedicalTest|Thing_MedicalEntity_MedicalProcedure|Thing_MedicalEntity_MedicalTherapy
              */
              public $availableService;

             /**
              * A hospital with which the physician or office is affiliated.
              *
              * @var $hospitalAffiliation Thing_Place_CivicStructure_Hospital
              */
              public $hospitalAffiliation;

             /**
              * A medical specialty of the provider.
              *
              * @var $medicalSpecialty Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicalSpecialty
              */
              public $medicalSpecialty;
}
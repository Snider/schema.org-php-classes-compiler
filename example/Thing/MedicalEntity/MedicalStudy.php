<?php

class Thing_MedicalEntity_MedicalStudy extends Thing_MedicalEntity{

             /**
              * Expected or actual outcomes of the study.
              *
              * @var $outcome string
              */
              public $outcome;

             /**
              * Any characteristics of the population used in the study, e.g. 'males under 65'.
              *
              * @var $population string
              */
              public $population;

             /**
              * Sponsor of the study.
              *
              * @var $sponsor Thing_Organization
              */
              public $sponsor;

             /**
              * The status of the study (enumerated).
              *
              * @var $status Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicalStudyStatus
              */
              public $status;

             /**
              * The location in which the study is taking/took place.
              *
              * @var $studyLocation Thing_Place_AdministrativeArea
              */
              public $studyLocation;

             /**
              * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
              *
              * @var $studySubject Thing_MedicalEntity
              */
              public $studySubject;
}
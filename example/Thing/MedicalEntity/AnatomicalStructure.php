<?php

class Thing_MedicalEntity_AnatomicalStructure extends Thing_MedicalEntity{

             /**
              * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
              *
              * @var $associatedPathophysiology string
              */
              public $associatedPathophysiology;

             /**
              * Location in the body of the anatomical structure.
              *
              * @var $bodyLocation string
              */
              public $bodyLocation;

             /**
              * Other anatomical structures to which this structure is connected.
              *
              * @var $connectedTo Thing_MedicalEntity_AnatomicalStructure
              */
              public $connectedTo;

             /**
              * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
              *
              * @var $diagram Thing_CreativeWork_MediaObject_ImageObject
              */
              public $diagram;

             /**
              * Function of the anatomical structure.
              *
              * @var $function string
              */
              public $function;

             /**
              * The anatomical or organ system that this structure is part of.
              *
              * @var $partOfSystem Thing_MedicalEntity_AnatomicalSystem
              */
              public $partOfSystem;

             /**
              * A medical condition associated with this anatomy.
              *
              * @var $relatedCondition Thing_MedicalEntity_MedicalCondition
              */
              public $relatedCondition;

             /**
              * A medical therapy related to this anatomy.
              *
              * @var $relatedTherapy Thing_MedicalEntity_MedicalTherapy
              */
              public $relatedTherapy;

             /**
              * Component (sub-)structure(s) that comprise this anatomical structure.
              *
              * @var $subStructure Thing_MedicalEntity_AnatomicalStructure
              */
              public $subStructure;
}
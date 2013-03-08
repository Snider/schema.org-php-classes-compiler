<?php

class Thing_MedicalEntity_MedicalCondition_InfectiousDisease extends Thing_MedicalEntity_MedicalCondition{

             /**
              * The actual infectious agent, such as a specific bacterium.
              *
              * @var $infectiousAgent string
              */
              public $infectiousAgent;

             /**
              * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
              *
              * @var $infectiousAgentClass Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_InfectiousAgentClass
              */
              public $infectiousAgentClass;

             /**
              * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
              *
              * @var $transmissionMethod string
              */
              public $transmissionMethod;
}
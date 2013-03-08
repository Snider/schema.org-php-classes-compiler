<?php

class Thing_Place_CivicStructure_MovieTheater extends Thing_Place_CivicStructure{

             /**
              * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
              *
              * @var $brand Thing_Organization|Thing_Intangible_Brand
              */
              public $brand;

             /**
              * A contact point for a person or organization.
              *
              * @var $contactPoint Thing_Intangible_StructuredValue_ContactPoint
              */
              public $contactPoint;

             /**
              * A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
              *
              * @var $contactPoints Thing_Intangible_StructuredValue_ContactPoint
              */
              public $contactPoints;

             /**
              * The Dun & Bradstreet DUNS number for identifying an organization or business person.
              *
              * @var $duns string
              */
              public $duns;

             /**
              * Email address.
              *
              * @var $email string
              */
              public $email;

             /**
              * Someone working for this organization.
              *
              * @var $employee Thing_Person
              */
              public $employee;

             /**
              * People working for this organization. (legacy spelling; see singular form, employee)
              *
              * @var $employees Thing_Person
              */
              public $employees;

             /**
              * A person who founded this organization.
              *
              * @var $founder Thing_Person
              */
              public $founder;

             /**
              * A person who founded this organization (legacy spelling; see singular form, founder).
              *
              * @var $founders Thing_Person
              */
              public $founders;

             /**
              * The date that this organization was founded.
              *
              * @var $foundingDate Date
              */
              public $foundingDate;

             /**
              * Points-of-Sales operated by the organization or person.
              *
              * @var $hasPOS Thing_Place
              */
              public $hasPOS;

             /**
              * The official name of the organization, e.g. the registered company name.
              *
              * @var $legalName string
              */
              public $legalName;

             /**
              * The location of the event or organization.
              *
              * @var $location Thing_Intangible_StructuredValue_ContactPoint_PostalAddress|Thing_Place
              */
              public $location;

             /**
              * A pointer to products or services offered by the organization or person.
              *
              * @var $makesOffer Thing_Intangible_Offer
              */
              public $makesOffer;

             /**
              * A member of this organization.
              *
              * @var $member Thing_Organization|Thing_Person
              */
              public $member;

             /**
              * A member of this organization (legacy spelling; see singular form, member).
              *
              * @var $members Thing_Organization|Thing_Person
              */
              public $members;

             /**
              * The North American Industry Classification System (NAICS) code for a particular organization or business person.
              *
              * @var $naics string
              */
              public $naics;

             /**
              * Products owned by the organization or person.
              *
              * @var $owns Thing_Intangible_StructuredValue_OwnershipInfo|Thing_Product
              */
              public $owns;

             /**
              * A pointer to products or services sought by the organization or person (demand).
              *
              * @var $seeks Thing_Intangible_Demand
              */
              public $seeks;

             /**
              * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
              *
              * @var $taxID string
              */
              public $taxID;

             /**
              * The Value-added Tax ID of the organisation or person.
              *
              * @var $vatID string
              */
              public $vatID;

             /**
              * The larger organization that this local business is a branch of, if any.
              *
              * @var $branchOf Thing_Organization
              */
              public $branchOf;

             /**
              * The currency accepted (in ISO 4217 currency format).
              *
              * @var $currenciesAccepted string
              */
              public $currenciesAccepted;

             /**
              * Cash, credit card, etc.
              *
              * @var $paymentAccepted string
              */
              public $paymentAccepted;

             /**
              * The price range of the business, for example $$$.
              *
              * @var $priceRange string
              */
              public $priceRange;
}
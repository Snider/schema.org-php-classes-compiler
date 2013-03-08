<?php

class Thing_Organization extends Thing{

             /**
              * Physical address of the item.
              *
              * @var $address Thing_Intangible_StructuredValue_ContactPoint_PostalAddress
              */
              public $address;

             /**
              * The overall rating, based on a collection of reviews or ratings, of the item.
              *
              * @var $aggregateRating Thing_Intangible_Rating_AggregateRating
              */
              public $aggregateRating;

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
              * Upcoming or past event associated with this place or organization.
              *
              * @var $event Thing_Event
              */
              public $event;

             /**
              * Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
              *
              * @var $events Thing_Event
              */
              public $events;

             /**
              * The fax number.
              *
              * @var $faxNumber string
              */
              public $faxNumber;

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
              * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
              *
              * @var $globalLocationNumber string
              */
              public $globalLocationNumber;

             /**
              * Points-of-Sales operated by the organization or person.
              *
              * @var $hasPOS Thing_Place
              */
              public $hasPOS;

             /**
              * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
              *
              * @var $interactionCount string
              */
              public $interactionCount;

             /**
              * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
              *
              * @var $isicV4 string
              */
              public $isicV4;

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
              * URL of an image for the logo of the item.
              *
              * @var $logo string|Thing_CreativeWork_MediaObject_ImageObject
              */
              public $logo;

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
              * A review of the item.
              *
              * @var $review Thing_CreativeWork_Review
              */
              public $review;

             /**
              * Review of the item (legacy spelling; see singular form, review).
              *
              * @var $reviews Thing_CreativeWork_Review
              */
              public $reviews;

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
              * The telephone number.
              *
              * @var $telephone string
              */
              public $telephone;

             /**
              * The Value-added Tax ID of the organisation or person.
              *
              * @var $vatID string
              */
              public $vatID;
}
<?php

class Thing_Place extends Thing{

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
              * The basic containment relation between places.
              *
              * @var $containedIn Thing_Place
              */
              public $containedIn;

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
              * The geo coordinates of the place.
              *
              * @var $geo Thing_Intangible_StructuredValue_GeoCoordinates|Thing_Intangible_StructuredValue_GeoShape
              */
              public $geo;

             /**
              * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
              *
              * @var $globalLocationNumber string
              */
              public $globalLocationNumber;

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
              * URL of an image for the logo of the item.
              *
              * @var $logo string|Thing_CreativeWork_MediaObject_ImageObject
              */
              public $logo;

             /**
              * A URL to a map of the place.
              *
              * @var $map string
              */
              public $map;

             /**
              * A URL to a map of the place (legacy spelling; see singular form, map).
              *
              * @var $maps string
              */
              public $maps;

             /**
              * The opening hours of a certain place.
              *
              * @var $openingHoursSpecification Thing_Intangible_StructuredValue_OpeningHoursSpecification
              */
              public $openingHoursSpecification;

             /**
              * A photograph of this place.
              *
              * @var $photo Thing_CreativeWork_MediaObject_ImageObject|Thing_CreativeWork_Photograph
              */
              public $photo;

             /**
              * Photographs of this place (legacy spelling; see singular form, photo).
              *
              * @var $photos Thing_CreativeWork_MediaObject_ImageObject|Thing_CreativeWork_Photograph
              */
              public $photos;

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
              * The telephone number.
              *
              * @var $telephone string
              */
              public $telephone;
}
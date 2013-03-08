<?php

class Thing_Event extends Thing{

             /**
              * A person or organization attending the event.
              *
              * @var $attendee Thing_Organization|Thing_Person
              */
              public $attendee;

             /**
              * A person attending the event (legacy spelling; see singular form, attendee).
              *
              * @var $attendees Thing_Organization|Thing_Person
              */
              public $attendees;

             /**
              * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
              *
              * @var $duration Thing_Intangible_Quantity_Duration
              */
              public $duration;

             /**
              * The end date and time of the event (in ISO 8601 date format).
              *
              * @var $endDate Date
              */
              public $endDate;

             /**
              * The location of the event or organization.
              *
              * @var $location Thing_Intangible_StructuredValue_ContactPoint_PostalAddress|Thing_Place
              */
              public $location;

             /**
              * An offer to sell this item—for example, an offer to sell a product, the DVD of a movie, or tickets to an event.
              *
              * @var $offers Thing_Intangible_Offer
              */
              public $offers;

             /**
              * A performer at the event—for example, a presenter, musician, musical group or actor.
              *
              * @var $performer Thing_Organization|Thing_Person
              */
              public $performer;

             /**
              * The main performer or performers of the event—for example, a presenter, musician, or actor (legacy spelling; see singular form, performer).
              *
              * @var $performers Thing_Organization|Thing_Person
              */
              public $performers;

             /**
              * The start date and time of the event (in ISO 8601 date format).
              *
              * @var $startDate Date
              */
              public $startDate;

             /**
              * An Event that is part of this event. For example, a conference event includes many presentations, each are a subEvent of the conference.
              *
              * @var $subEvent Thing_Event
              */
              public $subEvent;

             /**
              * Events that are a part of this event. For example, a conference event includes many presentations, each are subEvents of the conference (legacy spelling; see singular form, subEvent).
              *
              * @var $subEvents Thing_Event
              */
              public $subEvents;

             /**
              * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
              *
              * @var $superEvent Thing_Event
              */
              public $superEvent;
}
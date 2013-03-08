<?php

class Thing_CreativeWork extends Thing{

             /**
              * The subject matter of the content.
              *
              * @var $about Thing
              */
              public $about;

             /**
              * Specifies the Person that is legally accountable for the CreativeWork.
              *
              * @var $accountablePerson Thing_Person
              */
              public $accountablePerson;

             /**
              * The overall rating, based on a collection of reviews or ratings, of the item.
              *
              * @var $aggregateRating Thing_Intangible_Rating_AggregateRating
              */
              public $aggregateRating;

             /**
              * A secondary title of the CreativeWork.
              *
              * @var $alternativeHeadline string
              */
              public $alternativeHeadline;

             /**
              * The media objects that encode this creative work. This property is a synonym for encodings.
              *
              * @var $associatedMedia Thing_CreativeWork_MediaObject
              */
              public $associatedMedia;

             /**
              * The intended audience of the work, i.e. the group for whom the work was created.
              *
              * @var $audience Thing_Intangible_Audience
              */
              public $audience;

             /**
              * An embedded audio object.
              *
              * @var $audio Thing_CreativeWork_MediaObject_AudioObject
              */
              public $audio;

             /**
              * The author of this content. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
              *
              * @var $author Thing_Organization|Thing_Person
              */
              public $author;

             /**
              * An award won by this person or for this creative work.
              *
              * @var $award string
              */
              public $award;

             /**
              * Awards won by this person or for this creative work. (legacy spelling; see singular form, award)
              *
              * @var $awards string
              */
              public $awards;

             /**
              * Comments, typically from users, on this CreativeWork.
              *
              * @var $comment Thing_Event_UserInteraction_UserComments
              */
              public $comment;

             /**
              * The location of the content.
              *
              * @var $contentLocation Thing_Place
              */
              public $contentLocation;

             /**
              * Official rating of a piece of content—for example,'MPAA PG-13'.
              *
              * @var $contentRating string
              */
              public $contentRating;

             /**
              * A secondary contributor to the CreativeWork.
              *
              * @var $contributor Thing_Organization|Thing_Person
              */
              public $contributor;

             /**
              * The party holding the legal copyright to the CreativeWork.
              *
              * @var $copyrightHolder Thing_Organization|Thing_Person
              */
              public $copyrightHolder;

             /**
              * The year during which the claimed copyright for the CreativeWork was first asserted.
              *
              * @var $copyrightYear Number
              */
              public $copyrightYear;

             /**
              * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
              *
              * @var $creator Thing_Organization|Thing_Person
              */
              public $creator;

             /**
              * The date on which the CreativeWork was created.
              *
              * @var $dateCreated Date
              */
              public $dateCreated;

             /**
              * The date on which the CreativeWork was most recently modified.
              *
              * @var $dateModified Date
              */
              public $dateModified;

             /**
              * Date of first broadcast/publication.
              *
              * @var $datePublished Date
              */
              public $datePublished;

             /**
              * A link to the page containing the comments of the CreativeWork.
              *
              * @var $discussionUrl string
              */
              public $discussionUrl;

             /**
              * Specifies the Person who edited the CreativeWork.
              *
              * @var $editor Thing_Person
              */
              public $editor;

             /**
              * A media object that encode this CreativeWork.
              *
              * @var $encoding Thing_CreativeWork_MediaObject
              */
              public $encoding;

             /**
              * The media objects that encode this creative work (legacy spelling; see singular form, encoding).
              *
              * @var $encodings Thing_CreativeWork_MediaObject
              */
              public $encodings;

             /**
              * Genre of the creative work
              *
              * @var $genre string
              */
              public $genre;

             /**
              * Headline of the article
              *
              * @var $headline string
              */
              public $headline;

             /**
              * The language of the content. please use one of the language codes from the IETF BCP 47 standard.
              *
              * @var $inLanguage string
              */
              public $inLanguage;

             /**
              * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
              *
              * @var $interactionCount string
              */
              public $interactionCount;

             /**
              * Indicates whether this content is family friendly.
              *
              * @var $isFamilyFriendly Boolean
              */
              public $isFamilyFriendly;

             /**
              * The keywords/tags used to describe this content.
              *
              * @var $keywords string
              */
              public $keywords;

             /**
              * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
              *
              * @var $mentions Thing
              */
              public $mentions;

             /**
              * An offer to sell this item—for example, an offer to sell a product, the DVD of a movie, or tickets to an event.
              *
              * @var $offers Thing_Intangible_Offer
              */
              public $offers;

             /**
              * Specifies the Person or Organization that distributed the CreativeWork.
              *
              * @var $provider Thing_Organization|Thing_Person
              */
              public $provider;

             /**
              * The publisher of the creative work.
              *
              * @var $publisher Thing_Organization
              */
              public $publisher;

             /**
              * Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.
              *
              * @var $publishingPrinciples string
              */
              public $publishingPrinciples;

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
              * The Organization on whose behalf the creator was working.
              *
              * @var $sourceOrganization Thing_Organization
              */
              public $sourceOrganization;

             /**
              * The textual content of this CreativeWork.
              *
              * @var $text string
              */
              public $text;

             /**
              * A thumbnail image relevant to the Thing.
              *
              * @var $thumbnailUrl string
              */
              public $thumbnailUrl;

             /**
              * The version of the CreativeWork embodied by a specified resource.
              *
              * @var $version Number
              */
              public $version;

             /**
              * An embedded video object.
              *
              * @var $video Thing_CreativeWork_MediaObject_VideoObject
              */
              public $video;
}
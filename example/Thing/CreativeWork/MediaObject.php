<?php

class Thing_CreativeWork_MediaObject extends Thing_CreativeWork{

             /**
              * A NewsArticle associated with the Media Object.
              *
              * @var $associatedArticle Thing_CreativeWork_Article_NewsArticle
              */
              public $associatedArticle;

             /**
              * The bitrate of the media object.
              *
              * @var $bitrate string
              */
              public $bitrate;

             /**
              * File size in (mega/kilo) bytes.
              *
              * @var $contentSize string
              */
              public $contentSize;

             /**
              * Actual bytes of the media object, for example the image file or video file. (previous spelling: contentURL)
              *
              * @var $contentUrl string
              */
              public $contentUrl;

             /**
              * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
              *
              * @var $duration Thing_Intangible_Quantity_Duration
              */
              public $duration;

             /**
              * A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag. (previous spelling: embedURL)
              *
              * @var $embedUrl string
              */
              public $embedUrl;

             /**
              * The creative work encoded by this media object
              *
              * @var $encodesCreativeWork Thing_CreativeWork
              */
              public $encodesCreativeWork;

             /**
              * mp3, mpeg4, etc.
              *
              * @var $encodingFormat string
              */
              public $encodingFormat;

             /**
              * Date the content expires and is no longer useful or available. Useful for videos.
              *
              * @var $expires Date
              */
              public $expires;

             /**
              * The height of the item.
              *
              * @var $height Thing_Intangible_Quantity_Distance|Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $height;

             /**
              * Player type required—for example, Flash or Silverlight.
              *
              * @var $playerType string
              */
              public $playerType;

             /**
              * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
              *
              * @var $regionsAllowed Thing_Place
              */
              public $regionsAllowed;

             /**
              * Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
              *
              * @var $requiresSubscription Boolean
              */
              public $requiresSubscription;

             /**
              * Date when this media object was uploaded to this site.
              *
              * @var $uploadDate Date
              */
              public $uploadDate;

             /**
              * The width of the item.
              *
              * @var $width Thing_Intangible_Quantity_Distance|Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $width;
}
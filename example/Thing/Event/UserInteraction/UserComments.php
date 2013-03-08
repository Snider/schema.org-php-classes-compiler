<?php

class Thing_Event_UserInteraction_UserComments extends Thing_Event_UserInteraction{

             /**
              * The text of the UserComment.
              *
              * @var $commentText string
              */
              public $commentText;

             /**
              * The time at which the UserComment was made.
              *
              * @var $commentTime Date
              */
              public $commentTime;

             /**
              * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
              *
              * @var $creator Thing_Organization|Thing_Person
              */
              public $creator;

             /**
              * Specifies the CreativeWork associated with the UserComment.
              *
              * @var $discusses Thing_CreativeWork
              */
              public $discusses;

             /**
              * The URL at which a reply may be posted to the specified UserComment.
              *
              * @var $replyToUrl string
              */
              public $replyToUrl;
}
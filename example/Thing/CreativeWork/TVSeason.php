<?php

class Thing_CreativeWork_TVSeason extends Thing_CreativeWork{

             /**
              * The end date and time of the event (in ISO 8601 date format).
              *
              * @var $endDate Date
              */
              public $endDate;

             /**
              * An episode of a TV series or season.
              *
              * @var $episode Thing_CreativeWork_TVEpisode
              */
              public $episode;

             /**
              * The episode of a TV series or season (legacy spelling; see singular form, episode).
              *
              * @var $episodes Thing_CreativeWork_TVEpisode
              */
              public $episodes;

             /**
              * The number of episodes in this season or series.
              *
              * @var $numberOfEpisodes Number
              */
              public $numberOfEpisodes;

             /**
              * The TV series to which this episode or season belongs.
              *
              * @var $partOfTVSeries Thing_CreativeWork_TVSeries
              */
              public $partOfTVSeries;

             /**
              * The season number.
              *
              * @var $seasonNumber Integer
              */
              public $seasonNumber;

             /**
              * The start date and time of the event (in ISO 8601 date format).
              *
              * @var $startDate Date
              */
              public $startDate;

             /**
              * The trailer of the movie or TV series, season, or episode.
              *
              * @var $trailer Thing_CreativeWork_MediaObject_VideoObject
              */
              public $trailer;
}
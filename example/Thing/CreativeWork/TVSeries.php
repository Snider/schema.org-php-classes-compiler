<?php

class Thing_CreativeWork_TVSeries extends Thing_CreativeWork{

             /**
              * A cast member of the movie, TV series, season, or episode, or video.
              *
              * @var $actor Thing_Person
              */
              public $actor;

             /**
              * A cast member of the movie, TV series, season, or episode, or video. (legacy spelling; see singular form, actor)
              *
              * @var $actors Thing_Person
              */
              public $actors;

             /**
              * The director of the movie, TV episode, or series.
              *
              * @var $director Thing_Person
              */
              public $director;

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
              * The composer of the movie or TV soundtrack.
              *
              * @var $musicBy Thing_Person|Thing_Organization_PerformingGroup_MusicGroup
              */
              public $musicBy;

             /**
              * The number of episodes in this season or series.
              *
              * @var $numberOfEpisodes Number
              */
              public $numberOfEpisodes;

             /**
              * The producer of the movie, TV series, season, or episode, or video.
              *
              * @var $producer Thing_Person
              */
              public $producer;

             /**
              * The production company or studio that made the movie, TV series, season, or episode, or video.
              *
              * @var $productionCompany Thing_Organization
              */
              public $productionCompany;

             /**
              * A season of a TV series.
              *
              * @var $season Thing_CreativeWork_TVSeason
              */
              public $season;

             /**
              * The seasons of the TV series (legacy spelling; see singular form, season).
              *
              * @var $seasons Thing_CreativeWork_TVSeason
              */
              public $seasons;

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
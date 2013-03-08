<?php

class Thing_Organization_PerformingGroup_MusicGroup extends Thing_Organization_PerformingGroup{

             /**
              * A music album.
              *
              * @var $album Thing_CreativeWork_MusicPlaylist_MusicAlbum
              */
              public $album;

             /**
              * A collection of music albums (legacy spelling; see singular form, album).
              *
              * @var $albums Thing_CreativeWork_MusicPlaylist_MusicAlbum
              */
              public $albums;

             /**
              * A member of the music group—for example, John, Paul, George, or Ringo.
              *
              * @var $musicGroupMember Thing_Person
              */
              public $musicGroupMember;

             /**
              * A music recording (track)—usually a single song.
              *
              * @var $track Thing_CreativeWork_MusicRecording
              */
              public $track;

             /**
              * A music recording (track)—usually a single song (legacy spelling; see singular form, track).
              *
              * @var $tracks Thing_CreativeWork_MusicRecording
              */
              public $tracks;
}
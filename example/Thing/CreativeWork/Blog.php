<?php

class Thing_CreativeWork_Blog extends Thing_CreativeWork{

             /**
              * A posting that is part of this blog.
              *
              * @var $blogPost Thing_CreativeWork_Article_BlogPosting
              */
              public $blogPost;

             /**
              * The postings that are part of this blog (legacy spelling; see singular form, blogPost).
              *
              * @var $blogPosts Thing_CreativeWork_Article_BlogPosting
              */
              public $blogPosts;
}
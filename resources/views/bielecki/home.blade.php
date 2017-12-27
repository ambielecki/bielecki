@extends('layouts.master')

@section('title')
    Andrew Bielecki - Home
@stop

@section('head')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <p>
                Hello, I'm Andrew Bielecki, a full stack web developer with a main focus on PHP.  I have been coding for the past couple of years and have
                been working full time as a developer since the summer of 2016.  My initial experience was at Purch, in Waltham, MA, helping to maintain
                TopTenReviews.com and adding new features to both the front end and backend CMS of Business.com.  My current position is at MobileFuse, which
                is also located in Waltham, working on their internal Dashboard project as well as a new data processing project, both of which are written using
                the Laravel PHP framework.
            </p>
            <p>
                I am currently a Master's Degree Candidate at the Harvard Extension School in the their Information Systems
                program and have already completed their five course Web Development certificate.  Through Harvard Extension
                I have had the opportunity to be a Teaching Assistant for their course, <a href="http://www.dwa15.com">CSCI E15, Dynamic Web Applications</a>, which focuses
                on developing sites using the Laravel PHP framework to teach the MVC paradigm.
            </p>
            <p>
                Please feel free to contact me with any questions or requests for code sample at <a href="mailto:ambielecki@gmail.com">ambielecki@gmail.com</a>.
            </p>
            <p>
            <a href="/docs/AndrewBielecki.pdf" download>Download a copy of my resume in pdf format <i class="fa fa-file-pdf-o"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Malden Little League</h3>
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="/images/small/MLLHomePage.jpg" alt="Malden Little League Screenshot">
                </div>
                <div class="col-sm-9">
                    <p>
                        The Malden Little League page was created from scratch using the Laravel framework and a MySQL database.  The site has information
                        about the league, schedules, standings, rosters and more available to the general public.  Managers in the league have access to update
                        game scores, enter pitch counts for their players, and view additional information about their players such as parents' phone numbers and
                        email addresses.  The site is no longer active, as my son has moved to a new league and the current board has moved the league to the Cal
                        Ripken system.
                    </p>
                    <p>
                        The site was originally developed as a proof of concept project for a class at Harvard Extension school, <a href="http://dwa15.com">
                        CSCI E15, Dynamic Web Applications</a>,
                        in the Fall of 2015.  I had the opportunity to be a Teaching Assistant for this course the following semester, Spring 2016.
                    </p>
                    <p>
                        <a href="/mll">View more about the Malden Little League site.</a>
                    </p>
                </div>
            </div>
            <h3>Content Management Systems</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="http://andrewb.sgedu.site/wp/" target="_blank"><img class="img-responsive" src="/images/small/WordPress.jpg" alt="WordPress Site from DMGD E25"></a>
                </div>
                <div class="col-sm-9">
                    <p>
                        As part of the class <a href="http://www.extension.harvard.edu/academics/courses/introduction-web-content-management-systems-site-development/24048">
                        DGMD E25, Introduction to Content Management Systems</a>, I created example sites using <a href="http://andrewb.sgedu.site/wp/">
                        WordPress</a>, <a href="http://andrewb.sgedu.site/joomla/">Joomla</a>, and Drupal.  I chose
                        to continue to Little League theme, developing a site focused more on my son's particular team.
                    </p>
                    <p>
                        The focus of the course was to develop the same site using the different CMS's, so of course they look very similar.  These sites are not actively
                        maintained, so you may encounter some errors related to particular plugins.
                    </p>
                </div>
            </div>
            <h3>Biking Around Boston</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="http://cscie12.andrewbielecki.me" target="_blank"><img class="img-responsive" src="/images/small/Biking.jpg" alt="Biking Around Boston"></a>
                </div>
                <div class="col-sm-9">
                    <p>
                        Developed for the class <a href="http://www.extension.harvard.edu/academics/courses/fundamentals-website-development/15078">
                        CSCI E12, Fundamentals of Website Development,</a> this site is just a proof of concept for a larger idea (most pages are inactive and not
                        developed).  The site was written in vanilla PHP with a MySQL database and uses JavaScript for a photo gallery, form validation, and the Google Maps API.
                    </p>
                    <p>
                        The site implements some dynamic features, such as an example social page using PHP and MySQL.
                    </p>
                    <p>
                        You can learn more about the site and view the source code on Github at <a href="https://github.com/ambielecki/biking">github.com/ambielecki/biking</a>
                    </p>
                </div>
            </div>
            <h3>Dive - Log - Repeat</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="http://divelog.andrewbielecki.me" target="_blank"><img class="img-responsive" src="/images/small/Divelog.jpg" alt="Dive Log Repeat"></a>
                </div>
                <div class="col-sm-9">
                    <p>
                        My current side project (and definite work in progress) is to finish an idea I had when I first started programming, an online divelog and calculator.
                        Currently one can create an account, log dives, and make some simple dive calculations.  There's an admin backend to allow for uploading images, editing the
                        homepage, and even adding some blog content.  Still lots to go (some of the features are still dumping out arrays!), but getting there.
                    </p>
                    <p>
                        The site is built on Laravel 5.4 and I'm using it as a testbed to start playing with VueJS as well as implementing a MongoDB instance to hold page data
                        (there is also a MySQL DB for standard auth and some other functionality such as tracking image storage locations).
                    </p>
                    <p>
                        You can take a look at the work in progress code at: <a href="https://github.com/ambielecki/divelog">github.com/ambielecki/divelog</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@stop

@section('body')

@stop
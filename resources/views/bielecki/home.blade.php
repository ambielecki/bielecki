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
                I'm Andrew Bielecki, and aspiring full stack web developer.  I am currently
                seeking a position as a web developer, focusing on PHP and hopefully working with a framework such as
                Laravel. I have experience in HTML, JavaScript, MySQL, Oracle, PHP, and the Laravel framework. I have
                also done some work with CMS's such as WordPress, Joomla, and Drupal.  This will be a significant career
                change for me after spending over ten years as a bench scientist in the Biopharmaceutical industry working in
                small small molecule drug discovery developing High Throughput Screening assays and performing protein purification.
            </p>
            <p>
                I am currently a Master's Degree Candidate at the Harvard Extension School in the their Information Systems
                program and have already completed their five course Web Development certificate.  Through Harvard Extension
                I have had the opportunity to be a Teaching Assistant for their course, <a href="http://www.dwa15.com">CSCI E15, Dynamic Web Applications</a>, which focuses
                on developing sites using the Laravel PHP framework to teach the MVC paradigm.
            </p>
            <p>
                One of my main web development focuses has been the development and management of the site for my son's local Little League (where I'm a also a
                Board member). This site was developed using the Laravel framework using a MySQL database to manage rosters, scheduling, standings, and a feature
                to manage pitch counts for all of our players (unfortunately this feature can only be accessed by managers in the league, which was implemented with Laravel's
                authentication features).  You can visit the site at <a href="https://www.maldenlittleleague.org">www.maldenlittleleague.org</a> or see more details on it's
                portfolio page along with other projects I've worked on at Harvard Extension.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Malden Little League</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="https://www.maldenlittleleague.org" target="_blank"><img class="img-responsive" src="/images/small/MLLHomePage.jpg" alt="Malden Little League Screenshot"></a>
                </div>
                <div class="col-sm-9">
                    <p>
                        The Malden Little League page was created from scratch using the Laravel framework and a MySQL database.  The site has information
                        about the league, schedules, standings, rosters and more available to the general public.  Managers in the league have access to update
                        game scores, enter pitch counts for their players, and view additional information about their players such as parents' phone numbers and
                        email addresses.
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
                        WordPress</a>, <a href="http://andrewb.sgedu.site/joomla/">Joomla</a>, and <a href="http://andrewb.sgedu.site/drupal8/">Drupal</a>.  I chose
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
        </div>
    </div>
</div>
<br>
@stop

@section('body')

@stop
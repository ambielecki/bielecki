@extends('layouts.master')

@section('title')
    Andrew Bielecki - MLL
@stop

@section('head')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <h1>Malden Little League</h1>
            <p>
                The Malden Little League site started as a proof of concept for a class at Harvard Extension school, <a href="http://dwa15.com">
                CSCI E15, Dynamic Web Applications</a> and was adopted by the league for the 2016 season.
            </p>
            <p>
                The site is written using the Laravel PHP framework and uses a MySQL database for scheduling, standings, rosters, etc.  Each team's page
                is dynamically generated from the database with coach info, rosters, and schedules.
            </p>
            <p>
                Many of the site's features are only available to managers in the league, which is implemented using Laravel's authentication features, here are a few
                of the feature for authenticated users.
            </p>
            <p>
                The github repo is currently private, as many of the database tables were populated using Laravel seeds and contain private information such as
                player emails and phone numbers.  Please feel free to contact me at ambielecki@gmail.com if you'd like to see code samples.
            </p>
            <p>
                Here are some example screenshots along with links to public pages.
            </p>
            <h3>Update Game Scores - Administrator View</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="/images/MLLGame.jpg" target="_blank">
                        <img src="/images/small/MLLGame.jpg" alt="Edit Game View"><br>
                        Click to view full size image in a new tab
                    </a>
                </div>
                <div class="col-sm-9">
                    <p>
                        Site admins can edit or add new games to the schedule, with team and field dropdowns populated from the database.  Admins can update scores,
                        details such as forfeits, or delete games outright.  Managers have a separate view that only allows for updating scores.
                    </p>
                </div>
            </div>
            <h3>Pitch Counts - Managers Only</h3>
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/images/PitchCount.jpg" target="_blank">
                                <img src="/images/small/PitchCount.jpg" alt="PitchCount"><br>
                                Click to view full size image in a new tab
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/images/Rest.jpg" target="_blank">
                                <img src="/images/small/Rest.jpg" alt="Rest Tracker"><br>
                                Click to view full size image in a new tab
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <p>
                        One of the larger projects for the site was to develop code to track pitches for our players (Little League has
                        strict pitch count limits for pitchers depending on age), a feature that the league was paying an outside vendor for previously.  The site pulls
                        game and player data from the database, notifies the safety coordinator if players go over their innings limit, and has views for managers
                        to track their players and see when they are avialable to pitch again.
                    </p>
                    <p>
                        Compliance with entering this data was poor in previous years as managers disliked having to go to another site.  We've had no problems this season.
                    </p>
                </div>
            </div>
            <h3>Team Pages</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="/images/Knights.jpg" target="_blank">
                        <img src="/images/small/Knights.jpg" alt="Edit Game View"><br>
                        Click to view full size image in a new tab
                    </a>
                </div>
                <div class="col-sm-9">
                    <p>
                        Each team has their own page with coach info, rosters, and schedules generated dynamically from
                        the database.  You can see them all at <a href="https://www.maldenlittleleague.org/leagues">www.maldenlittleleague.org/leagues</a>
                    </p>
                </div>
            </div>
            <h3>Standings</h3>
            <div class="row">
                <div class="col-sm-3">
                    <a href="/images/Standings.jpg" target="_blank">
                        <img src="/images/small/Standings.jpg" alt="Edit Game View"><br>
                        Click to view full size image in a new tab
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
@stop

@section('body')

@stop
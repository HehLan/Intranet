HehLan
======

<img src="https://raw.github.com/HehLan/Intranet-5.0/master/logo.png" align="right" width="300px" />

This project contains the code of the intranet for the HEH LAN Party 2015-2016 at ISIMs School.


Here's the stuff.

- [Homepage](https://github.com/HehLan)
- [Source files](https://github.com/HehLan/Intranet-5.0)
- [Website](http://www.hehlan.be/)
- [Facebook](https://www.facebook.com/hehlan/)
- [Trello](https://trello.com/b/xPqJKf0i/ze-intranet) for project management.


Table of contents
=================

- [HEHLan](#HehLan)
- [Table of contents](#table-of-contents)
- [Install](#install)
- [Intro](#intro)
- [Configuration](#configuration)
- [Architecture] (#architecture)
    - [Root] (#root)
    - [Admin directory](#admin-directory)
    - [Class directory](#class-directory)
    - [Common directory](#common-directory)
    - [Doc directory](#doc-directory)
    - [Lib directory](#lib-directory)
    - [Modules directory](#modules-directory)
    - [Src directory](#src-directory)
    - [View directory](#view-directory)
    - [Websockets directory](#websockets-directory)
- [Database] (#database)
    - [brackets] (#db-brackets)
    - [downloads] (#db-downloads)
- [Test](#test)
- [Dependencies](#dependencies)
- [Libraries](#libraries)
    - [Bootstrap](#lib-bootstrap)
    - [Doxygen](#lib-doxygen)
    - [FontAwesome](#lib-fontawesome)
    - [JpGraph](#lib-jpgraph)
    - [Less](#lib-less)
    - [Smarty](#lib-smarty)
    - [baconjs](#lib-baconjs)
    - [handlebars](#lib-handlebars)
    - [jQuery](#lib-jquery)
    - [live](#lib-live)
    - [lodash](#lib-lodash)
- [Compatibility with browsers](#compatibility-with-browsers)
- [Contribute](#contribute)
- [Sponsors](#sponsors)


Install
=======



Intro
=====


Configuration
=============


Architecture
============

Root
----

This folder is the root and it contains the php pages of the client side.

Admin directory
---------------

This folder contains all directories and files for the admin side.

Class directory
---------------

This folder contains all classes.

Common directory
----------------


Lib directory
-------------

This folder contains libs which are used for the project.

Modules directory
-----------------


Src directory
-------------


View directory
--------------

This folder contains the view of the project. It contains the different templates.

Websockets directory
--------------------


Database
========

brackets
--------

- id_bracket: id of the bracket
- id_tournoi: id of the tournament
- json: JSON data for creating the bracket
- type: 1 for qualification groups number and 2 for finales brackets
- number: number of the group (0 = no groups, 1 to INF) or the finale (1 = winner bracket, 2 = looser bracket 1, 3 = looser bracket 2, ...)


downloads
---------

- id_downloads: id
- title: title of the file to be downloaded
- src: filepath
- published_date: date
- invisible: invisible

Test
====

scores.php
----------

Pour créer les groupes de qualifications côté admin, il faut d'abord ajouter les équipes.
Les différentes rencontres vont alors apparaître dans l'onglet "Unassigned".
Il faut ensuite les attribuer à des rounds. Chaque round correspond à un jour et une heure.
Pour l'attribution à des rounds:
- round 1: team A vs team B
- round 2 : team A vs team C
- ....
Les autres teams suivent une alternance cyclique
La saisie des résultats met automatiquement à jour l'affichage.


Dependencies
============


Libraries
=========

Bootstrap
---------

The bootstrap library permits to simplify the CSS design.

Doxygen
-------

The Doxygen library permits to generate the complete documentation of the code by using appropriate comments.

FontAwesome
-----------

The FontAwesome library allows us to choose pretty designed icons.

JpGraph
-------

The JpGraph library permits to create statistics graphs.

Less
----

Smarty
------

The Smarty library is a template engine which permits to have templated views using only HTML.

baconjs
-------

handlebars
----------

jQuery
------

live
----

lodash
------




Compatibility with browsers
===========================



Contribute
==========

People who directly contributed to the project are :
- El Mouhafidi Youness
- [Maigre Corky] (https://github.com/CorkyMaigre)
- Okulichev Youness

People who helped us solving some bugs during the project are :
- Jacquemin Geoffrey
- Laurent Jonathan



Sponsors
========





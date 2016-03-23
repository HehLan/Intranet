HehLan
======

<img src="https://raw.github.com/HehLan/Intranet-5.0/master/logoheh.png" align="right" width="300px" />

This project contains the code of the intranet for the HEH LAN Party 2015-2016 at ISIMs School.


Here's the stuff.

- [Homepage](https://github.com/HehLan)
- [Source files](https://github.com/HehLan/Intranet-5.0)
- [Wiki]() with more docs, related projects and more
- [Website](http://www.hehlan.be/)
- [Facebook] (https://www.facebook.com/hehlan/)
- [Trello] (https://trello.com/b/xPqJKf0i/ze-intranet) for project management.


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

- id_bracket: id
- id_tournoi: id of the tournament
- json: JSON data
- type: 1 for qualification groups number and 2 for finales brackets
- group_number: number of the group if type is of 1
- finales_number: number of the finales if type is of 2

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



Compatibility with browsers
===========================



Contribute
==========


Sponsors
========





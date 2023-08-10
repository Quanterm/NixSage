A free and open source digital signage solution refreshed in Nix.



LibreSignage is unmaintained as of 3rd of February 2021
-------------------------------------------------------

LibreSignage started in 2018 as a small project aiming to make digital signage
accessible to everyone. Since then the project has grown a lot, many new features
have been added and even some contributions have been merged from other people.
Developing LibreSignage has been a fantastic journey and I'm really grateful for
for all code and bug reports submitted by contributors. I have personally spent
hundreds of hours working on LibreSignage and enjoyed every bit of that time. It
really has been a great 3 years.

That said, unfortunately I don't have the time, resources or interest to continue
developing or supporting LibreSignage anymore. As such, after 3rd of Februrary 2021,
LibreSignage development and support is officially halted. If I regain my interest
in developing LibreSignage I might pick up the project again but **for now LibreSignage
is unmaintained.**




Table Of Contents
-----------------

`1. Introduction`_

`2. Features`_

`3. Project goals`_

`4. Installation(WIP)`_

`5. Documentation (WIP)`_


Introduction
---------------

Digital Signage was everything from large-scale commercial billboards
to smaller advertisement displays, notice boards or digital restaurant
menus. The possibilities of digital signage are endless. If you need
to display periodically changing content to users on a wall-mounted
TV for example, digital signage is probably what you are looking for.

LibreSignage was a free and open source, lightweight and easy-to-use
digital signage solution for use in schools, cafés, restaurants and
shops among others. LibreSignage can be used to manage a network of
digital signage displays. Don't let the word network fool you though;
a network can be as small as one display on an office wall or as big
as 50+ displays spread throughout a larger building.

LibreSignage also includes multi-user support with password authentication
and configurable access control to specific features. If a school wants
to setup a digital notice board system for example, they might give
every teacher an account with slide editing permissions so that teachers
could manage the content on the internal digital signage network. This
way the teachers could inform students about important things such as
upcoming tests for example.

LibreSignage uses a HTTP web server to serve content to the individual
signage displays. This means that he displays only need to run a web
browser pointed to the central LibreSignage server to actually display
content. This approach has a few advantages.

1. It's simple - No specific hardware/software platform is required.
   Any system with a fairly recent web browser works.
2. It's cheap - You don't necessarily need to buy lots of expensive
   equipment to get started. Just dust off the old PC in the closet,
   install an up-to-date OS like Linux on it, install a web browser,
   hide the mouse pointer by default and connect the system to a
   display. That's it. The only other thing you need is the server,
   which in fact can run on the same system if needed.
3. It's reliable - The web infrastructure is already implemented and
   well tested so why not use it.
4. It makes editing easy - Displaying content in a browser has the
   advantage of making slide previewing very simple. You can either
   use the 'Live Preview' in the editor or check the exact results
   from the actual 'Display' page that's displayed on the clients too.

Now it is time for a refresh with the goal to make a user friendlier setup and easier maintainence.
A nixified version of Libresage.

2. Features
-----------

* Web interface for editing slides and managing the NixSignage instance.
* Many per slide settings like durations, transitions, etc.
* Special markup syntax for easily formatting slides.
* Live preview of the slide markup in the slide editor.
* Support for embedding remote or uploaded image and video files.
* Support for scheduling specific slides for a specific time-frame.
* Collaboration features with other users on the network.
* Separate slide queues for different sets of signage clients.
* Multi user support with configurable access control.
* User management features for admin users in the web interface.
* Configurable quota for the amount of slides a user can create.
* Rate limited API for reducing server load.
* Extensive documentation of features including docs for developers.
* Extensive configuration possibilities.

3. Project goals
----------------

* Create a lightweight alternative to other digital signage solutions.
* Create a system that's both easy to set up and easy to use.
* Write a well documented and modular API so that implementing new
  user interfaces is simple.
* Avoid scope creep.
* Document all features.
* Keep it simple.
* Reproducible
* Actively Maintaned

4. Installation (WIP)
---------------

5. Documentation (WIP)
---------------

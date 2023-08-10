1. General
----------

This document describes the NixSage development workflow,
versioning and GIT usage. If you want to get some insight into
how LibreSignage is developed, this is a good place to start.

4. How to contribute
--------------------

Contributions to LibreSignage are always welcome and fortunately contributing
is quite straightforward. Basically you only need to write your patches against
a specific branch in the GIT repo and create a Pull Request on GitHub to get
it merged into the main repo. You should always ask whether your proposed change
is needed in the GitHub issue tracker first, since in the end the repository
owner, Eero Talus, is the one deciding what changes are merged.

* If you want to write a bugfix for a patch release, you need to base you
  changes on the oldest release branch where you want your patch applied. That
  way it's easy to merge it into newer releases aswell.
* If you want to contribute a new feature or a change that's not considered a
  bugfix, you need to base your changes on the *next* branch. This will make
  sure your changes are included in a future MINOR or MAJOR release.

In your pull request description, please describe the changes your pull pequest
contains and why they are required. Your pull request will be reviewed by the
repository owner or trusted contributors and if changes are required you'll be requested to make them
before merging. When everything is finished, your PR will be merged to the
correct branch and the changes will ship in a future release.

# OpenVX-Registry

The OpenVX-Registry repository contains the OpenVX API and Extension
Registry, including specifications.

It is also used as a backing store for the web view of the registry at
https://www.khronos.org/registry/vx/ ; commits to the master branch of this
repository will be reflected there.

Please do not file issues against the OpenVX API, extensions, or headers in
this repository. Such issues should be filed in the separate
https://github.com/KhronosGroup/OpenVX-api-docs repository. The only issues
appropriate for this repository are regarding technical problems such as
broken links, missing content, etc.

In the past, the OpenVX registry was maintained in a public Subversion
repository. The history in that repository has not been imported to github,
but it is still available at
https://cvs.khronos.org/svn/repos/registry/trunk/public/vx/ .

Interesting files in this repository include:

* index.php - toplevel index page for the web view. This relies on PHP
  include files found elsewhere on www.khronos.org and so is not very useful
  in isolation.
* api/ - OpenVX header files
* extensions/ - OpenVX extension specifications, grouped into
  vendor-specific subdirectories.
* sample/ - OpenVX sample implementations.
* schema/ - OpenVX XML Schema
* specs/ - OpenVX specification documents.


## Adding Extension Specifications

Extension specification documents can be added by proposing a pull request
to master, adding the specification HTML files under
extensions/extension_name/ . You must also:

* Add a link from the extensions section of index.php to the extension
  document, so it shows up in the web view.

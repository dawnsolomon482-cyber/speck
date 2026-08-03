=== Speck Modern Theme ===
Theme Name: Speck Modern Theme
Folder: speck-modern-theme
Version: 1.0.0

DESCRIPTION
-----------
A modernized visual style layered on top of the same structure, branding,
links, and functionality as speckdealerships.com: header/nav, hero,
inventory search, dealership location cards, specials, financing,
service & parts, about, and footer. Elementor-compatible (works with the
free version of Elementor).

WHAT'S IN THE BOX
------------------
style.css                       Theme header + brand color tokens
functions.php                   Theme setup, menus, widget area, asset enqueue
header.php / footer.php         Site header and footer (editable via Appearance > Menus/Widgets)
index.php                       Fallback template
front-page.php                  Homepage (auto-used if no content is added via Elementor to the "Home" page)
page.php                        Default page template (blank canvas for Elementor)
page-templates/template-fullwidth.php   Full-width template for edge-to-edge Elementor sections
template-parts/sections/*.php   Each homepage section (hero, dealerships, specials,
                                 financing, service, about) as its own file/shortcode
assets/css/main.css             All visual styling
assets/js/main.js               Mobile nav toggle
assets/images/                  Logo, brand logos, and sample background photos
screenshot.png                  ADD THIS YOURSELF (see below) - 1200x900px preview image for the admin theme list

DRAG-AND-DROP EDITING IN ELEMENTOR
-------------------------------------
Every homepage section is also registered as a shortcode:
  [speck_hero]  [speck_dealerships]  [speck_specials]
  [speck_financing]  [speck_service]  [speck_about]

To rearrange, remove, or mix sections visually: edit the "Home" page with
Elementor, add a "Shortcode" widget for each section you want (in
Elementor's search box, look for "Shortcode"), paste in the matching
shortcode above, then drag the widgets into whatever order you like.
Elementor will take over the page from front-page.php automatically once
the Home page has content.

REPLACING BACKGROUND PHOTOS (no code needed)
------------------------------------------------
WP Admin > Appearance > Customize > "Speck Backgrounds" lets you upload
a replacement image for the hero and for the Specials / Financing /
Service & Parts / About backgrounds. Until you upload one, the bundled
sample photos (pulled from the live site) are used.

BEFORE YOU ZIP
--------------
1. Add a screenshot.png (1200x900px) to the theme's root folder. This is
   optional for the theme to work, but WordPress shows a placeholder
   without it.
2. If you have the exact Speck brand hex codes, open style.css and update
   the --speck-primary / --speck-secondary / --speck-accent values at the
   top of the file (currently close approximations pulled from the live
   site).

HOW TO PACKAGE AS A ZIP
------------------------
Compress the "speck-modern-theme" FOLDER itself (not just its contents)
into a .zip file, e.g. on Windows: right-click the folder > Send to >
Compressed (zipped) folder.

INSTALL & ACTIVATE
-------------------
1. WP Admin > Appearance > Themes > Add New > Upload Theme.
2. Choose speck-modern-theme.zip, click Install Now, then Activate.

INSTALL ELEMENTOR
------------------
1. WP Admin > Plugins > Add New, search "Elementor", Install & Activate.

SET UP THE HOMEPAGE
--------------------
1. Pages > Add New, title it "Home". Leave it blank to use the coded
   front-page.php layout, OR edit it with Elementor to fully replace it.
2. Settings > Reading > "A static page" > set Homepage to "Home".

RECREATE OTHER PAGES
----------------------
Create a Page for each of your existing nav items (New Vehicles, Used
Vehicles, Specials, Finance, Service, Parts, About Us, etc. -- Service and
Parts are separate pages on the live site, not combined) using the
same URL slugs as the live site where possible, and edit each with
Elementor. Assign the "Full Width (Elementor)" template under Page
Attributes for any page that needs edge-to-edge sections.

BUILD THE MENU
----------------
Appearance > Menus > create a menu with the same items/links as the live
site, assign it to the "Primary Menu" location (and optionally a
"Footer Menu").

CONNECT EXISTING INVENTORY LINKS
-----------------------------------
This theme does not host its own inventory database. All "View
Inventory" / dealership buttons should link out to each dealership's
existing inventory system exactly as the live site does today (e.g. each
dealership's own site, or the Work Trucks Solutions portal). Update the
$dealerships array in front-page.php or the links in Elementor if any
destination URLs change.

TEST EVERYTHING
------------------
- Every nav link and footer link
- Every dealership card link and tel: phone link
- The inventory search form submission
- Forms/maps/external links on any page you rebuild in Elementor
- Desktop, tablet, and mobile (resize browser or use device toolbar)

STAGING RECOMMENDATION
-------------------------
Install and test this theme on a staging copy of the site (or a fresh WP
install) before activating it on the live speckdealerships.com.

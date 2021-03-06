﻿

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)



Updade Guide
------------

.. contents:: Within this page
   :local:
   :depth: 3


Upgrade to 4.1.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Tested in PHP 7.4
* Renamed TS and TSconfig files to newer file extensions
* Minor improvements, fixes and clean up


How to upgrade
""""""""""""""

* Adjust your TS and TSconfig file inclusion




Upgrade to 4.0.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Added TYPO3 10.2 support
* Removed TYPO3 8.x support
* Now using PSR-15 middleware instead of eID
* Removed custom logging, throw exceptions instead
* Minor improvements, fixes and clean up


How to upgrade
""""""""""""""

* Clear all caches




Upgrade to 3.0.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Added TYPO3 9.5 support
* Removed PHP 5.x support
* Removed TYPO3 7.x support
* Update Plupload to v2.3.6


How to upgrade
""""""""""""""

* Use "Clear all caches including PHP opcode cache" and "Dump Autoload Information" in the install tool (if needed for your setup)
* Adjust your templates (add new error handler)
* Clear all caches




Upgrade to 2.1.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Some refactoring
* Changed PHP namespace to `FelixNagel`
* Tested in PHP 7.2


How to upgrade
""""""""""""""

* Use "Clear all caches including PHP opcode cache"
* Clear all caches




Upgrade to 2.0.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Removed TYPO3 6.2 support

* Refactor classes

* Switch to PSR-2 CGL


How to upgrade
""""""""""""""

You need to clear the cache.




Upgrade to 1.6.1
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Fix path for swf (Flash) and xap (Silverlight) fallback


How to upgrade
""""""""""""""

You might need to update your custom template. Clear the FE cache.


Upgrade to 1.6.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* TYPO3 8.7 LTS support

* Update Plupload to v2.3.1

* Add new BE icons

* Add integration guide in docs


How to upgrade
""""""""""""""

You need to clear the cache.



Upgrade to 1.5.2
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Fix bug in folder generation with user name (replaced invalid `realName` field with `name`)


How to upgrade
""""""""""""""

You need to clear the cache.

Make sure to check the `feuser_field` in your configuration records.




Upgrade to 1.5.1
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* Fix bug in new content element wizard TSconfig

* Remove folder input wizard workaround for TYPO3 7.6.11+

* Remove old changelog


How to upgrade
""""""""""""""

You need to clear the cache.



Upgrade to 1.5.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* TYPO3 8.x support

* Update Plupload to v2.1.9

* Rework TCA to match latest TYPO3 API

* Rework folder structure to match TYPO3 defaults

* Fix TCA tab configuration for TYPO3 6.2


How to upgrade
""""""""""""""

You need to clear the cache and make sure your TS configuration is up to date!



Upgrade to 1.4.0
^^^^^^^^^^^^^^^^

Changelog
"""""""""

* New feature: Using fe_user properties as upload folder (thanks to Daniel Wagner)!

* Improve config record TCA (now using tabs, improved localization)

* New template marker for max upload size (###FILE_MAX_SIZE###)


How to upgrade
""""""""""""""

You need to clear the cache and create the new DB field after upgrading.
Make sure your template match latest changes.



Upgrade to 1.3.x
^^^^^^^^^^^^^^^^

Extension is now compatible with TYPO3 CMS 7.5 and 7.6.

Plupload plugin has been updated, make sure everything works as expected.

You need to clear the cache in backend after upgrading.


Note: Version 1.3.0 was replaced with 1.3.1 due to upload errors.



Upgrade to 1.2.0
^^^^^^^^^^^^^^^^

Extension is now compatible with TYPO3 CMS 7.x.

Plupload plugin has been updated, make sure everything works as expected.

You need to clear the cache in backend after upgrading.



Upgrade to 1.0.0
^^^^^^^^^^^^^^^^

Add the new static TypoScript configuration to your TS template.
Version 1.0.0 comes with Plupload 2.1.2 so make sure to update your
template file if needed.

You need to make sure jQuery is available on your website.
It's no longer included by default.

Please note: The initial JavaScript is now added as footer JS to
ensure frontend development best practice.


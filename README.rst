==============
Natural Carousel TYPO3 |download| |version| |license|
==============

.. |download| image:: https://poser.pugx.org/fab/natural-carousel/downloads
    :target: https://packagist.org/packages/fab/natural-carousel
    :alt: Total Downloads
.. |version| image:: https://poser.pugx.org/fab/natural-carousel/v/stable
    :target: https://packagist.org/packages/fab/natural-carousel
    :alt: Latest Stable Version
.. |license| image:: https://poser.pugx.org/fab/natural-carousel/license
    :target: https://packagist.org/packages/fab/natural-carousel
    :alt: License


Display images as you scroll. Images are displayed within a slideshow when enlarged.
Under the hood it uses the Media API and relies on categories to filter images on the FE.

.. image:: https://raw.github.com/Ecodev/natural-carousel-typo3/master/Documentation/Introduction-01.png


Project info and releases
=========================

The home page of the project is on https://github.com/Ecodev/natural-carousel-typo3

Stable version: https://extensions.typo3.org/extension/natural_carousel/

::

	git clone https://github.com/Ecodev/natural-carousel-typo3.git natural_carousel

Users manual
============

To install a gallery on a page, click on the page where the gallery should be displayed and create a new content element.

.. image:: https://raw.github.com/Ecodev/natural-carousel-typo3/master/Documentation/UserManual-01.png

Choose the plugin "Infinite Scroll Gallery"

.. image:: https://raw.github.com/Ecodev/natural-carousel-typo3/master/Documentation/UserManual-02.png

Give a Header if necessary and choose the "Plugin" tab.

.. image:: https://raw.github.com/Ecodev/natural-carousel-typo3/master/Documentation/UserManual-03.png

Choose "Infinite Scroll Gallery" plugin

.. image:: https://raw.github.com/Ecodev/natural-carousel-typo3/master/Documentation/UserManual-04.png

Once the plugin "Infinite Scroll Gallery" is selected, configuration is self explanatory.

Configuration
=============

.. .....................................................................................
.. container:: table-row

Key
	view.templateRootPath

Datatype
	string

Description
	Path to template root

Default
	EXT:natural_carousel/Resources/Private/Templates/

.. .....................................................................................
.. container:: table-row

Key
	view.partialRootPath

Datatype
	string

Description
	Path to template partials

Default
	EXT:natural_carousel/Resources/Private/Partials/


.. .....................................................................................
.. container:: table-row

Key
	view.layoutRootPath

Datatype
	string

Description
	Path to template layouts

Default
	EXT:natural_carousel/Resources/Private/Layouts/

.. .....................................................................................
.. container:: table-row

Key
	persistence.storagePid

Datatype
	int

Description
	Path to template layouts

Default
	EXT:natural_carousel/Resources/Private/Layouts/

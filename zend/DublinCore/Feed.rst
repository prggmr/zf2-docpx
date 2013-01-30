.. Feed/Reader/Extension/DublinCore/Feed.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Reader\\Extension\\DublinCore\\Feed
===============================================

Methods
+++++++

getAuthor
---------

.. function:: getAuthor()


    Get a single author

    :param int: 

    :rtype: string|null 



getAuthors
----------

.. function:: getAuthors()


    Get an array with feed authors

    :rtype: array 



getCopyright
------------

.. function:: getCopyright()


    Get the copyright entry

    :rtype: string|null 



getDescription
--------------

.. function:: getDescription()


    Get the feed description

    :rtype: string|null 



getId
-----

.. function:: getId()


    Get the feed ID

    :rtype: string|null 



getLanguage
-----------

.. function:: getLanguage()


    Get the feed language

    :rtype: string|null 



getTitle
--------

.. function:: getTitle()


    Get the feed title

    :rtype: string|null 



getDate
-------

.. function:: getDate()


    @return DateTime|null



getCategories
-------------

.. function:: getCategories()


    Get categories (subjects under DC)

    :rtype: Collection\Category 



registerNamespaces
------------------

.. function:: registerNamespaces()


    Register the default namespaces for the current feed format

    :rtype: void 




.. Feed/Writer/Extension/ITunes/Feed.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\Writer\\Extension\\ITunes\\Feed
===========================================



Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor



setEncoding
+++++++++++

.. function:: setEncoding()


    Set feed encoding

    :param string: 

    :rtype: Feed 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get feed encoding

    :rtype: string 



setItunesBlock
++++++++++++++

.. function:: setItunesBlock()


    Set a block value of "yes" or "no". You may also set an empty string.

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



addItunesAuthors
++++++++++++++++

.. function:: addItunesAuthors()


    Add feed authors

    :param array: 

    :rtype: Feed 



addItunesAuthor
+++++++++++++++

.. function:: addItunesAuthor()


    Add feed author

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesCategories
+++++++++++++++++++

.. function:: setItunesCategories()


    Set feed categories

    :param array: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesImage
++++++++++++++

.. function:: setItunesImage()


    Set feed image (icon)

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesDuration
+++++++++++++++++

.. function:: setItunesDuration()


    Set feed cumulative duration

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesExplicit
+++++++++++++++++

.. function:: setItunesExplicit()


    Set "explicit" flag

    :param bool: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesKeywords
+++++++++++++++++

.. function:: setItunesKeywords()


    Set feed keywords

    :param array: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesNewFeedUrl
+++++++++++++++++++

.. function:: setItunesNewFeedUrl()


    Set new feed URL

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



addItunesOwners
+++++++++++++++

.. function:: addItunesOwners()


    Add feed owners

    :param array: 

    :rtype: Feed 



addItunesOwner
++++++++++++++

.. function:: addItunesOwner()


    Add feed owner

    :param array: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSubtitle
+++++++++++++++++

.. function:: setItunesSubtitle()


    Set feed subtitle

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSummary
++++++++++++++++

.. function:: setItunesSummary()


    Set feed summary

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



__call
++++++

.. function:: __call()


    Overloading: proxy to internal setters

    :param string: 
    :param array: 

    :rtype: mixed 

    :throws: Writer\Exception\BadMethodCallException 




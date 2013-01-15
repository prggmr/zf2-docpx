.. /Feed/Writer/Extension/ITunes/Feed.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Extension\\ITunes\\Feed
*******************************************


@category Zend



Methods
=======

setEncoding
-----------

.. function:: setEncoding($enc)


    Set feed encoding

    :param string $enc: 

    :rtype: Feed 



getEncoding
-----------

.. function:: getEncoding()


    Get feed encoding

    :rtype: string 



setItunesBlock
--------------

.. function:: setItunesBlock($value)


    Set a block value of "yes" or "no". You may also set an empty string.

    :param string: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



addItunesAuthors
----------------

.. function:: addItunesAuthors($values)


    Add feed authors

    :param array $values: 

    :rtype: Feed 



addItunesAuthor
---------------

.. function:: addItunesAuthor($value)


    Add feed author

    :param string $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesCategories
-------------------

.. function:: setItunesCategories($values)


    Set feed categories

    :param array $values: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesImage
--------------

.. function:: setItunesImage($value)


    Set feed image (icon)

    :param string $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesDuration
-----------------

.. function:: setItunesDuration($value)


    Set feed cumulative duration

    :param string $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesExplicit
-----------------

.. function:: setItunesExplicit($value)


    Set "explicit" flag

    :param bool $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesKeywords
-----------------

.. function:: setItunesKeywords($value)


    Set feed keywords

    :param array $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesNewFeedUrl
-------------------

.. function:: setItunesNewFeedUrl($value)


    Set new feed URL

    :param string $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



addItunesOwners
---------------

.. function:: addItunesOwners($values)


    Add feed owners

    :param array $values: 

    :rtype: Feed 



addItunesOwner
--------------

.. function:: addItunesOwner($value)


    Add feed owner

    :param array $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSubtitle
-----------------

.. function:: setItunesSubtitle($value)


    Set feed subtitle

    :param string $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSummary
----------------

.. function:: setItunesSummary($value)


    Set feed summary

    :param string $value: 

    :rtype: Feed 

    :throws: Writer\Exception\InvalidArgumentException 



__call
------

.. function:: __call($method, $params)


    Overloading: proxy to internal setters

    :param string $method: 
    :param array $params: 

    :rtype: mixed 

    :throws: Writer\Exception\BadMethodCallException 






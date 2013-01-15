.. /Feed/Writer/Extension/ITunes/Entry.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Extension\\ITunes\\Entry
********************************************


@category Zend



Methods
=======

setEncoding
-----------

.. function:: setEncoding($enc)


    Set feed encoding

    :param string $enc: 

    :rtype: Entry 



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

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



addItunesAuthors
----------------

.. function:: addItunesAuthors($values)


    Add authors to itunes entry

    :param array $values: 

    :rtype: Entry 



addItunesAuthor
---------------

.. function:: addItunesAuthor($value)


    Add author to itunes entry

    :param string $value: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesDuration
-----------------

.. function:: setItunesDuration($value)


    Set duration

    :param int $value: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesExplicit
-----------------

.. function:: setItunesExplicit($value)


    Set "explicit" flag

    :param bool $value: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesKeywords
-----------------

.. function:: setItunesKeywords($value)


    Set keywords

    :param array $value: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSubtitle
-----------------

.. function:: setItunesSubtitle($value)


    Set subtitle

    :param string $value: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSummary
----------------

.. function:: setItunesSummary($value)


    Set summary

    :param string $value: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



__call
------

.. function:: __call($method, $params)


    Overloading to itunes specific setters

    :param string $method: 
    :param array $params: 

    :throws Writer\Exception\BadMethodCallException: 

    :rtype: mixed 






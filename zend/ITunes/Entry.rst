.. Feed/Writer/Extension/ITunes/Entry.php generated using docpx on 01/30/13 03:32am


Zend\\Feed\\Writer\\Extension\\ITunes\\Entry
============================================



Methods
+++++++

__construct
-----------

.. function:: __construct()


    The used string wrapper supporting encoding




setEncoding
-----------

.. function:: setEncoding()


    Set feed encoding

    :param string: 

    :rtype: Entry 



getEncoding
-----------

.. function:: getEncoding()


    Get feed encoding

    :rtype: string 



setItunesBlock
--------------

.. function:: setItunesBlock()


    Set a block value of "yes" or "no". You may also set an empty string.

    :param string: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



addItunesAuthors
----------------

.. function:: addItunesAuthors()


    Add authors to itunes entry

    :param array: 

    :rtype: Entry 



addItunesAuthor
---------------

.. function:: addItunesAuthor()


    Add author to itunes entry

    :param string: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesDuration
-----------------

.. function:: setItunesDuration()


    Set duration

    :param int: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesExplicit
-----------------

.. function:: setItunesExplicit()


    Set "explicit" flag

    :param bool: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesKeywords
-----------------

.. function:: setItunesKeywords()


    Set keywords

    :param array: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSubtitle
-----------------

.. function:: setItunesSubtitle()


    Set subtitle

    :param string: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



setItunesSummary
----------------

.. function:: setItunesSummary()


    Set summary

    :param string: 

    :rtype: Entry 

    :throws: Writer\Exception\InvalidArgumentException 



__call
------

.. function:: __call()


    Overloading to itunes specific setters

    :param string: 
    :param array: 

    :throws Writer\Exception\BadMethodCallException: 

    :rtype: mixed 




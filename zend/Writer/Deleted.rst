.. /Feed/Writer/Deleted.php generated using docpx on 01/15/13 05:29pm


Zend\\Feed\\Writer\\Deleted
***************************


@category Zend



Methods
=======

setEncoding
-----------

.. function:: setEncoding($encoding)


    Set the feed character encoding

    :param $encoding: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string|null 
    :rtype: Deleted 



getEncoding
-----------

.. function:: getEncoding()


    Get the feed character encoding

    :rtype: string|null 



remove
------

.. function:: remove($name)


    Unset a specific data point

    :param string $name: 

    :rtype: Deleted 



setType
-------

.. function:: setType($type)


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string $type: 

    :rtype: Deleted 



getType
-------

.. function:: getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



setReference
------------

.. function:: setReference($reference)


    Set reference

    :param $reference: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Deleted 



getReference
------------

.. function:: getReference()


    @return string



setWhen
-------

.. function:: setWhen([$date = false])


    Set when

    :param null|string|DateTime $date: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Deleted 



getWhen
-------

.. function:: getWhen()


    @return DateTime



setBy
-----

.. function:: setBy($by)


    Set by

    :param array $by: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Deleted 



getBy
-----

.. function:: getBy()


    @return string



setComment
----------

.. function:: setComment($comment)


    @param string $comment

    :rtype: Deleted 



getComment
----------

.. function:: getComment()


    @return string






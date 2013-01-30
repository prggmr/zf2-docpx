.. Feed/Writer/Deleted.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Feed\\Writer\\Deleted
===========================



Methods
-------

setEncoding
+++++++++++

.. function:: setEncoding()


    Set the feed character encoding

    :param $encoding: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string|null 
    :rtype: Deleted 



getEncoding
+++++++++++

.. function:: getEncoding()


    Get the feed character encoding

    :rtype: string|null 



remove
++++++

.. function:: remove()


    Unset a specific data point

    :param string: 

    :rtype: Deleted 



setType
+++++++

.. function:: setType()


    Set the current feed type being exported to "rss" or "atom". This allows
    other objects to gracefully choose whether to execute or not, depending
    on their appropriateness for the current type, e.g. renderers.

    :param string: 

    :rtype: Deleted 



getType
+++++++

.. function:: getType()


    Retrieve the current or last feed type exported.

    :rtype: string Value will be "rss" or "atom"



setReference
++++++++++++

.. function:: setReference()


    Set reference

    :param $reference: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Deleted 



getReference
++++++++++++

.. function:: getReference()


    @return string



setWhen
+++++++

.. function:: setWhen()


    Set when

    :param null|string|DateTime: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Deleted 



getWhen
+++++++

.. function:: getWhen()


    @return DateTime



setBy
+++++

.. function:: setBy()


    Set by

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Deleted 



getBy
+++++

.. function:: getBy()


    @return string



setComment
++++++++++

.. function:: setComment()


    @param string $comment

    :rtype: Deleted 



getComment
++++++++++

.. function:: getComment()


    @return string




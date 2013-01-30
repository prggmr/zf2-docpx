.. Stdlib/Message.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Stdlib\\Message
=====================

Methods
-------

setMetadata
+++++++++++

.. function:: setMetadata()


    Set message metadata
    
    Non-destructive setting of message metadata; always adds to the metadata, never overwrites
    the entire metadata container.

    :param string|int|array|Traversable: 
    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Message 



getMetadata
+++++++++++

.. function:: getMetadata()


    Retrieve all metadata or a single metadatum as specified by key

    :param null|string|int: 
    :param null|mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: mixed 



setContent
++++++++++

.. function:: setContent()


    Set message content

    :param mixed: 

    :rtype: Message 



getContent
++++++++++

.. function:: getContent()


    Get message content

    :rtype: mixed 



toString
++++++++

.. function:: toString()


    @return string




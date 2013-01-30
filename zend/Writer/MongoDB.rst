.. Log/Writer/MongoDB.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Log\\Writer\\MongoDB
==========================

MongoDB log writer.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param Mongo|MongoClient|array|Traversable: 
    :param string|MongoDB: 
    :param string: 
    :param array: 

    :throws Exception\InvalidArgumentException: 



setFormatter
++++++++++++

.. function:: setFormatter()


    This writer does not support formatting.

    :param string|Zend\Log\Formatter\FormatterInterface: 

    :rtype: WriterInterface 



doWrite
+++++++

.. function:: doWrite()


    Write a message to the log.

    :param array: Event data

    :rtype: void 

    :throws: Zend\Log\Exception\RuntimeException 




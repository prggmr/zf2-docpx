.. Log/Writer/Stream.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Writer\\Stream
=========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param string|resource|array|Traversable: Stream or URL to open as a stream
    :param string|null: Mode, only applicable if a URL is given
    :param null|string: Log separator string

    :rtype: Stream 

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 



doWrite
+++++++

.. function:: doWrite()


    Write a message to the log.

    :param array: event data

    :rtype: void 

    :throws: Exception\RuntimeException 



setLogSeparator
+++++++++++++++

.. function:: setLogSeparator()


    Set log separator string

    :param string: 

    :rtype: Stream 



getLogSeparator
+++++++++++++++

.. function:: getLogSeparator()


    Get log separator string

    :rtype: string 



shutdown
++++++++

.. function:: shutdown()


    Close the stream resource.

    :rtype: void 




.. Log/Writer/FingersCrossed.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Writer\\FingersCrossed
=================================

Buffers all events until the strategy determines to flush them.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param WriterInterface|string|array|Traversable: Wrapped writer or array of configuration options
    :param FilterInterface|int: Filter or log priority which determines buffering of events
    :param int: Maximum buffer size



setWriter
+++++++++

.. function:: setWriter()


    Set a new formatter for this writer

    :param string|Formatter\FormatterInterface: 

    :rtype: self 

    :throws: Exception\InvalidArgumentException 



getWriterPluginManager
++++++++++++++++++++++

.. function:: getWriterPluginManager()


    Get writer plugin manager

    :rtype: WriterPluginManager 



setWriterPluginManager
++++++++++++++++++++++

.. function:: setWriterPluginManager()


    Set writer plugin manager

    :param string|WriterPluginManager: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException 



writerPlugin
++++++++++++

.. function:: writerPlugin()


    Get writer instance

    :param string: 
    :param array|null: 

    :rtype: Writer\WriterInterface 



write
+++++

.. function:: write()


    Log a message to this writer.

    :param array: log data event

    :rtype: void 



isActivated
+++++++++++

.. function:: isActivated()


    Check if buffered data should be flushed

    :param array: event data

    :rtype: boolean true if buffered data should be flushed



doWrite
+++++++

.. function:: doWrite()


    Write message to buffer or delegate event data to the wrapped writer

    :param array: event data

    :rtype: void 



reset
+++++

.. function:: reset()


    Resets the state of the handler.
    Stops forwarding records to the wrapped writer



setFormatter
++++++++++++

.. function:: setFormatter()


    Stub in accordance to parent method signature.
    Fomatters must be set on the wrapped writer.

    :param string|Formatter\FormatterInterface: 

    :rtype: WriterInterface 



shutdown
++++++++

.. function:: shutdown()


    Record shutdown

    :rtype: void 




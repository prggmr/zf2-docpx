.. Log/Logger.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Logger
=================

Logging messages with a stack of backends

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Set options for an logger. Accepted options are:
    - writers: array of writers to add to this logger
    - exceptionhandler: if true register this logger as exceptionhandler
    - errorhandler: if true register this logger as errorhandler

    :param array|\Traversable: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException 



__destruct
++++++++++

.. function:: __destruct()


    Shutdown all writers

    :rtype: void 



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



addWriter
+++++++++

.. function:: addWriter()


    Add a writer to a logger

    :param string|Writer\WriterInterface: 
    :param int: 
    :param array|null: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException 



getWriters
++++++++++

.. function:: getWriters()


    Get writers

    :rtype: SplPriorityQueue 



setWriters
++++++++++

.. function:: setWriters()


    Set the writers

    :param SplPriorityQueue: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException 



getProcessorPluginManager
+++++++++++++++++++++++++

.. function:: getProcessorPluginManager()


    Get processor plugin manager

    :rtype: ProcessorPluginManager 



setProcessorPluginManager
+++++++++++++++++++++++++

.. function:: setProcessorPluginManager()


    Set processor plugin manager

    :param string|ProcessorPluginManager: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException 



processorPlugin
+++++++++++++++

.. function:: processorPlugin()


    Get processor instance

    :param string: 
    :param array|null: 

    :rtype: Processor\ProcessorInterface 



addProcessor
++++++++++++

.. function:: addProcessor()


    Add a processor to a logger

    :param string|Processor\ProcessorInterface: 
    :param int: 
    :param array|null: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException 



getProcessors
+++++++++++++

.. function:: getProcessors()


    Get processors

    :rtype: SplPriorityQueue 



log
+++

.. function:: log()


    Add a message as a log entry

    :param int: 
    :param mixed: 
    :param array|Traversable: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException if message can't be cast to string
    :throws: Exception\InvalidArgumentException if extra can't be iterated over
    :throws: Exception\RuntimeException if no log writer specified



emerg
+++++

.. function:: emerg()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



alert
+++++

.. function:: alert()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



crit
++++

.. function:: crit()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



err
+++

.. function:: err()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



warn
++++

.. function:: warn()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



notice
++++++

.. function:: notice()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



info
++++

.. function:: info()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



debug
+++++

.. function:: debug()


    @param string $message

    :param array|Traversable: 

    :rtype: Logger 



registerErrorHandler
++++++++++++++++++++

.. function:: registerErrorHandler()


    Register logging system as an error handler to log PHP errors


    :param Logger: 
    :param bool: 

    :rtype: mixed Returns result of set_error_handler

    :throws: Exception\InvalidArgumentException if logger is null



unregisterErrorHandler
++++++++++++++++++++++

.. function:: unregisterErrorHandler()


    Unregister error handler



registerExceptionHandler
++++++++++++++++++++++++

.. function:: registerExceptionHandler()


    Register logging system as an exception handler to log PHP exceptions


    :param Logger: 

    :rtype: bool 

    :throws: Exception\InvalidArgumentException if logger is null



unregisterExceptionHandler
++++++++++++++++++++++++++

.. function:: unregisterExceptionHandler()


    Unregister exception handler





Constants
---------

EMERG
+++++

@const int defined from the BSD Syslog message severities

ALERT
+++++

CRIT
++++

ERR
+++

WARN
++++

NOTICE
++++++

INFO
++++

DEBUG
+++++


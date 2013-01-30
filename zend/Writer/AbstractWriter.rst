.. Log/Writer/AbstractWriter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Log\\Writer\\AbstractWriter
=================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor
    
    Set options for an writer. Accepted options are:
    - filters: array of filters to add to this filter
    - formatter: formatter for this writer

    :param array|\Traversable: 

    :rtype: Logger 

    :throws: Exception\InvalidArgumentException 



addFilter
+++++++++

.. function:: addFilter()


    Add a filter specific to this writer.

    :param int|string|Filter\FilterInterface: 
    :param array|null: 

    :rtype: AbstractWriter 

    :throws: Exception\InvalidArgumentException 



getFilterPluginManager
++++++++++++++++++++++

.. function:: getFilterPluginManager()


    Get filter plugin manager

    :rtype: FilterPluginManager 



setFilterPluginManager
++++++++++++++++++++++

.. function:: setFilterPluginManager()


    Set filter plugin manager

    :param string|FilterPluginManager: 

    :rtype: self 

    :throws: Exception\InvalidArgumentException 



filterPlugin
++++++++++++

.. function:: filterPlugin()


    Get filter instance

    :param string: 
    :param array|null: 

    :rtype: Filter\FilterInterface 



getFormatterPluginManager
+++++++++++++++++++++++++

.. function:: getFormatterPluginManager()


    Get formatter plugin manager

    :rtype: FormatterPluginManager 



setFormatterPluginManager
+++++++++++++++++++++++++

.. function:: setFormatterPluginManager()


    Set formatter plugin manager

    :param string|FormatterPluginManager: 

    :rtype: self 

    :throws: Exception\InvalidArgumentException 



formatterPlugin
+++++++++++++++

.. function:: formatterPlugin()


    Get formatter instance

    :param string: 
    :param array|null: 

    :rtype: Formatter\FormatterInterface 



write
+++++

.. function:: write()


    Log a message to this writer.

    :param array: log data event

    :rtype: void 



setFormatter
++++++++++++

.. function:: setFormatter()


    Set a new formatter for this writer

    :param string|Formatter\FormatterInterface: 

    :rtype: self 

    :throws: Exception\InvalidArgumentException 



setConvertWriteErrorsToExceptions
+++++++++++++++++++++++++++++++++

.. function:: setConvertWriteErrorsToExceptions()


    Set convert write errors to exception flag

    :param bool: 



shutdown
++++++++

.. function:: shutdown()


    Perform shutdown activities such as closing open resources

    :rtype: void 



doWrite
+++++++

.. function:: doWrite()


    Write a message to the log

    :param array: log data event

    :rtype: void 




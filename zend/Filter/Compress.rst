.. Filter/Compress.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\Compress
======================

Compresses a given string

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Class constructor

    :param string|array|Traversable: (Optional) Options to set



setOptions
----------

.. function:: setOptions()


    Set filter setate

    :param array: 

    :throws Exception\InvalidArgumentException: if options is not an array or Traversable

    :rtype: Compress 



getAdapter
----------

.. function:: getAdapter()


    Returns the current adapter, instantiating it if necessary


    :rtype: Compress\CompressionAlgorithmInterface 



getAdapterName
--------------

.. function:: getAdapterName()


    Retrieve adapter name

    :rtype: string 



setAdapter
----------

.. function:: setAdapter()


    Sets compression adapter

    :param string|Compress\CompressionAlgorithmInterface: Adapter to use

    :rtype: Compress 

    :throws: Exception\InvalidArgumentException 



getAdapterOptions
-----------------

.. function:: getAdapterOptions()


    Retrieve adapter options

    :rtype: array 



setAdapterOptions
-----------------

.. function:: setAdapterOptions()


    Set adapter options

    :param array: 

    :rtype: Compress 



getOptions
----------

.. function:: getOptions()


    Get individual or all options from underlying adapter

    :param null|string: 

    :rtype: mixed 



__call
------

.. function:: __call()


    Calls adapter methods

    :param string: Method to call
    :param string|array: Options for this method

    :rtype: mixed 

    :throws: Exception\BadMethodCallException 



filter
------

.. function:: filter()


    Defined by Zend_Filter_Filter
    
    Compresses the content $value with the defined settings

    :param string: Content to compress

    :rtype: string The compressed content




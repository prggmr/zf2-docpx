.. /Filter/Compress.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Compress
**********************


Compresses a given string



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param string|array|Traversable $options: (Optional) Options to set



setOptions
----------

.. function:: setOptions($options)


    Set filter setate

    :param array $options: 

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

.. function:: setAdapter($adapter)


    Sets compression adapter

    :param string|Compress\CompressionAlgorithmInterface $adapter: Adapter to use

    :rtype: Compress 

    :throws: Exception\InvalidArgumentException 



getAdapterOptions
-----------------

.. function:: getAdapterOptions()


    Retrieve adapter options

    :rtype: array 



setAdapterOptions
-----------------

.. function:: setAdapterOptions($options)


    Set adapter options

    :param array $options: 

    :rtype: Compress 



getOptions
----------

.. function:: getOptions([$option = false])


    Get individual or all options from underlying adapter

    :param null|string $option: 

    :rtype: mixed 



__call
------

.. function:: __call($method, $options)


    Calls adapter methods

    :param string $method: Method to call
    :param string|array $options: Options for this method

    :rtype: mixed 

    :throws: Exception\BadMethodCallException 



filter
------

.. function:: filter($value)


    Defined by Zend_Filter_Filter
    
    Compresses the content $value with the defined settings

    :param string $value: Content to compress

    :rtype: string The compressed content






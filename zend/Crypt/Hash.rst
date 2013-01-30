.. Crypt/Hash.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Crypt\\Hash
=================

Methods
-------

compute
+++++++

.. function:: compute()


    @param  string  $hash

    :param string: 
    :param bool: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



getOutputSize
+++++++++++++

.. function:: getOutputSize()


    Get the output size according to the hash algorithm and the output format

    :param string: 
    :param bool: 

    :rtype: integer 



getSupportedAlgorithms
++++++++++++++++++++++

.. function:: getSupportedAlgorithms()


    Get the supported algorithm

    :rtype: array 



isSupported
+++++++++++

.. function:: isSupported()


    Is the hash algorithm supported?

    :param string: 

    :rtype: bool 



clearLastAlgorithmCache
+++++++++++++++++++++++

.. function:: clearLastAlgorithmCache()


    Clear the cache of last algorithm supported





Constants
---------

OUTPUT_STRING
+++++++++++++

OUTPUT_BINARY
+++++++++++++


.. Filter/Encrypt.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\Encrypt
=====================

Encrypts a given string

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param string|array|Traversable: (Optional) Options to set, if null mcrypt is used



getAdapter
++++++++++

.. function:: getAdapter()


    Returns the name of the set adapter

    :rtype: string 



setAdapter
++++++++++

.. function:: setAdapter()


    Sets new encryption options

    :param string|array: (Optional) Encryption options

    :rtype: Encrypt 

    :throws: Exception\DomainException 
    :throws: Exception\InvalidArgumentException 



__call
++++++

.. function:: __call()


    Calls adapter methods

    :param string: Method to call
    :param string|array: Options for this method

    :rtype: mixed 

    :throws: Exception\BadMethodCallException 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\Filter
    
    Encrypts the content $value with the defined settings

    :param string: Content to encrypt

    :rtype: string The encrypted content




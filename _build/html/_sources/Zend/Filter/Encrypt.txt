.. /Filter/Encrypt.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Encrypt
*********************


Encrypts a given string



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Class constructor

    :param string|array|Traversable $options: (Optional) Options to set, if null mcrypt is used



getAdapter
----------

.. function:: getAdapter()


    Returns the name of the set adapter

    :rtype: string 



setAdapter
----------

.. function:: setAdapter([$options = false])


    Sets new encryption options

    :param string|array $options: (Optional) Encryption options

    :rtype: Encrypt 

    :throws: Exception\DomainException 
    :throws: Exception\InvalidArgumentException 



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


    Defined by Zend\Filter\Filter
    
    Encrypts the content $value with the defined settings

    :param string $value: Content to encrypt

    :rtype: string The encrypted content






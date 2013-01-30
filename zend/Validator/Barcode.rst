.. Validator/Barcode.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Barcode
========================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor for barcodes

    :param array|string: Options to use



getAdapter
++++++++++

.. function:: getAdapter()


    Returns the set adapter

    :rtype: Barcode\AbstractAdapter 



setAdapter
++++++++++

.. function:: setAdapter()


    Sets a new barcode adapter

    :param string|Barcode\AbstractAdapter: Barcode adapter to use
    :param array: Options for this adapter

    :rtype: Barcode 

    :throws: Exception\InvalidArgumentException 



getChecksum
+++++++++++

.. function:: getChecksum()


    Returns the checksum option

    :rtype: string 



useChecksum
+++++++++++

.. function:: useChecksum()


    Sets if checksum should be validated, if no value is given the actual setting is returned

    :param bool: 

    :rtype: bool 



isValid
+++++++

.. function:: isValid()


    Defined by Zend\Validator\ValidatorInterface
    
    Returns true if and only if $value contains a valid barcode

    :param string: 

    :rtype: bool 





Constants
---------

INVALID
+++++++

FAILED
++++++

INVALID_CHARS
+++++++++++++

INVALID_LENGTH
++++++++++++++


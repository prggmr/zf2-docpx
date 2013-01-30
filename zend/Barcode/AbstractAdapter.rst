.. Validator/Barcode/AbstractAdapter.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Barcode\\AbstractAdapter
=========================================

Methods
-------

hasValidLength
++++++++++++++

.. function:: hasValidLength()


    Checks the length of a barcode

    :param string: The barcode to check for proper length

    :rtype: bool 



hasValidCharacters
++++++++++++++++++

.. function:: hasValidCharacters()


    Checks for allowed characters within the barcode

    :param string: The barcode to check for allowed characters

    :rtype: bool 



hasValidChecksum
++++++++++++++++

.. function:: hasValidChecksum()


    Validates the checksum

    :param string: The barcode to check the checksum for

    :rtype: bool 



getLength
+++++++++

.. function:: getLength()


    Returns the allowed barcode length

    :rtype: int|array 



getCharacters
+++++++++++++

.. function:: getCharacters()


    Returns the allowed characters

    :rtype: integer|string|array 



getChecksum
+++++++++++

.. function:: getChecksum()


    Returns the checksum function name



setChecksum
+++++++++++

.. function:: setChecksum()


    Sets the checksum validation method

    :param callable: Checksum method to call

    :rtype: AbstractAdapter 



useChecksum
+++++++++++

.. function:: useChecksum()


    Sets the checksum validation, if no value is given, the actual setting is returned

    :param bool: 

    :rtype: AbstractAdapter|bool 



setLength
+++++++++

.. function:: setLength()


    Sets the length of this barcode

    :param int|array: 

    :rtype: AbstractAdapter 



setCharacters
+++++++++++++

.. function:: setCharacters()


    Sets the allowed characters of this barcode

    :param integer: 

    :rtype: AbstractAdapter 



gtin
++++

.. function:: gtin()


    Validates the checksum (Modulo 10)
    GTIN implementation factor 3

    :param string: The barcode to validate

    :rtype: bool 



identcode
+++++++++

.. function:: identcode()


    Validates the checksum (Modulo 10)
    IDENTCODE implementation factors 9 and 4

    :param string: The barcode to validate

    :rtype: bool 



code25
++++++

.. function:: code25()


    Validates the checksum (Modulo 10)
    CODE25 implementation factor 3

    :param string: The barcode to validate

    :rtype: bool 



postnet
+++++++

.. function:: postnet()


    Validates the checksum ()
    POSTNET implementation

    :param string: The barcode to validate

    :rtype: bool 




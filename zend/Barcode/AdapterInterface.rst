.. Validator/Barcode/AdapterInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Validator\\Barcode\\hasValidLength
========================================

.. function:: Zend\Validator\Barcode\hasValidLength()


    Checks the length of a barcode

    :param string: The barcode to check for proper length

    :rtype: bool 



Function
********

Zend\\Validator\\Barcode\\hasValidCharacters
============================================

.. function:: Zend\Validator\Barcode\hasValidCharacters()


    Checks for allowed characters within the barcode

    :param string: The barcode to check for allowed characters

    :rtype: bool 



Function
********

Zend\\Validator\\Barcode\\hasValidChecksum
==========================================

.. function:: Zend\Validator\Barcode\hasValidChecksum()


    Validates the checksum

    :param string: The barcode to check the checksum for

    :rtype: bool 



Function
********

Zend\\Validator\\Barcode\\getLength
===================================

.. function:: Zend\Validator\Barcode\getLength()


    Returns the allowed barcode length

    :rtype: int|array 



Function
********

Zend\\Validator\\Barcode\\getCharacters
=======================================

.. function:: Zend\Validator\Barcode\getCharacters()


    Returns the allowed characters

    :rtype: integer|string|array 



Function
********

Zend\\Validator\\Barcode\\getChecksum
=====================================

.. function:: Zend\Validator\Barcode\getChecksum()


    Returns if barcode uses a checksum

    :rtype: bool 



Function
********

Zend\\Validator\\Barcode\\useChecksum
=====================================

.. function:: Zend\Validator\Barcode\useChecksum()


    Sets the checksum validation, if no value is given, the actual setting is returned

    :param bool: 

    :rtype: AbstractAdapter|bool 




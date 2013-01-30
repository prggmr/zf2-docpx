.. Validator/Barcode/Issn.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\Barcode\\Issn
==============================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor for this barcode adapter



hasValidCharacters
++++++++++++++++++

.. function:: hasValidCharacters()


    Allows X on length of 8 chars

    :param string: The barcode to check for allowed characters

    :rtype: bool 



hasValidChecksum
++++++++++++++++

.. function:: hasValidChecksum()


    Validates the checksum

    :param string: The barcode to check the checksum for

    :rtype: bool 



issn
++++

.. function:: issn()


    Validates the checksum ()
    ISSN implementation (reversed mod11)

    :param string: The barcode to validate

    :rtype: bool 




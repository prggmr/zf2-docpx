.. Barcode/Object/Code128.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Barcode\\Object\\Code128
==============================

Class for generate Code128 barcode

Methods
-------

calculateBarcodeWidth
+++++++++++++++++++++

.. function:: calculateBarcodeWidth()


    Width of the barcode (in pixels)

    :rtype: integer 



checkSpecificParams
+++++++++++++++++++

.. function:: checkSpecificParams()


    Partial check of code128 barcode

    :rtype: void 



prepareBarcode
++++++++++++++

.. function:: prepareBarcode()


    Prepare array to draw barcode

    :rtype: array 



_isDigit
++++++++

.. function:: _isDigit()


    Checks if the next $length chars of $string starting at $pos are numeric.
    Returns false if the end of the string is reached.

    :param string: String to search
    :param int: Starting position
    :param int: Length to search

    :rtype: bool 



convertToBarcodeChars
+++++++++++++++++++++

.. function:: convertToBarcodeChars()


    Convert string to barcode string

    :param string: 

    :rtype: array 



setText
+++++++

.. function:: setText()


    Set text to encode

    :param string: 

    :rtype: Code128 



getText
+++++++

.. function:: getText()


    Retrieve text to encode

    :rtype: string 



getChecksum
+++++++++++

.. function:: getChecksum()


    Get barcode checksum

    :param string: 

    :rtype: int 




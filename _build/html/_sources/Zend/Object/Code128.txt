.. /Barcode/Object/Code128.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\Code128
******************************


Class for generate Code128 barcode



Methods
=======

calculateBarcodeWidth
---------------------

.. function:: calculateBarcodeWidth()


    Width of the barcode (in pixels)

    :rtype: integer 



checkSpecificParams
-------------------

.. function:: checkSpecificParams()


    Partial check of code128 barcode

    :rtype: void 



prepareBarcode
--------------

.. function:: prepareBarcode()


    Prepare array to draw barcode

    :rtype: array 



_isDigit
--------

.. function:: _isDigit($string, $pos, [$length = 2])


    Checks if the next $length chars of $string starting at $pos are numeric.
    Returns false if the end of the string is reached.

    :param string $string: String to search
    :param int $pos: Starting position
    :param int $length: Length to search

    :rtype: bool 



convertToBarcodeChars
---------------------

.. function:: convertToBarcodeChars($string)


    Convert string to barcode string

    :param string $string: 

    :rtype: array 



setText
-------

.. function:: setText($value)


    Set text to encode

    :param string $value: 

    :rtype: Code128 



getText
-------

.. function:: getText()


    Retrieve text to encode

    :rtype: string 



getChecksum
-----------

.. function:: getChecksum($text)


    Get barcode checksum

    :param string $text: 

    :rtype: int 






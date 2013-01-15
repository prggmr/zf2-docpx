.. /Barcode/Object/Code39.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\Code39
*****************************


Class for generate Code39 barcode



Methods
=======

checkSpecificParams
-------------------

.. function:: checkSpecificParams()


    Partial check of Code39 barcode

    :rtype: void 



calculateBarcodeWidth
---------------------

.. function:: calculateBarcodeWidth()


    Width of the barcode (in pixels)

    :rtype: int 



setText
-------

.. function:: setText($value)


    Set text to encode

    :param string $value: 

    :rtype: Code39 



getText
-------

.. function:: getText()


    Retrieve text to display

    :rtype: string 



getTextToDisplay
----------------

.. function:: getTextToDisplay()


    Retrieve text to display

    :rtype: string 



prepareBarcode
--------------

.. function:: prepareBarcode()


    Prepare array to draw barcode

    :rtype: array 



getChecksum
-----------

.. function:: getChecksum($text)


    Get barcode checksum

    :param string $text: 

    :rtype: int 






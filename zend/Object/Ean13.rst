.. /Barcode/Object/Ean13.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\Ean13
****************************


Class for generate Ean13 barcode



Methods
=======

getDefaultOptions
-----------------

.. function:: getDefaultOptions()


    Default options for Postnet barcode

    :rtype: void 



calculateBarcodeWidth
---------------------

.. function:: calculateBarcodeWidth()


    Width of the barcode (in pixels)

    :rtype: integer 



checkSpecificParams
-------------------

.. function:: checkSpecificParams()


    Partial check of interleaved EAN/UPC barcode

    :rtype: void 



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



drawText
--------

.. function:: drawText()


    Partial function to draw text

    :rtype: void 



drawEan13Text
-------------

.. function:: drawEan13Text()






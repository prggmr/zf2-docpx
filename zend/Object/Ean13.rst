.. Barcode/Object/Ean13.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Object\\Ean13
============================

Class for generate Ean13 barcode

Methods
-------

getDefaultOptions
+++++++++++++++++

.. function:: getDefaultOptions()


    Default options for Postnet barcode

    :rtype: void 



calculateBarcodeWidth
+++++++++++++++++++++

.. function:: calculateBarcodeWidth()


    Width of the barcode (in pixels)

    :rtype: integer 



checkSpecificParams
+++++++++++++++++++

.. function:: checkSpecificParams()


    Partial check of interleaved EAN/UPC barcode

    :rtype: void 



prepareBarcode
++++++++++++++

.. function:: prepareBarcode()


    Prepare array to draw barcode

    :rtype: array 



getChecksum
+++++++++++

.. function:: getChecksum()


    Get barcode checksum

    :param string: 

    :rtype: int 



drawText
++++++++

.. function:: drawText()


    Partial function to draw text

    :rtype: void 



drawEan13Text
+++++++++++++

.. function:: drawEan13Text()




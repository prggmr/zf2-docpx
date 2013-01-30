.. Barcode/Object/Postnet.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Object\\Postnet
==============================

Class for generate Postnet barcode

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


    Partial check of interleaved Postnet barcode

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




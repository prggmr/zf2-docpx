.. Barcode/Object/Ean5.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Object\\Ean5
===========================

Class for generate Ean5 barcode

Methods
-------

getDefaultOptions
+++++++++++++++++

.. function:: getDefaultOptions()


    Default options for Ean5 barcode

    :rtype: void 



calculateBarcodeWidth
+++++++++++++++++++++

.. function:: calculateBarcodeWidth()


    Width of the barcode (in pixels)

    :rtype: integer 



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



getParity
+++++++++

.. function:: getParity()



getText
+++++++

.. function:: getText()


    Retrieve text to encode

    :rtype: string 




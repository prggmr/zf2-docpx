.. /Barcode/Object/Ean5.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\Ean5
***************************


Class for generate Ean5 barcode



Methods
=======

getDefaultOptions
-----------------

.. function:: getDefaultOptions()


    Default options for Ean5 barcode

    :rtype: void 



calculateBarcodeWidth
---------------------

.. function:: calculateBarcodeWidth()


    Width of the barcode (in pixels)

    :rtype: integer 



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



getParity
---------

.. function:: getParity($i)



getText
-------

.. function:: getText()


    Retrieve text to encode

    :rtype: string 






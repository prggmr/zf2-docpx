.. /Barcode/Object/Ean8.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\Ean8
***************************


Class for generate Ean8 barcode



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



prepareBarcode
--------------

.. function:: prepareBarcode()


    Prepare array to draw barcode

    :rtype: array 



drawText
--------

.. function:: drawText()


    Partial function to draw text

    :rtype: void 



validateSpecificText
--------------------

.. function:: validateSpecificText($value, [$options = false])


    Particular validation for Ean8 barcode objects
    (to suppress checksum character substitution)

    :param string $value: 
    :param array $options: 

    :throws Exception\BarcodeValidationException: 






.. Barcode/Object/Upce.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Barcode\\Object\\Upce
===========================

Class for generate UpcA barcode

Methods
-------

getDefaultOptions
+++++++++++++++++

.. function:: getDefaultOptions()


    Default options for Postnet barcode

    :rtype: void 



getText
+++++++

.. function:: getText()


    Retrieve text to encode

    :rtype: string 



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



drawText
++++++++

.. function:: drawText()


    Partial function to draw text

    :rtype: void 



validateSpecificText
++++++++++++++++++++

.. function:: validateSpecificText()


    Particular validation for Upce barcode objects
    (to suppress checksum character substitution)

    :param string: 
    :param array: 

    :throws Exception\BarcodeValidationException: 



getChecksum
+++++++++++

.. function:: getChecksum()


    Get barcode checksum

    :param string: 

    :rtype: int 




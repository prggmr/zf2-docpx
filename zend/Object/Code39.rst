.. Barcode/Object/Code39.php generated using docpx on 01/30/13 03:32am


Zend\\Barcode\\Object\\Code39
=============================

Class for generate Code39 barcode

Methods
+++++++

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

.. function:: setText()


    Set text to encode

    :param string: 

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

.. function:: getChecksum()


    Get barcode checksum

    :param string: 

    :rtype: int 




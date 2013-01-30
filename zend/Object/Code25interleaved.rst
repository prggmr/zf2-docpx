.. Barcode/Object/Code25interleaved.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Object\\Code25interleaved
========================================

Class for generate Interleaved 2 of 5 barcode

Methods
-------

getDefaultOptions
+++++++++++++++++

.. function:: getDefaultOptions()


    Default options for Code25interleaved barcode

    :rtype: void 



setWithBearerBars
+++++++++++++++++

.. function:: setWithBearerBars()


    Activate/deactivate drawing of bearer bars

    :param bool: 

    :rtype: Code25 



getWithBearerBars
+++++++++++++++++

.. function:: getWithBearerBars()


    Retrieve if bearer bars are enabled

    :rtype: bool 



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



postDrawBarcode
+++++++++++++++

.. function:: postDrawBarcode()


    Drawing of bearer bars (if enabled)

    :rtype: void 




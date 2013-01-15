.. /Barcode/Object/Error.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\Error
****************************


Class for generate Barcode



Methods
=======

validateText
------------

.. function:: validateText($value)


    All texts are accepted

    :param string $value: 

    :rtype: bool 



getHeight
---------

.. function:: getHeight([$recalculate = false])


    Height is forced

    :param bool $recalculate: 

    :rtype: integer 



getWidth
--------

.. function:: getWidth([$recalculate = false])


    Width is forced

    :param bool $recalculate: 

    :rtype: integer 



draw
----

.. function:: draw()


    Reset precedent instructions
    and draw the error message

    :rtype: array 



prepareBarcode
--------------

.. function:: prepareBarcode()


    For compatibility reason

    :rtype: void 



checkSpecificParams
-------------------

.. function:: checkSpecificParams()


    For compatibility reason

    :rtype: void 



calculateBarcodeWidth
---------------------

.. function:: calculateBarcodeWidth()


    For compatibility reason

    :rtype: void 






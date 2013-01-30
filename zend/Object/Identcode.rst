.. Barcode/Object/Identcode.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Object\\Identcode
================================

Class for generate Identcode barcode

Methods
-------

getDefaultOptions
+++++++++++++++++

.. function:: getDefaultOptions()


    Default options for Identcode barcode

    :rtype: void 



getTextToDisplay
++++++++++++++++

.. function:: getTextToDisplay()


    Retrieve text to display

    :rtype: string 



validateText
++++++++++++

.. function:: validateText()


    Check allowed characters

    :param string: 

    :rtype: string @throw  Exception



getChecksum
+++++++++++

.. function:: getChecksum()


    Get barcode checksum

    :param string: 

    :rtype: int 




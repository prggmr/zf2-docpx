.. /Barcode/Object/Identcode.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\Identcode
********************************


Class for generate Identcode barcode



Methods
=======

getDefaultOptions
-----------------

.. function:: getDefaultOptions()


    Default options for Identcode barcode

    :rtype: void 



getTextToDisplay
----------------

.. function:: getTextToDisplay()


    Retrieve text to display

    :rtype: string 



validateText
------------

.. function:: validateText($value)


    Check allowed characters

    :param string $value: 

    :rtype: string @throw  Exception



getChecksum
-----------

.. function:: getChecksum($text)


    Get barcode checksum

    :param string $text: 

    :rtype: int 






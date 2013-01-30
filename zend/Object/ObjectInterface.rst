.. Barcode/Object/ObjectInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Barcode\\Object\\__construct
==================================

.. function:: Zend\Barcode\Object\__construct()


    Constructor

    :param array|\Traversable: 



Function
********

Zend\\Barcode\\Object\\setOptions
=================================

.. function:: Zend\Barcode\Object\setOptions()


    Set barcode state from options array

    :param array: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\setBarcodeNamespace
==========================================

.. function:: Zend\Barcode\Object\setBarcodeNamespace()


    Set barcode namespace for autoloading

    :param string: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getBarcodeNamespace
==========================================

.. function:: Zend\Barcode\Object\getBarcodeNamespace()


    Retrieve barcode namespace

    :rtype: string 



Function
********

Zend\\Barcode\\Object\\getType
==============================

.. function:: Zend\Barcode\Object\getType()


    Retrieve type of barcode

    :rtype: string 



Function
********

Zend\\Barcode\\Object\\setBarHeight
===================================

.. function:: Zend\Barcode\Object\setBarHeight()


    Set height of the barcode bar

    :param integer: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getBarHeight
===================================

.. function:: Zend\Barcode\Object\getBarHeight()


    Get height of the barcode bar

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\setBarThinWidth
======================================

.. function:: Zend\Barcode\Object\setBarThinWidth()


    Set thickness of thin bar

    :param integer: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getBarThinWidth
======================================

.. function:: Zend\Barcode\Object\getBarThinWidth()


    Get thickness of thin bar

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\setBarThickWidth
=======================================

.. function:: Zend\Barcode\Object\setBarThickWidth()


    Set thickness of thick bar

    :param integer: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getBarThickWidth
=======================================

.. function:: Zend\Barcode\Object\getBarThickWidth()


    Get thickness of thick bar

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\setFactor
================================

.. function:: Zend\Barcode\Object\setFactor()


    Set factor applying to
    thinBarWidth - thickBarWidth - barHeight - fontSize

    :param integer: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getFactor
================================

.. function:: Zend\Barcode\Object\getFactor()


    Get factor applying to
    thinBarWidth - thickBarWidth - barHeight - fontSize

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\setForeColor
===================================

.. function:: Zend\Barcode\Object\setForeColor()


    Set color of the barcode and text

    :param string: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getForeColor
===================================

.. function:: Zend\Barcode\Object\getForeColor()


    Retrieve color of the barcode and text

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\setBackgroundColor
=========================================

.. function:: Zend\Barcode\Object\setBackgroundColor()


    Set the color of the background

    :param integer: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getBackgroundColor
=========================================

.. function:: Zend\Barcode\Object\getBackgroundColor()


    Retrieve background color of the image

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\setWithBorder
====================================

.. function:: Zend\Barcode\Object\setWithBorder()


    Activate/deactivate drawing of the bar

    :param bool: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getWithBorder
====================================

.. function:: Zend\Barcode\Object\getWithBorder()


    Retrieve if border are draw or not

    :rtype: bool 



Function
********

Zend\\Barcode\\Object\\setReverseColor
======================================

.. function:: Zend\Barcode\Object\setReverseColor()


    Allow fast inversion of font/bars color and background color

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\setOrientation
=====================================

.. function:: Zend\Barcode\Object\setOrientation()


    Set orientation of barcode and text

    :param float: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getOrientation
=====================================

.. function:: Zend\Barcode\Object\getOrientation()


    Retrieve orientation of barcode and text

    :rtype: float 



Function
********

Zend\\Barcode\\Object\\setText
==============================

.. function:: Zend\Barcode\Object\setText()


    Set text to encode

    :param string: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getText
==============================

.. function:: Zend\Barcode\Object\getText()


    Retrieve text to encode

    :rtype: string 



Function
********

Zend\\Barcode\\Object\\getRawText
=================================

.. function:: Zend\Barcode\Object\getRawText()


    Retrieve text to encode

    :rtype: string 



Function
********

Zend\\Barcode\\Object\\getTextToDisplay
=======================================

.. function:: Zend\Barcode\Object\getTextToDisplay()


    Retrieve text to display

    :rtype: string 



Function
********

Zend\\Barcode\\Object\\setDrawText
==================================

.. function:: Zend\Barcode\Object\setDrawText()


    Activate/deactivate drawing of text to encode

    :param bool: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getDrawText
==================================

.. function:: Zend\Barcode\Object\getDrawText()


    Retrieve if drawing of text to encode is enabled

    :rtype: bool 



Function
********

Zend\\Barcode\\Object\\setStretchText
=====================================

.. function:: Zend\Barcode\Object\setStretchText()


    Activate/deactivate the adjustment of the position
    of the characters to the position of the bars

    :param bool: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getStretchText
=====================================

.. function:: Zend\Barcode\Object\getStretchText()


    Retrieve if the adjustment of the position of the characters
    to the position of the bars is enabled

    :rtype: bool 



Function
********

Zend\\Barcode\\Object\\setWithChecksum
======================================

.. function:: Zend\Barcode\Object\setWithChecksum()


    Activate/deactivate the automatic generation
    of the checksum character
    added to the barcode text

    :param bool: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getWithChecksum
======================================

.. function:: Zend\Barcode\Object\getWithChecksum()


    Retrieve if the checksum character is automatically
    added to the barcode text

    :rtype: bool 



Function
********

Zend\\Barcode\\Object\\setWithChecksumInText
============================================

.. function:: Zend\Barcode\Object\setWithChecksumInText()


    Activate/deactivate the automatic generation
    of the checksum character
    added to the barcode text

    :param bool: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getWithChecksumInText
============================================

.. function:: Zend\Barcode\Object\getWithChecksumInText()


    Retrieve if the checksum character is automatically
    added to the barcode text

    :rtype: bool 



Function
********

Zend\\Barcode\\Object\\setFont
==============================

.. function:: Zend\Barcode\Object\setFont()


    Set the font:
     - if integer between 1 and 5, use gd built-in fonts
     - if string, $value is assumed to be the path to a TTF font

    :param integer|string: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getFont
==============================

.. function:: Zend\Barcode\Object\getFont()


    Retrieve the font

    :rtype: integer|string 



Function
********

Zend\\Barcode\\Object\\setFontSize
==================================

.. function:: Zend\Barcode\Object\setFontSize()


    Set the size of the font in case of TTF

    :param float: 

    :rtype: ObjectInterface 



Function
********

Zend\\Barcode\\Object\\getFontSize
==================================

.. function:: Zend\Barcode\Object\getFontSize()


    Retrieve the size of the font in case of TTF

    :rtype: float 



Function
********

Zend\\Barcode\\Object\\getQuietZone
===================================

.. function:: Zend\Barcode\Object\getQuietZone()


    Quiet zone before first bar
    and after the last bar

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\getInstructions
======================================

.. function:: Zend\Barcode\Object\getInstructions()


    Retrieve the set of drawing instructions

    :rtype: array 



Function
********

Zend\\Barcode\\Object\\checkParams
==================================

.. function:: Zend\Barcode\Object\checkParams()


    Checking of parameters after all settings

    :rtype: void 



Function
********

Zend\\Barcode\\Object\\getHeight
================================

.. function:: Zend\Barcode\Object\getHeight()


    Get height of the result object

    :param bool: 

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\getWidth
===============================

.. function:: Zend\Barcode\Object\getWidth()


    Get width of the result object

    :param bool: 

    :rtype: integer 



Function
********

Zend\\Barcode\\Object\\getOffsetLeft
====================================

.. function:: Zend\Barcode\Object\getOffsetLeft()


    Calculate the offset from the left of the object
    if an orientation is activated

    :param bool: 

    :rtype: float 



Function
********

Zend\\Barcode\\Object\\getOffsetTop
===================================

.. function:: Zend\Barcode\Object\getOffsetTop()


    Calculate the offset from the top of the object
    if an orientation is activated

    :param bool: 

    :rtype: float 



Function
********

Zend\\Barcode\\Object\\draw
===========================

.. function:: Zend\Barcode\Object\draw()


    Complete drawing of the barcode

    :rtype: array Table of instructions



Function
********

Zend\\Barcode\\Object\\validateText
===================================

.. function:: Zend\Barcode\Object\validateText()


    Check for invalid characters

    :param string: Text to be checked

    :rtype: void 




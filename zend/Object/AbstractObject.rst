.. Barcode/Object/AbstractObject.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Barcode\\Object\\AbstractObject
=====================================

Class for generate Barcode

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|Traversable: 



getDefaultOptions
+++++++++++++++++

.. function:: getDefaultOptions()


    Set default options for particular object

    :rtype: void 



setOptions
++++++++++

.. function:: setOptions()


    Set barcode state from options array

    :param array: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



setBarcodeNamespace
+++++++++++++++++++

.. function:: setBarcodeNamespace()


    Set barcode namespace for autoloading

    :param string: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getBarcodeNamespace
+++++++++++++++++++

.. function:: getBarcodeNamespace()


    Retrieve barcode namespace

    :rtype: string 



getType
+++++++

.. function:: getType()


    Retrieve type of barcode

    :rtype: string 



setBarHeight
++++++++++++

.. function:: setBarHeight()


    Set height of the barcode bar

    :param integer: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBarHeight
++++++++++++

.. function:: getBarHeight()


    Get height of the barcode bar

    :rtype: integer 



setBarThinWidth
+++++++++++++++

.. function:: setBarThinWidth()


    Set thickness of thin bar

    :param integer: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBarThinWidth
+++++++++++++++

.. function:: getBarThinWidth()


    Get thickness of thin bar

    :rtype: integer 



setBarThickWidth
++++++++++++++++

.. function:: setBarThickWidth()


    Set thickness of thick bar

    :param integer: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBarThickWidth
++++++++++++++++

.. function:: getBarThickWidth()


    Get thickness of thick bar

    :rtype: integer 



setFactor
+++++++++

.. function:: setFactor()


    Set factor applying to
    thinBarWidth - thickBarWidth - barHeight - fontSize

    :param float: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getFactor
+++++++++

.. function:: getFactor()


    Get factor applying to
    thinBarWidth - thickBarWidth - barHeight - fontSize

    :rtype: integer 



setForeColor
++++++++++++

.. function:: setForeColor()


    Set color of the barcode and text

    :param string: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getForeColor
++++++++++++

.. function:: getForeColor()


    Retrieve color of the barcode and text

    :rtype: integer 



setBackgroundColor
++++++++++++++++++

.. function:: setBackgroundColor()


    Set the color of the background

    :param integer: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBackgroundColor
++++++++++++++++++

.. function:: getBackgroundColor()


    Retrieve background color of the image

    :rtype: integer 



setWithBorder
+++++++++++++

.. function:: setWithBorder()


    Activate/deactivate drawing of the bar

    :param bool: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getWithBorder
+++++++++++++

.. function:: getWithBorder()


    Retrieve if border are draw or not

    :rtype: bool 



setWithQuietZones
+++++++++++++++++

.. function:: setWithQuietZones()


    Activate/deactivate drawing of the quiet zones

    :param bool: 

    :rtype: AbstractObject 



getWithQuietZones
+++++++++++++++++

.. function:: getWithQuietZones()


    Retrieve if quiet zones are draw or not

    :rtype: bool 



setReverseColor
+++++++++++++++

.. function:: setReverseColor()


    Allow fast inversion of font/bars color and background color

    :rtype: \Zend\Barcode\Object\ObjectInterface 



setOrientation
++++++++++++++

.. function:: setOrientation()


    Set orientation of barcode and text

    :param float: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getOrientation
++++++++++++++

.. function:: getOrientation()


    Retrieve orientation of barcode and text

    :rtype: float 



setText
+++++++

.. function:: setText()


    Set text to encode

    :param string: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getText
+++++++

.. function:: getText()


    Retrieve text to encode

    :rtype: string 



addLeadingZeros
+++++++++++++++

.. function:: addLeadingZeros()


    Automatically add leading zeros if barcode length is fixed

    :param string: 
    :param bool: 

    :rtype: string 



getRawText
++++++++++

.. function:: getRawText()


    Retrieve text to encode

    :rtype: string 



getTextToDisplay
++++++++++++++++

.. function:: getTextToDisplay()


    Retrieve text to display

    :rtype: string 



setDrawText
+++++++++++

.. function:: setDrawText()


    Activate/deactivate drawing of text to encode

    :param bool: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getDrawText
+++++++++++

.. function:: getDrawText()


    Retrieve if drawing of text to encode is enabled

    :rtype: bool 



setStretchText
++++++++++++++

.. function:: setStretchText()


    Activate/deactivate the adjustment of the position
    of the characters to the position of the bars

    :param bool: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getStretchText
++++++++++++++

.. function:: getStretchText()


    Retrieve if the adjustment of the position of the characters
    to the position of the bars is enabled

    :rtype: bool 



setWithChecksum
+++++++++++++++

.. function:: setWithChecksum()


    Activate/deactivate the automatic generation
    of the checksum character
    added to the barcode text

    :param bool: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getWithChecksum
+++++++++++++++

.. function:: getWithChecksum()


    Retrieve if the checksum character is automatically
    added to the barcode text

    :rtype: bool 



setWithChecksumInText
+++++++++++++++++++++

.. function:: setWithChecksumInText()


    Activate/deactivate the automatic generation
    of the checksum character
    added to the barcode text

    :param bool: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getWithChecksumInText
+++++++++++++++++++++

.. function:: getWithChecksumInText()


    Retrieve if the checksum character is automatically
    added to the barcode text

    :rtype: bool 



setFont
+++++++

.. function:: setFont()


    Set the font:
     - if integer between 1 and 5, use gd built-in fonts
     - if string, $value is assumed to be the path to a TTF font

    :param integer|string: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getFont
+++++++

.. function:: getFont()


    Retrieve the font

    :rtype: integer|string 



setFontSize
+++++++++++

.. function:: setFontSize()


    Set the size of the font in case of TTF

    :param float: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getFontSize
+++++++++++

.. function:: getFontSize()


    Retrieve the size of the font in case of TTF

    :rtype: float 



getQuietZone
++++++++++++

.. function:: getQuietZone()


    Quiet zone before first bar
    and after the last bar

    :rtype: integer 



addInstruction
++++++++++++++

.. function:: addInstruction()


    Add an instruction in the array of instructions

    :param array: 



getInstructions
+++++++++++++++

.. function:: getInstructions()


    Retrieve the set of drawing instructions

    :rtype: array 



addPolygon
++++++++++

.. function:: addPolygon()


    Add a polygon drawing instruction in the set of instructions

    :param array: 
    :param integer: 
    :param bool: 



addText
+++++++

.. function:: addText()


    Add a text drawing instruction in the set of instructions

    :param string: 
    :param float: 
    :param array: 
    :param string: 
    :param integer: 
    :param string: 
    :param float: 



checkParams
+++++++++++

.. function:: checkParams()


    Checking of parameters after all settings

    :rtype: bool 



checkText
+++++++++

.. function:: checkText()


    Check if a text is really provided to barcode

    :rtype: void @throw \Zend\Barcode\Object\Exception\ExceptionInterface



checkRatio
++++++++++

.. function:: checkRatio()


    Check the ratio between the thick and the thin bar

    :param integer: 
    :param integer: 

    :rtype: void @throw \Zend\Barcode\Object\Exception\ExceptionInterface



checkFontAndOrientation
+++++++++++++++++++++++

.. function:: checkFontAndOrientation()


    Drawing with an angle is just allow TTF font

    :rtype: void @throw \Zend\Barcode\Object\Exception\ExceptionInterface



calculateWidth
++++++++++++++

.. function:: calculateWidth()


    Width of the result image
    (before any rotation)

    :rtype: integer 



calculateBarcodeWidth
+++++++++++++++++++++

.. function:: calculateBarcodeWidth()


    Calculate the width of the barcode

    :rtype: integer 



calculateHeight
+++++++++++++++

.. function:: calculateHeight()


    Height of the result object

    :rtype: integer 



calculateBarcodeHeight
++++++++++++++++++++++

.. function:: calculateBarcodeHeight()


    Height of the barcode

    :rtype: integer 



getHeight
+++++++++

.. function:: getHeight()


    Get height of the result object

    :param bool: 

    :rtype: integer 



getWidth
++++++++

.. function:: getWidth()


    Get width of the result object

    :param bool: 

    :rtype: integer 



getOffsetLeft
+++++++++++++

.. function:: getOffsetLeft()


    Calculate the offset from the left of the object
    if an orientation is activated

    :param bool: 

    :rtype: float 



getOffsetTop
++++++++++++

.. function:: getOffsetTop()


    Calculate the offset from the top of the object
    if an orientation is activated

    :param bool: 

    :rtype: float 



rotate
++++++

.. function:: rotate()


    Apply rotation on a point in X/Y dimensions

    :param float: x-position before rotation
    :param float: y-position before rotation

    :rtype: array Array of two elements corresponding to the new XY point



draw
++++

.. function:: draw()


    Complete drawing of the barcode

    :rtype: array Table of instructions



drawBarcode
+++++++++++

.. function:: drawBarcode()


    Draw the barcode

    :rtype: void 



drawBorder
++++++++++

.. function:: drawBorder()


    Partial function to draw border

    :rtype: void 



drawText
++++++++

.. function:: drawText()


    Partial function to draw text

    :rtype: void 



validateText
++++++++++++

.. function:: validateText()


    Check for invalid characters

    :param string: Text to be checked

    :rtype: void 



validateSpecificText
++++++++++++++++++++

.. function:: validateSpecificText()


    Standard validation for most of barcode objects

    :param string: 
    :param array: 



prepareBarcode
++++++++++++++

.. function:: prepareBarcode()


    Each child must prepare the barcode and return
    a table like array(
        0 => array(
            0 => int (visible(black) or not(white))
            1 => int (width of the bar)
            2 => float (0->1 position from the top of the beginning of the bar in %)
            3 => float (0->1 position from the top of the end of the bar in %)
        ),
        1 => ...
    )

    :rtype: array 



checkSpecificParams
+++++++++++++++++++

.. function:: checkSpecificParams()


    Checking of parameters after all settings

    :rtype: void 



preDrawBarcode
++++++++++++++

.. function:: preDrawBarcode()


    Allow each child to draw something else

    :rtype: void 



postDrawBarcode
+++++++++++++++

.. function:: postDrawBarcode()


    Allow each child to draw something else
    (ex: bearer bars in interleaved 2 of 5 code)

    :rtype: void 




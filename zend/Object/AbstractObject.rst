.. /Barcode/Object/AbstractObject.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Object\\AbstractObject
*************************************


Class for generate Barcode



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param array|Traversable $options: 



getDefaultOptions
-----------------

.. function:: getDefaultOptions()


    Set default options for particular object

    :rtype: void 



setOptions
----------

.. function:: setOptions($options)


    Set barcode state from options array

    :param array $options: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



setBarcodeNamespace
-------------------

.. function:: setBarcodeNamespace($namespace)


    Set barcode namespace for autoloading

    :param string $namespace: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getBarcodeNamespace
-------------------

.. function:: getBarcodeNamespace()


    Retrieve barcode namespace

    :rtype: string 



getType
-------

.. function:: getType()


    Retrieve type of barcode

    :rtype: string 



setBarHeight
------------

.. function:: setBarHeight($value)


    Set height of the barcode bar

    :param integer $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBarHeight
------------

.. function:: getBarHeight()


    Get height of the barcode bar

    :rtype: integer 



setBarThinWidth
---------------

.. function:: setBarThinWidth($value)


    Set thickness of thin bar

    :param integer $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBarThinWidth
---------------

.. function:: getBarThinWidth()


    Get thickness of thin bar

    :rtype: integer 



setBarThickWidth
----------------

.. function:: setBarThickWidth($value)


    Set thickness of thick bar

    :param integer $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBarThickWidth
----------------

.. function:: getBarThickWidth()


    Get thickness of thick bar

    :rtype: integer 



setFactor
---------

.. function:: setFactor($value)


    Set factor applying to
    thinBarWidth - thickBarWidth - barHeight - fontSize

    :param float $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getFactor
---------

.. function:: getFactor()


    Get factor applying to
    thinBarWidth - thickBarWidth - barHeight - fontSize

    :rtype: integer 



setForeColor
------------

.. function:: setForeColor($value)


    Set color of the barcode and text

    :param string $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getForeColor
------------

.. function:: getForeColor()


    Retrieve color of the barcode and text

    :rtype: integer 



setBackgroundColor
------------------

.. function:: setBackgroundColor($value)


    Set the color of the background

    :param integer $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getBackgroundColor
------------------

.. function:: getBackgroundColor()


    Retrieve background color of the image

    :rtype: integer 



setWithBorder
-------------

.. function:: setWithBorder($value)


    Activate/deactivate drawing of the bar

    :param bool $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getWithBorder
-------------

.. function:: getWithBorder()


    Retrieve if border are draw or not

    :rtype: bool 



setWithQuietZones
-----------------

.. function:: setWithQuietZones($value)


    Activate/deactivate drawing of the quiet zones

    :param bool $value: 

    :rtype: AbstractObject 



getWithQuietZones
-----------------

.. function:: getWithQuietZones()


    Retrieve if quiet zones are draw or not

    :rtype: bool 



setReverseColor
---------------

.. function:: setReverseColor()


    Allow fast inversion of font/bars color and background color

    :rtype: \Zend\Barcode\Object\ObjectInterface 



setOrientation
--------------

.. function:: setOrientation($value)


    Set orientation of barcode and text

    :param float $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getOrientation
--------------

.. function:: getOrientation()


    Retrieve orientation of barcode and text

    :rtype: float 



setText
-------

.. function:: setText($value)


    Set text to encode

    :param string $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getText
-------

.. function:: getText()


    Retrieve text to encode

    :rtype: string 



addLeadingZeros
---------------

.. function:: addLeadingZeros($text, [$withoutChecksum = false])


    Automatically add leading zeros if barcode length is fixed

    :param string $text: 
    :param bool $withoutChecksum: 

    :rtype: string 



getRawText
----------

.. function:: getRawText()


    Retrieve text to encode

    :rtype: string 



getTextToDisplay
----------------

.. function:: getTextToDisplay()


    Retrieve text to display

    :rtype: string 



setDrawText
-----------

.. function:: setDrawText($value)


    Activate/deactivate drawing of text to encode

    :param bool $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getDrawText
-----------

.. function:: getDrawText()


    Retrieve if drawing of text to encode is enabled

    :rtype: bool 



setStretchText
--------------

.. function:: setStretchText($value)


    Activate/deactivate the adjustment of the position
    of the characters to the position of the bars

    :param bool $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getStretchText
--------------

.. function:: getStretchText()


    Retrieve if the adjustment of the position of the characters
    to the position of the bars is enabled

    :rtype: bool 



setWithChecksum
---------------

.. function:: setWithChecksum($value)


    Activate/deactivate the automatic generation
    of the checksum character
    added to the barcode text

    :param bool $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface 



getWithChecksum
---------------

.. function:: getWithChecksum()


    Retrieve if the checksum character is automatically
    added to the barcode text

    :rtype: bool 



setWithChecksumInText
---------------------

.. function:: setWithChecksumInText($value)


    Activate/deactivate the automatic generation
    of the checksum character
    added to the barcode text

    :param bool $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getWithChecksumInText
---------------------

.. function:: getWithChecksumInText()


    Retrieve if the checksum character is automatically
    added to the barcode text

    :rtype: bool 



setFont
-------

.. function:: setFont($value)


    Set the font:
     - if integer between 1 and 5, use gd built-in fonts
     - if string, $value is assumed to be the path to a TTF font

    :param integer|string $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getFont
-------

.. function:: getFont()


    Retrieve the font

    :rtype: integer|string 



setFontSize
-----------

.. function:: setFontSize($value)


    Set the size of the font in case of TTF

    :param float $value: 

    :rtype: \Zend\Barcode\Object\ObjectInterface @throw \Zend\Barcode\Object\Exception\ExceptionInterface



getFontSize
-----------

.. function:: getFontSize()


    Retrieve the size of the font in case of TTF

    :rtype: float 



getQuietZone
------------

.. function:: getQuietZone()


    Quiet zone before first bar
    and after the last bar

    :rtype: integer 



addInstruction
--------------

.. function:: addInstruction($instruction)


    Add an instruction in the array of instructions

    :param array $instruction: 



getInstructions
---------------

.. function:: getInstructions()


    Retrieve the set of drawing instructions

    :rtype: array 



addPolygon
----------

.. function:: addPolygon($points, [$color = false, [$filled = true]])


    Add a polygon drawing instruction in the set of instructions

    :param array $points: 
    :param integer $color: 
    :param bool $filled: 



addText
-------

.. function:: addText($text, $size, $position, $font, $color, [$alignment = "center", [$orientation = false]])


    Add a text drawing instruction in the set of instructions

    :param string $text: 
    :param float $size: 
    :param array $position: 
    :param string $font: 
    :param integer $color: 
    :param string $alignment: 
    :param float $orientation: 



checkParams
-----------

.. function:: checkParams()


    Checking of parameters after all settings

    :rtype: bool 



checkText
---------

.. function:: checkText([$value = false])


    Check if a text is really provided to barcode

    :rtype: void @throw \Zend\Barcode\Object\Exception\ExceptionInterface



checkRatio
----------

.. function:: checkRatio([$min = 2, [$max = 3]])


    Check the ratio between the thick and the thin bar

    :param integer $min: 
    :param integer $max: 

    :rtype: void @throw \Zend\Barcode\Object\Exception\ExceptionInterface



checkFontAndOrientation
-----------------------

.. function:: checkFontAndOrientation()


    Drawing with an angle is just allow TTF font

    :rtype: void @throw \Zend\Barcode\Object\Exception\ExceptionInterface



calculateWidth
--------------

.. function:: calculateWidth()


    Width of the result image
    (before any rotation)

    :rtype: integer 



calculateBarcodeWidth
---------------------

.. function:: calculateBarcodeWidth()


    Calculate the width of the barcode

    :rtype: integer 



calculateHeight
---------------

.. function:: calculateHeight()


    Height of the result object

    :rtype: integer 



calculateBarcodeHeight
----------------------

.. function:: calculateBarcodeHeight()


    Height of the barcode

    :rtype: integer 



getHeight
---------

.. function:: getHeight([$recalculate = false])


    Get height of the result object

    :param bool $recalculate: 

    :rtype: integer 



getWidth
--------

.. function:: getWidth([$recalculate = false])


    Get width of the result object

    :param bool $recalculate: 

    :rtype: integer 



getOffsetLeft
-------------

.. function:: getOffsetLeft([$recalculate = false])


    Calculate the offset from the left of the object
    if an orientation is activated

    :param bool $recalculate: 

    :rtype: float 



getOffsetTop
------------

.. function:: getOffsetTop([$recalculate = false])


    Calculate the offset from the top of the object
    if an orientation is activated

    :param bool $recalculate: 

    :rtype: float 



rotate
------

.. function:: rotate($x1, $y1)


    Apply rotation on a point in X/Y dimensions

    :param float $x1: x-position before rotation
    :param float $y1: y-position before rotation

    :rtype: array Array of two elements corresponding to the new XY point



draw
----

.. function:: draw()


    Complete drawing of the barcode

    :rtype: array Table of instructions



drawBarcode
-----------

.. function:: drawBarcode()


    Draw the barcode

    :rtype: void 



drawBorder
----------

.. function:: drawBorder()


    Partial function to draw border

    :rtype: void 



drawText
--------

.. function:: drawText()


    Partial function to draw text

    :rtype: void 



validateText
------------

.. function:: validateText($value)


    Check for invalid characters

    :param string $value: Text to be checked

    :rtype: void 



validateSpecificText
--------------------

.. function:: validateSpecificText($value, [$options = false])


    Standard validation for most of barcode objects

    :param string $value: 
    :param array $options: 



prepareBarcode
--------------

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
-------------------

.. function:: checkSpecificParams()


    Checking of parameters after all settings

    :rtype: void 



preDrawBarcode
--------------

.. function:: preDrawBarcode()


    Allow each child to draw something else

    :rtype: void 



postDrawBarcode
---------------

.. function:: postDrawBarcode()


    Allow each child to draw something else
    (ex: bearer bars in interleaved 2 of 5 code)

    :rtype: void 






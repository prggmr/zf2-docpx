.. /Barcode/Renderer/Svg.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Renderer\\Svg
****************************


Class for rendering the barcode as svg



Methods
=======

setHeight
---------

.. function:: setHeight($value)


    Set height of the result image

    :param null|integer $value: 

    :throws Exception\OutOfRangeException: 

    :rtype: Svg 



getHeight
---------

.. function:: getHeight()


    Get barcode height

    :rtype: int 



setWidth
--------

.. function:: setWidth($value)


    Set barcode width

    :param mixed $value: 

    :throws Exception\OutOfRangeException: 

    :rtype: self 



getWidth
--------

.. function:: getWidth()


    Get barcode width

    :rtype: int 



setResource
-----------

.. function:: setResource($svg)


    Set an image resource to draw the barcode inside

    :param DOMDocument $svg: 

    :rtype: Svg 



initRenderer
------------

.. function:: initRenderer()


    Initialize the image resource

    :rtype: void 



readRootElement
---------------

.. function:: readRootElement()



appendRootElement
-----------------

.. function:: appendRootElement($tagName, [$attributes = false, [$textContent = false]])


    Append a new DOMElement to the root element

    :param string $tagName: 
    :param array $attributes: 
    :param string $textContent: 



createElement
-------------

.. function:: createElement($tagName, [$attributes = false, [$textContent = false]])


    Create DOMElement

    :param string $tagName: 
    :param array $attributes: 
    :param string $textContent: 

    :rtype: DOMElement 



checkSpecificParams
-------------------

.. function:: checkSpecificParams()


    Check barcode parameters

    :rtype: void 



checkDimensions
---------------

.. function:: checkDimensions()


    Check barcode dimensions


    :rtype: void 



draw
----

.. function:: draw()


    Draw the barcode in the rendering resource

    :rtype: mixed 



render
------

.. function:: render()


    Draw and render the barcode with correct headers

    :rtype: mixed 



drawPolygon
-----------

.. function:: drawPolygon($points, $color, [$filled = true])


    Draw a polygon in the svg resource

    :param array $points: 
    :param integer $color: 
    :param bool $filled: 



drawText
--------

.. function:: drawText($text, $size, $position, $font, $color, [$alignment = "center", [$orientation = false]])


    Draw a polygon in the svg resource

    :param string $text: 
    :param float $size: 
    :param array $position: 
    :param string $font: 
    :param integer $color: 
    :param string $alignment: 
    :param float $orientation: 






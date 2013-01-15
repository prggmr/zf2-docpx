.. /Barcode/Renderer/Image.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Renderer\\Image
******************************


Class for rendering the barcode as image



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param array|\Traversable $options: 

    :throws RendererCreationException: 



setHeight
---------

.. function:: setHeight($value)


    Set height of the result image

    :param null|integer $value: 

    :throws Exception\OutOfRangeException: 

    :rtype: Image 



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

.. function:: setResource($image)


    Set an image resource to draw the barcode inside

    :param resource $image: 

    :rtype: Image 

    :throws: Exception\InvalidArgumentException 



setImageType
------------

.. function:: setImageType($value)


    Set the image type to produce (png, jpeg, gif)

    :param string $value: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Image 



getImageType
------------

.. function:: getImageType()


    Retrieve the image type to produce

    :rtype: string 



initRenderer
------------

.. function:: initRenderer()


    Initialize the image resource

    :rtype: void 



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



render
------

.. function:: render()


    Draw and render the barcode with correct headers

    :rtype: mixed 



drawPolygon
-----------

.. function:: drawPolygon($points, $color, [$filled = true])


    Draw a polygon in the image resource

    :param array $points: 
    :param integer $color: 
    :param bool $filled: 



drawText
--------

.. function:: drawText($text, $size, $position, $font, $color, [$alignment = "center", [$orientation = false]])


    Draw a polygon in the image resource

    :param string $text: 
    :param float $size: 
    :param array $position: 
    :param string $font: 
    :param integer $color: 
    :param string $alignment: 
    :param float $orientation: 

    :throws Exception\RuntimeException: 






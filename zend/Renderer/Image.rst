.. Barcode/Renderer/Image.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Renderer\\Image
==============================

Class for rendering the barcode as image

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|\Traversable: 

    :throws RendererCreationException: 



setHeight
+++++++++

.. function:: setHeight()


    Set height of the result image

    :param null|integer: 

    :throws Exception\OutOfRangeException: 

    :rtype: Image 



getHeight
+++++++++

.. function:: getHeight()


    Get barcode height

    :rtype: int 



setWidth
++++++++

.. function:: setWidth()


    Set barcode width

    :param mixed: 

    :throws Exception\OutOfRangeException: 

    :rtype: self 



getWidth
++++++++

.. function:: getWidth()


    Get barcode width

    :rtype: int 



setResource
+++++++++++

.. function:: setResource()


    Set an image resource to draw the barcode inside

    :param resource: 

    :rtype: Image 

    :throws: Exception\InvalidArgumentException 



setImageType
++++++++++++

.. function:: setImageType()


    Set the image type to produce (png, jpeg, gif)

    :param string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Image 



getImageType
++++++++++++

.. function:: getImageType()


    Retrieve the image type to produce

    :rtype: string 



initRenderer
++++++++++++

.. function:: initRenderer()


    Initialize the image resource

    :rtype: void 



checkSpecificParams
+++++++++++++++++++

.. function:: checkSpecificParams()


    Check barcode parameters

    :rtype: void 



checkDimensions
+++++++++++++++

.. function:: checkDimensions()


    Check barcode dimensions


    :rtype: void 



render
++++++

.. function:: render()


    Draw and render the barcode with correct headers

    :rtype: mixed 



drawPolygon
+++++++++++

.. function:: drawPolygon()


    Draw a polygon in the image resource

    :param array: 
    :param integer: 
    :param bool: 



drawText
++++++++

.. function:: drawText()


    Draw a polygon in the image resource

    :param string: 
    :param float: 
    :param array: 
    :param string: 
    :param integer: 
    :param string: 
    :param float: 

    :throws Exception\RuntimeException: 




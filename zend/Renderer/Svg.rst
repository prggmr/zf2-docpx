.. Barcode/Renderer/Svg.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Renderer\\Svg
============================

Class for rendering the barcode as svg

Methods
-------

setHeight
+++++++++

.. function:: setHeight()


    Set height of the result image

    :param null|integer: 

    :throws Exception\OutOfRangeException: 

    :rtype: Svg 



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

    :param DOMDocument: 

    :rtype: Svg 



initRenderer
++++++++++++

.. function:: initRenderer()


    Initialize the image resource

    :rtype: void 



readRootElement
+++++++++++++++

.. function:: readRootElement()



appendRootElement
+++++++++++++++++

.. function:: appendRootElement()


    Append a new DOMElement to the root element

    :param string: 
    :param array: 
    :param string: 



createElement
+++++++++++++

.. function:: createElement()


    Create DOMElement

    :param string: 
    :param array: 
    :param string: 

    :rtype: DOMElement 



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



draw
++++

.. function:: draw()


    Draw the barcode in the rendering resource

    :rtype: mixed 



render
++++++

.. function:: render()


    Draw and render the barcode with correct headers

    :rtype: mixed 



drawPolygon
+++++++++++

.. function:: drawPolygon()


    Draw a polygon in the svg resource

    :param array: 
    :param integer: 
    :param bool: 



drawText
++++++++

.. function:: drawText()


    Draw a polygon in the svg resource

    :param string: 
    :param float: 
    :param array: 
    :param string: 
    :param integer: 
    :param string: 
    :param float: 




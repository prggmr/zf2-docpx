.. Barcode/Renderer/Pdf.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Barcode\\Renderer\\Pdf
============================

Class for rendering the barcode in PDF resource

Methods
-------

setResource
+++++++++++

.. function:: setResource()


    Set a PDF resource to draw the barcode inside

    :param PdfDocument: 
    :param integer: 

    :rtype: Pdf 



checkSpecificParams
+++++++++++++++++++

.. function:: checkSpecificParams()


    Check renderer parameters

    :rtype: void 



render
++++++

.. function:: render()


    Draw the barcode in the PDF, send headers and the PDF

    :rtype: mixed 



initRenderer
++++++++++++

.. function:: initRenderer()


    Initialize the PDF resource

    :rtype: void 



drawPolygon
+++++++++++

.. function:: drawPolygon()


    Draw a polygon in the rendering resource

    :param array: 
    :param integer: 
    :param bool: 



drawText
++++++++

.. function:: drawText()


    Draw a polygon in the rendering resource

    :param string: 
    :param float: 
    :param array: 
    :param string: 
    :param integer: 
    :param string: 
    :param float: 



widthForStringUsingFontSize
+++++++++++++++++++++++++++

.. function:: widthForStringUsingFontSize()


    Calculate the width of a string:
    in case of using alignment parameter in drawText

    :param string: 
    :param Font: 
    :param float: 

    :rtype: float 




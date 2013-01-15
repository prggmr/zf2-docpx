.. /Barcode/Renderer/Pdf.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Renderer\\Pdf
****************************


Class for rendering the barcode in PDF resource



Methods
=======

setResource
-----------

.. function:: setResource($pdf, [$page = false])


    Set a PDF resource to draw the barcode inside

    :param PdfDocument $pdf: 
    :param integer $page: 

    :rtype: Pdf 



checkSpecificParams
-------------------

.. function:: checkSpecificParams()


    Check renderer parameters

    :rtype: void 



render
------

.. function:: render()


    Draw the barcode in the PDF, send headers and the PDF

    :rtype: mixed 



initRenderer
------------

.. function:: initRenderer()


    Initialize the PDF resource

    :rtype: void 



drawPolygon
-----------

.. function:: drawPolygon($points, $color, [$filled = true])


    Draw a polygon in the rendering resource

    :param array $points: 
    :param integer $color: 
    :param bool $filled: 



drawText
--------

.. function:: drawText($text, $size, $position, $font, $color, [$alignment = "center", [$orientation = false]])


    Draw a polygon in the rendering resource

    :param string $text: 
    :param float $size: 
    :param array $position: 
    :param string $font: 
    :param integer $color: 
    :param string $alignment: 
    :param float $orientation: 



widthForStringUsingFontSize
---------------------------

.. function:: widthForStringUsingFontSize($text, $font, $fontSize)


    Calculate the width of a string:
    in case of using alignment parameter in drawText

    :param string $text: 
    :param Font $font: 
    :param float $fontSize: 

    :rtype: float 






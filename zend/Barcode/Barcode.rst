.. /Barcode/Barcode.php generated using docpx on 01/15/13 05:29pm


Zend\\Barcode\\Barcode
**********************


Class for generate Barcode



Methods
=======

getObjectPluginManager
----------------------

.. function:: getObjectPluginManager()


    Get the parser plugin manager

    :rtype: ObjectPluginManager 



getRendererPluginManager
------------------------

.. function:: getRendererPluginManager()


    Get the renderer plugin manager

    :rtype: RendererPluginManager 



factory
-------

.. function:: factory($barcode, [$renderer = "image", [$barcodeConfig = false, [$rendererConfig = false, [$automaticRenderError = true]]]])


    Factory for Zend_Barcode classes.
    
    First argument may be a string containing the base of the adapter class
    name, e.g. 'int25' corresponds to class Object\Int25.  This
    is case-insensitive.
    
    First argument may alternatively be an object of type Traversable.
    The barcode class base name is read from the 'barcode' property.
    The barcode config parameters are read from the 'params' property.
    
    Second argument is optional and may be an associative array of key-value
    pairs.  This is used as the argument to the barcode constructor.
    
    If the first argument is of type Traversable, it is assumed to contain
    all parameters, and the second argument is ignored.

    :param mixed $barcode: String name of barcode class, or Traversable object.
    :param mixed $renderer: String name of renderer class
    :param mixed $barcodeConfig: OPTIONAL; an array or Traversable object with barcode parameters.
    :param mixed $rendererConfig: OPTIONAL; an array or Traversable object with renderer parameters.
    :param bool $automaticRenderError: OPTIONAL; set the automatic rendering of exception

    :rtype: Barcode 

    :throws: Exception\ExceptionInterface 



makeBarcode
-----------

.. function:: makeBarcode($barcode, [$barcodeConfig = false])


    Barcode Constructor

    :param mixed $barcode: String name of barcode class, or Traversable object, or barcode object.
    :param mixed $barcodeConfig: OPTIONAL; an array or Traversable object with barcode parameters.

    :throws Exception\InvalidArgumentException: 

    :rtype: Object 



makeRenderer
------------

.. function:: makeRenderer([$renderer = "image", [$rendererConfig = false]])


    Renderer Constructor

    :param mixed $renderer: String name of renderer class, or Traversable object.
    :param mixed $rendererConfig: OPTIONAL; an array or Traversable object with renderer parameters.

    :throws Exception\RendererCreationException: 

    :rtype: Renderer\RendererInterface 



render
------

.. function:: render($barcode, $renderer, [$barcodeConfig = false, [$rendererConfig = false]])


    Proxy to renderer render() method

    :param string |: Object\ObjectInterface | array | Traversable $barcode
    :param string |: Renderer\RendererInterface $renderer
    :param array |: Traversable $barcodeConfig
    :param array |: Traversable $rendererConfig



draw
----

.. function:: draw($barcode, $renderer, [$barcodeConfig = false, [$rendererConfig = false]])


    Proxy to renderer draw() method

    :param string |: Object\ObjectInterface | array | Traversable $barcode
    :param string |: Renderer\RendererInterface $renderer
    :param array |: Traversable $barcodeConfig
    :param array |: Traversable $rendererConfig

    :rtype: mixed 



setBarcodeFont
--------------

.. function:: setBarcodeFont($font)


    Set the default font for new instances of barcode

    :param string $font: 

    :rtype: void 



getBarcodeFont
--------------

.. function:: getBarcodeFont()


    Get current default font

    :rtype: string 






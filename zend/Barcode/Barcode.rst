.. Barcode/Barcode.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Barcode\\Barcode
======================

Class for generate Barcode

Methods
-------

getObjectPluginManager
++++++++++++++++++++++

.. function:: getObjectPluginManager()


    Get the parser plugin manager

    :rtype: ObjectPluginManager 



getRendererPluginManager
++++++++++++++++++++++++

.. function:: getRendererPluginManager()


    Get the renderer plugin manager

    :rtype: RendererPluginManager 



factory
+++++++

.. function:: factory()


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

    :param mixed: String name of barcode class, or Traversable object.
    :param mixed: String name of renderer class
    :param mixed: OPTIONAL; an array or Traversable object with barcode parameters.
    :param mixed: OPTIONAL; an array or Traversable object with renderer parameters.
    :param bool: OPTIONAL; set the automatic rendering of exception

    :rtype: Barcode 

    :throws: Exception\ExceptionInterface 



makeBarcode
+++++++++++

.. function:: makeBarcode()


    Barcode Constructor

    :param mixed: String name of barcode class, or Traversable object, or barcode object.
    :param mixed: OPTIONAL; an array or Traversable object with barcode parameters.

    :throws Exception\InvalidArgumentException: 

    :rtype: Object 



makeRenderer
++++++++++++

.. function:: makeRenderer()


    Renderer Constructor

    :param mixed: String name of renderer class, or Traversable object.
    :param mixed: OPTIONAL; an array or Traversable object with renderer parameters.

    :throws Exception\RendererCreationException: 

    :rtype: Renderer\RendererInterface 



render
++++++

.. function:: render()


    Proxy to renderer render() method

    :param string: Object\ObjectInterface | array | Traversable $barcode
    :param string: Renderer\RendererInterface $renderer
    :param array: Traversable $barcodeConfig
    :param array: Traversable $rendererConfig



draw
++++

.. function:: draw()


    Proxy to renderer draw() method

    :param string: Object\ObjectInterface | array | Traversable $barcode
    :param string: Renderer\RendererInterface $renderer
    :param array: Traversable $barcodeConfig
    :param array: Traversable $rendererConfig

    :rtype: mixed 



setBarcodeFont
++++++++++++++

.. function:: setBarcodeFont()


    Set the default font for new instances of barcode

    :param string: 

    :rtype: void 



getBarcodeFont
++++++++++++++

.. function:: getBarcodeFont()


    Get current default font

    :rtype: string 




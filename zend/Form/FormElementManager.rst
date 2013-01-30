.. Form/FormElementManager.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Form\\FormElementManager
==============================

Plugin manager implementation for form elements.

Enforces that elements retrieved are instances of ElementInterface.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    @param ConfigInterface $configuration



injectFactory
+++++++++++++

.. function:: injectFactory()


    Inject the factory to any element that implements FormFactoryAwareInterface

    :param $element: 



validatePlugin
++++++++++++++

.. function:: validatePlugin()


    Validate the plugin
    
    Checks that the element is an instance of ElementInterface

    :param mixed: 

    :throws Exception\InvalidElementException: 

    :rtype: void 




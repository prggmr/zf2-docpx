.. Filter/StaticFilter.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\StaticFilter
==========================

Methods
-------

setPluginManager
++++++++++++++++

.. function:: setPluginManager()


    Set plugin manager for resolving filter classes

    :param FilterPluginManager: 

    :rtype: void 



getPluginManager
++++++++++++++++

.. function:: getPluginManager()


    Get plugin manager for loading filter classes

    :rtype: FilterPluginManager 



execute
+++++++

.. function:: execute()


    Returns a value filtered through a specified filter class, without requiring separate
    instantiation of the filter object.
    
    The first argument of this method is a data input value, that you would have filtered.
    The second argument is a string, which corresponds to the basename of the filter class,
    relative to the Zend_Filter namespace. This method automatically loads the class,
    creates an instance, and applies the filter() method to the data input. You can also pass
    an array of constructor arguments, if they are needed for the filter class.

    :param mixed: 
    :param string: 
    :param array: OPTIONAL

    :rtype: mixed 

    :throws: Exception\ExceptionInterface 




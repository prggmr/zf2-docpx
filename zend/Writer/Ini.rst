.. Config/Writer/Ini.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Config\\Writer\\Ini
=========================

Methods
-------

setNestSeparator
++++++++++++++++

.. function:: setNestSeparator()


    Set nest separator.

    :param string: 

    :rtype: self 



getNestSeparator
++++++++++++++++

.. function:: getNestSeparator()


    Get nest separator.

    :rtype: string 



setRenderWithoutSectionsFlags
+++++++++++++++++++++++++++++

.. function:: setRenderWithoutSectionsFlags()


    Set if rendering should occur without sections or not.
    
    If set to true, the INI file is rendered without sections completely
    into the global namespace of the INI file.

    :param bool: 

    :rtype: Ini 



shouldRenderWithoutSections
+++++++++++++++++++++++++++

.. function:: shouldRenderWithoutSections()


    Return whether the writer should render without sections.

    :rtype: bool 



processConfig
+++++++++++++

.. function:: processConfig()


    processConfig(): defined by AbstractWriter.

    :param array: 

    :rtype: string 



addBranch
+++++++++

.. function:: addBranch()


    Add a branch to an INI string recursively.

    :param array: 
    :param array: 

    :rtype: string 



prepareValue
++++++++++++

.. function:: prepareValue()


    Prepare a value for INI.

    :param mixed: 

    :rtype: string 

    :throws: Exception\RuntimeException 



sortRootElements
++++++++++++++++

.. function:: sortRootElements()


    Root elements that are not assigned to any section needs to be on the
    top of config.

    :param array: 

    :rtype: array 




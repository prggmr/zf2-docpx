.. /Config/Writer/Ini.php generated using docpx on 01/15/13 05:29pm


Zend\\Config\\Writer\\Ini
*************************


@category   Zend



Methods
=======

setNestSeparator
----------------

.. function:: setNestSeparator($separator)


    Set nest separator.

    :param string $separator: 

    :rtype: self 



getNestSeparator
----------------

.. function:: getNestSeparator()


    Get nest separator.

    :rtype: string 



setRenderWithoutSectionsFlags
-----------------------------

.. function:: setRenderWithoutSectionsFlags($withoutSections)


    Set if rendering should occur without sections or not.
    
    If set to true, the INI file is rendered without sections completely
    into the global namespace of the INI file.

    :param bool $withoutSections: 

    :rtype: Ini 



shouldRenderWithoutSections
---------------------------

.. function:: shouldRenderWithoutSections()


    Return whether the writer should render without sections.

    :rtype: bool 



processConfig
-------------

.. function:: processConfig($config)


    processConfig(): defined by AbstractWriter.

    :param array $config: 

    :rtype: string 



addBranch
---------

.. function:: addBranch($config, [$parents = false])


    Add a branch to an INI string recursively.

    :param array $config: 
    :param array $parents: 

    :rtype: string 



prepareValue
------------

.. function:: prepareValue($value)


    Prepare a value for INI.

    :param mixed $value: 

    :rtype: string 

    :throws: Exception\RuntimeException 



sortRootElements
----------------

.. function:: sortRootElements($config)


    Root elements that are not assigned to any section needs to be on the
    top of config.

    :param array $config: 

    :rtype: array 






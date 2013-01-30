.. Filter/File/Rename.php generated using docpx on 01/30/13 03:32am


Zend\\Filter\\File\\Rename
==========================

Methods
+++++++

__construct
-----------

.. function:: __construct()


    Class constructor
    
    Options argument may be either a string, a Zend_Config object, or an array.
    If an array or Zend_Config object, it accepts the following keys:
    'source'    => Source filename or directory which will be renamed
    'target'    => Target filename or directory, the new name of the source file
    'overwrite' => Shall existing files be overwritten ?
    'randomize' => Shall target files have a random postfix attached?

    :param string|array|Traversable: Target file or directory to be renamed

    :throws Exception\InvalidArgumentException: 



getFile
-------

.. function:: getFile()


    Returns the files to rename and their new name and location

    :rtype: array 



setFile
-------

.. function:: setFile()


    Sets a new file or directory as target, deleting existing ones
    
    Array accepts the following keys:
    'source'    => Source filename or directory which will be renamed
    'target'    => Target filename or directory, the new name of the sourcefile
    'overwrite' => Shall existing files be overwritten?
    'randomize' => Shall target files have a random postfix attached?

    :param string|array: Old file or directory to be rewritten

    :rtype: \Zend\Filter\File\Rename 



addFile
-------

.. function:: addFile()


    Adds a new file or directory as target to the existing ones
    
    Array accepts the following keys:
    'source'    => Source filename or directory which will be renamed
    'target'    => Target filename or directory, the new name of the sourcefile
    'overwrite' => Shall existing files be overwritten?
    'randomize' => Shall target files have a random postfix attached?

    :param string|array: Old file or directory to be rewritten

    :rtype: Rename 

    :throws: Exception\InvalidArgumentException 



getNewName
----------

.. function:: getNewName()


    Returns only the new filename without moving it
    But existing files will be erased when the overwrite option is true

    :param string: Full path of file to change
    :param bool: Return internal informations

    :rtype: string The new filename which has been set

    :throws: Exception\InvalidArgumentException If the target file already exists.



filter
------

.. function:: filter()


    Defined by Zend\Filter\Filter
    
    Renames the file $value to the new name set before
    Returns the file $value, removing all but digit characters

    :param string|array: Full path of file to change or $_FILES data array

    :throws Exception\RuntimeException: 

    :rtype: string|array The new filename which has been set



_convertOptions
---------------

.. function:: _convertOptions()


    Internal method for creating the file array
    Supports single and nested arrays

    :param array: 

    :rtype: array 



_getFileName
------------

.. function:: _getFileName()


    Internal method to resolve the requested source
    and return all other related parameters

    :param string: Filename to get the informations for

    :rtype: array|string 




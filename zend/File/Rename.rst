.. /Filter/File/Rename.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\File\\Rename
**************************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct($options)


    Class constructor
    
    Options argument may be either a string, a Zend_Config object, or an array.
    If an array or Zend_Config object, it accepts the following keys:
    'source'    => Source filename or directory which will be renamed
    'target'    => Target filename or directory, the new name of the source file
    'overwrite' => Shall existing files be overwritten ?

    :param string|array|Traversable $options: Target file or directory to be renamed

    :throws Exception\InvalidArgumentException: 



getFile
-------

.. function:: getFile()


    Returns the files to rename and their new name and location

    :rtype: array 



setFile
-------

.. function:: setFile($options)


    Sets a new file or directory as target, deleting existing ones
    
    Array accepts the following keys:
    'source'    => Source filename or directory which will be renamed
    'target'    => Target filename or directory, the new name of the sourcefile
    'overwrite' => Shall existing files be overwritten ?

    :param string|array $options: Old file or directory to be rewritten

    :rtype: \Zend\Filter\File\Rename 



addFile
-------

.. function:: addFile($options)


    Adds a new file or directory as target to the existing ones
    
    Array accepts the following keys:
    'source'    => Source filename or directory which will be renamed
    'target'    => Target filename or directory, the new name of the sourcefile
    'overwrite' => Shall existing files be overwritten ?

    :param string|array $options: Old file or directory to be rewritten

    :rtype: Rename 

    :throws: Exception\InvalidArgumentException 



getNewName
----------

.. function:: getNewName($value, [$source = false])


    Returns only the new filename without moving it
    But existing files will be erased when the overwrite option is true

    :param string $value: Full path of file to change
    :param bool $source: Return internal informations

    :rtype: string The new filename which has been set

    :throws: Exception\InvalidArgumentException If the target file already exists.



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\Filter
    
    Renames the file $value to the new name set before
    Returns the file $value, removing all but digit characters

    :param string $value: Full path of file to change

    :throws Exception\RuntimeException: 

    :rtype: string The new filename which has been set, or false when there were errors



_convertOptions
---------------

.. function:: _convertOptions($options)


    Internal method for creating the file array
    Supports single and nested arrays

    :param array $options: 

    :rtype: array 



_getFileName
------------

.. function:: _getFileName($file)


    Internal method to resolve the requested source
    and return all other related parameters

    :param string $file: Filename to get the informations for

    :rtype: array|string 






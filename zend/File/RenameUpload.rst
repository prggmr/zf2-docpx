.. Filter/File/RenameUpload.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\File\\RenameUpload
================================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Constructor

    :param array|string: The target file path or an options array



setTarget
+++++++++

.. function:: setTarget()


    @param  string $target Target file path or directory

    :rtype: RenameUpload 



getTarget
+++++++++

.. function:: getTarget()


    @return string Target file path or directory



setUseUploadName
++++++++++++++++

.. function:: setUseUploadName()


    @param  boolean $flag When true, this filter will use the $_FILES['name']
                          as the target filename.
                          Otherwise, it uses the default 'target' rules.

    :rtype: RenameUpload 



getUseUploadName
++++++++++++++++

.. function:: getUseUploadName()


    @return boolean



setOverwrite
++++++++++++

.. function:: setOverwrite()


    @param  boolean $flag Shall existing files be overwritten?

    :rtype: RenameUpload 



getOverwrite
++++++++++++

.. function:: getOverwrite()


    @return boolean



setRandomize
++++++++++++

.. function:: setRandomize()


    @param  boolean $flag Shall target files have a random postfix attached?

    :rtype: RenameUpload 



getRandomize
++++++++++++

.. function:: getRandomize()


    @return boolean



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\Filter
    
    Renames the file $value to the new name set before
    Returns the file $value, removing all but digit characters

    :param string|array: Full path of file to change or $_FILES data array

    :throws Exception\RuntimeException: 

    :rtype: string|array The new filename which has been set, or false when there were errors



checkFileExists
+++++++++++++++

.. function:: checkFileExists()


    @param  string $targetFile Target file path




getFinalTarget
++++++++++++++

.. function:: getFinalTarget()


    @param  array $uploadData $_FILES array

    :rtype: string 



applyRandomToFilename
+++++++++++++++++++++

.. function:: applyRandomToFilename()


    @param  string $filename

    :rtype: string 




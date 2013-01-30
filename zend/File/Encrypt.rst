.. Filter/File/Encrypt.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Filter\\File\\Encrypt
===========================

Encrypts a given file and stores the encrypted file content

Methods
-------

getFilename
+++++++++++

.. function:: getFilename()


    Returns the new filename where the content will be stored

    :rtype: string 



setFilename
+++++++++++

.. function:: setFilename()


    Sets the new filename where the content will be stored

    :param string: (Optional) New filename to set

    :rtype: Encrypt 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\Filter
    
    Encrypts the file $value with the defined settings

    :param string|array: Full path of file to change or $_FILES data array

    :rtype: string|array The filename which has been set, or false when there were errors

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 




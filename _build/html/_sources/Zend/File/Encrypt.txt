.. /Filter/File/Encrypt.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\File\\Encrypt
***************************


Encrypts a given file and stores the encrypted file content



Methods
=======

getFilename
-----------

.. function:: getFilename()


    Returns the new filename where the content will be stored

    :rtype: string 



setFilename
-----------

.. function:: setFilename([$filename = false])


    Sets the new filename where the content will be stored

    :param string $filename: (Optional) New filename to set

    :rtype: Encrypt 



filter
------

.. function:: filter($value)


    Defined by Zend\Filter\Filter
    
    Encrypts the file $value with the defined settings

    :param string $value: Full path of file to change

    :rtype: string The filename which has been set, or false when there were errors

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 






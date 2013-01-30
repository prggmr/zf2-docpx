.. Filter/File/Decrypt.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Filter\\File\\Decrypt
===========================

Decrypts a given file and stores the decrypted file content

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

    :rtype: Decrypt 



filter
++++++

.. function:: filter()


    Defined by Zend\Filter\FilterInterface
    
    Decrypts the file $value with the defined settings

    :param string|array: Full path of file to change or $_FILES data array

    :rtype: string|array The filename which has been set

    :throws: Exception\InvalidArgumentException 
    :throws: Exception\RuntimeException 




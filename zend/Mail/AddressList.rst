.. Mail/AddressList.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Mail\\AddressList
=======================

Methods
-------

add
+++

.. function:: add()


    Add an address to the list

    :param string|Address\AddressInterface: 
    :param null|string: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AddressList 



addMany
+++++++

.. function:: addMany()


    Add many addresses at once
    
    If an email key is provided, it will be used as the email, and the value
    as the name. Otherwise, the value is passed as the sole argument to add(),
    and, as such, can be either email strings or Address\AddressInterface objects.

    :param array: 

    :throws Exception\RuntimeException: 

    :rtype: AddressList 



merge
+++++

.. function:: merge()


    Merge another address list into this one

    :param AddressList: 

    :rtype: AddressList 



has
+++

.. function:: has()


    Does the email exist in this list?

    :param string: 

    :rtype: bool 



get
+++

.. function:: get()


    Get an address by email

    :param string: 

    :rtype: bool|Address\AddressInterface 



delete
++++++

.. function:: delete()


    Delete an address from the list

    :param string: 

    :rtype: bool 



count
+++++

.. function:: count()


    Return count of addresses

    :rtype: int 



rewind
++++++

.. function:: rewind()


    Rewind iterator

    :rtype: mixed the value of the first addresses element, or false if the addresses is
empty.

    :see:  



current
+++++++

.. function:: current()


    Return current item in iteration

    :rtype: Address 



key
+++

.. function:: key()


    Return key of current item of iteration

    :rtype: string 



next
++++

.. function:: next()


    Move to next item

    :rtype: mixed the addresses value in the next place that's pointed to by the
internal array pointer, or false if there are no more elements.

    :see:  



valid
+++++

.. function:: valid()


    Is the current item of iteration valid?

    :rtype: bool 



createAddress
+++++++++++++

.. function:: createAddress()


    Create an address object

    :param string: 
    :param string|null: 

    :rtype: Address 




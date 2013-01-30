.. View/Helper/Placeholder/Registry.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Placeholder\\Registry
=========================================

Registry for placeholder containers

Methods
-------

getRegistry
+++++++++++

.. function:: getRegistry()


    Retrieve or create registry instance

    :rtype: Registry 



unsetRegistry
+++++++++++++

.. function:: unsetRegistry()


    Unset the singleton
    
    Primarily useful for testing purposes; sets {@link $instance} to null.

    :rtype: void 



createContainer
+++++++++++++++

.. function:: createContainer()


    createContainer

    :param string: 
    :param array: 

    :rtype: Container\AbstractContainer 



getContainer
++++++++++++

.. function:: getContainer()


    Retrieve a placeholder container

    :param string: 

    :rtype: Container\AbstractContainer 



containerExists
+++++++++++++++

.. function:: containerExists()


    Does a particular container exist?

    :param string: 

    :rtype: bool 



setContainer
++++++++++++

.. function:: setContainer()


    Set the container for an item in the registry

    :param string: 
    :param Container\AbstractContainer: 

    :rtype: Registry 



deleteContainer
+++++++++++++++

.. function:: deleteContainer()


    Delete a container

    :param string: 

    :rtype: bool 



setContainerClass
+++++++++++++++++

.. function:: setContainerClass()


    Set the container class to use

    :param string: 

    :throws Exception\InvalidArgumentException: 
    :throws Exception\DomainException: 

    :rtype: Registry 



getContainerClass
+++++++++++++++++

.. function:: getContainerClass()


    Retrieve the container class

    :rtype: string 




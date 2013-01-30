.. Tag/Cloud.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Tag\\Cloud
================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new tag cloud with options

    :param array|Traversable: 



setOptions
++++++++++

.. function:: setOptions()


    Set options from array

    :param array: Configuration for Cloud

    :rtype: Cloud 



setTags
+++++++

.. function:: setTags()


    Set the tags for the tag cloud.
    
    $tags should be an array containing single tags as array. Each tag
    array should at least contain the keys 'title' and 'weight'. Optionally
    you may supply the key 'url', to which the tag links to. Any additional
    parameter in the array is silently ignored and can be used by custom
    decorators.

    :param array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Cloud 



appendTag
+++++++++

.. function:: appendTag()


    Append a single tag to the cloud

    :param TaggableInterface|array: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Cloud 



setItemList
+++++++++++

.. function:: setItemList()


    Set the item list

    :param ItemList: 

    :rtype: Cloud 



getItemList
+++++++++++

.. function:: getItemList()


    Retrieve the item list
    
    If item list is undefined, creates one.

    :rtype: ItemList 



setCloudDecorator
+++++++++++++++++

.. function:: setCloudDecorator()


    Set the decorator for the cloud

    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Cloud 



getCloudDecorator
+++++++++++++++++

.. function:: getCloudDecorator()


    Get the decorator for the cloud

    :rtype: Cloud\Decorator\AbstractCloud 



setTagDecorator
+++++++++++++++

.. function:: setTagDecorator()


    Set the decorator for the tags

    :param mixed: 

    :throws Exception\InvalidArgumentException: 

    :rtype: Cloud 



getTagDecorator
+++++++++++++++

.. function:: getTagDecorator()


    Get the decorator for the tags

    :rtype: Cloud\Decorator\AbstractTag 



setDecoratorPluginManager
+++++++++++++++++++++++++

.. function:: setDecoratorPluginManager()


    Set plugin manager for use with decorators

    :param Cloud\DecoratorPluginManager: 

    :rtype: Cloud 



getDecoratorPluginManager
+++++++++++++++++++++++++

.. function:: getDecoratorPluginManager()


    Get the plugin manager for decorators

    :rtype: Cloud\DecoratorPluginManager 



render
++++++

.. function:: render()


    Render the tag cloud

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Render the tag cloud

    :rtype: string 




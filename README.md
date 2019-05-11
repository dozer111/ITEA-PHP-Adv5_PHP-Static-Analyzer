PHP Static Analyzer
===================

![Custom badge](https://img.shields.io/badge/greeflas-default--project-red.svg)

Installation
------------

TODO

Usage
-----


`$ ./bin/console stat:class-author <email> <project-src>` - counts classes/interfaces/trait
created by some developer in project.
___
`$ ./bin/console stat:class-md-count <full-class-name>` show class data in format:  
```
Class: {{class_name}} is {{class_type}}  
Properties:  
    public: {{count}}  
    protected: {{count}}  
    private: {{count}}  
Methods:  
    public: {{count}}  
    protected: {{count}}  
    private: {{count}}  
```
___
Code style fixer
----------------


To fix the code style just run the following command

```
$ composer cs-fix
```

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Vladimir Kuprienko

#FuzzyWazi

**FuzzyWazi** is simply an example of the *Wazi* theme converted to using [Compass and SASS](http://compass-style.org/) in 
place of [LESS](http://lesscss.org).  There is nothing wrong with LESS, this is simply an alternative.

The goal was to keep the theme source looking much like *Wazi*, i.e. not re-write using 
Compass tricks, though some simple steps were made to make the project look more like a Compass project.  

Changes made to make this look more like a Compass project include things like:

- moving the stylesheet(s) to a ``stylesheets`` directory
- using *partials*, i.e. files prefixed with ``_`` to ensure they are imported as fragments rather than compiling to 
  a separate ``css`` file.

The theme does not use javascript to convert the SASS to ``css`` but rather the stylesheet is static.
The stylesheet, in this case ``screen.css`` is compiled by a ``compass compile`` command, 
or automatically when changes are made to the ``scss`` source files and a ``compass watch`` process is running.




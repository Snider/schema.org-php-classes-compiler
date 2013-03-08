schema.org-php-classes-compiler
===============================

schema.org php class compiler run via a web server on your local host. currently only works on linux and places the compiled files into the /tmp folder in a folder called "data".

if people find this useful i will add and polish the script... otherwise just download the project as a zip file and use the contents of the example folder in your application.

main use i guess is to get code sense to work on your IDE without having to manually type the parts of the schema.org def you actually use.

the script pulls the current version as a json object from http://schema.rdfs.org/all.json

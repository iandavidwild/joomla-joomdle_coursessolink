Course SSO link third party add-in for Joomdle
==============================================

Leicestershire Health Informatics Service and Ian Wild October 2013

About
-----

This add-in allows you to create SSO links to Moodle, for example as menu items.

Installation
------------

1. Copy all the files in this repository to the following location:

yoursite/components/com_joomdle/views/coursessolink

2. Add the following lines to the end of yoursite/administrator/language/en-GB/en-GB.com_joomdle.sys.ini

COM_JOOMDLE_COURSESSOLINK_COURSEID="Course ID"
COM_JOOMDLE_COURSESSOLINK_COURSEID_DESCRIPTION="Moodle database record ID of course to link to. Not the same as the course 'ID Number'."
COM_JOOMDLE_COURSESSOLINK_LINKTO="Link to"
COM_JOOMDLE_COURSESSOLINK_LINKTO_DESCRIPTION="Select 'Moodle course' if opening Moodle in a new window."
COM_JOOMDLE_COURSESSOLINK_MISSINGCOURSES_TEXT="'Course missing' text"
COM_JOOMDLE_COURSESSOLINK_MISSINGCOURSES_TEXT_DESCRIPTION="Text to show if course doesn't exist"
COM_JOOMDLE_COURSESSOLINK_LAYOUT="SSO link to Moodle course"
COM_JOOMDLE_COURSESSOLINK_LAYOUT_DESCRIPTION="Provides link to Moodle course. Authenticates to Moodle if you aren't already logged in."

END_OF_DOCUMENT

<?php
/* Course Fixture generated on: 2014-09-10 23:54:24 : 1410393264 */
class CourseFixture extends CakeTestFixture {
	var $name = 'Course';
	var $table = 'Course';

	var $fields = array(
		'courseID' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'courseName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'courseID', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'courseID' => 'Lorem ips',
			'courseName' => 'Lorem ipsum dolor sit amet'
		),
	);
}

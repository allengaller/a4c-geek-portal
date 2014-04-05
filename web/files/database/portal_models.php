<?php

class GeekPortalSchema extends CakeSchema {

	var $addresses = array(
			'AddressID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'AddressName' => array('type' => 'string', 'default' => '', 'length' => '80'),
			'StreetAddress' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '255'),
			'ZipID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'CityID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'StateID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'CountryID' => array('type' => 'integer', 'default' => '')
	);

	var $cities = array(
			'CityID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'CountryID' => array('type' => 'integer', 'default' => ''),
			'StateID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'CityName' => array('type' => 'string', 'default' => '', 'length' => '255')
	);

	var $contact_types = array(
			'ContactTypeID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'caption' => array('type' => 'string', 'default' => '', 'length' => '255')
	);

	var $countries = array(
			'CountryID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'CountryName' => array('type' => 'string', 'default' => '', 'length' => '255')
	);

	var $domains = array(
			'DomainID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'DomainName' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'DomainDesc' => array('type' => 'text', 'null' => true, 'default' => NULL),
			'enabled' => array('type' => 'integer', 'default' => ''0'')
	);

	var $events = array(
			'EventID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'SeasonID' => array('type' => 'integer', 'default' => ''),
			'EventName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '200'),
			'DateBegin' => array('type' => 'date', 'default' => ''),
			'DateEnd' => array('type' => 'date', 'default' => ''),
			'AddressID' => array('type' => 'integer', 'null' => true, 'default' => NULL)
	);

	var $league_members = array(
			'LeagueID' => array('type' => 'integer', 'default' => ''),
			'TeamID' => array('type' => 'integer', 'default' => '')
	);

	var $leagues = array(
			'LeagueID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'LeagueName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '200'),
			'PersonContactID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'ThemeID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'subdomain' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '255')
	);

	var $permissions = array(
			'PermissionID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'DomainID' => array('type' => 'integer', 'default' => ''),
			'PermissionName' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'PermissionDesc' => array('type' => 'text', 'null' => true, 'default' => NULL),
			'enabled' => array('type' => 'integer', 'default' => ''0'')
	);

	var $person_addresses = array(
			'PersonAddressID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'PersonID' => array('type' => 'integer', 'default' => ''),
			'AddressID' => array('type' => 'integer', 'default' => '')
	);

	var $person_contacts = array(
			'PersonContactID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'PersonID' => array('type' => 'integer', 'default' => ''),
			'ContactTypeID' => array('type' => 'integer', 'default' => ''),
			'Value' => array('type' => 'text', 'default' => '')
	);

	var $persons = array(
			'PersonID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'UserID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'FirstName' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'LastName' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'MiddleName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '255'),
			'Gender' => array('type' => 'enum', 'default' => ''U''),
			'BirthDate' => array('type' => 'date', 'null' => true, 'default' => NULL),
			'BirthPlace' => array('type' => 'integer', 'null' => true, 'default' => NULL)
	);

	var $ref = array(
			'Code' => array('type' => 'integer', 'default' => ''),
			'Desc' => array('type' => 'text', 'null' => true, 'default' => NULL),
			'Value' => array('type' => 'text', 'null' => true, 'default' => NULL)
	);

	var $role_permissions = array(
			'RolePermissionID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'PermissionID' => array('type' => 'integer', 'default' => ''),
			'Action' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'enabled' => array('type' => 'integer', 'default' => ''0'')
	);

	var $roles = array(
			'RoleID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'RoleName' => array('type' => 'string', 'default' => '', 'length' => '30'),
			'RoleDesc' => array('type' => 'text', 'null' => true, 'default' => NULL)
	);

	var $schools = array(
			'SchoolID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'SchoolName' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'PrimaryAddressID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'Active' => array('type' => 'integer', 'default' => ''1''),
			'SchoolLogo' => array('type' => 'text', 'null' => true, 'default' => NULL),
			'PrincipalID' => array('type' => 'integer', 'null' => true, 'default' => NULL)
	);

	var $seasons = array(
			'SeasonID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'SeasonName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '200'),
			'DateBegin' => array('type' => 'date', 'default' => ''),
			'DateEnd' => array('type' => 'date', 'default' => ''),
			'NumberOfRuns' => array('type' => 'integer', 'default' => ''0''),
			'SeedOrderClass' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '100')
	);

	var $staffs = array(
			'StaffID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'SchoolID' => array('type' => 'integer', 'default' => ''),
			'PersonID' => array('type' => 'integer', 'default' => ''),
			'role' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => '255')
	);

	var $states = array(
			'StateID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'CountryID' => array('type' => 'integer', 'default' => ''),
			'StateCode' => array('type' => 'string', 'default' => '', 'length' => '30'),
			'StateName' => array('type' => 'string', 'default' => '', 'length' => '255')
	);

	var $students = array(
			'StudentID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'SchoolID' => array('type' => 'integer', 'default' => ''),
			'PersonID' => array('type' => 'integer', 'default' => ''),
			'Grade' => array('type' => 'integer', 'null' => true, 'default' => NULL)
	);

	var $team_members = array(
			'TeamMemberID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'TeamID' => array('type' => 'integer', 'default' => ''),
			'StudentID' => array('type' => 'integer', 'default' => '')
	);

	var $team_types = array(
			'TeamTypeID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'TeamTypeName' => array('type' => 'string', 'default' => '', 'length' => '255')
	);

	var $teams = array(
			'TeamID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'TeamTypeID' => array('type' => 'integer', 'default' => ''),
			'TeamName' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'CoachID' => array('type' => 'integer', 'default' => '')
	);

	var $themes = array(
			'ThemeID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'ThemeName' => array('type' => 'string', 'default' => '', 'length' => '200'),
			'ThemePath' => array('type' => 'text', 'default' => '')
	);

	var $user_permissions = array(
			'UserPermissionID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'PermissionID' => array('type' => 'integer', 'default' => ''),
			'Action' => array('type' => 'string', 'default' => '', 'length' => '255'),
			'enabled' => array('type' => 'integer', 'default' => ''0'')
	);

	var $user_roles = array(
			'UserID' => array('type' => 'integer', 'default' => ''),
			'RoleID' => array('type' => 'integer', 'default' => '')
	);

	var $users = array(
			'UserID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'name' => array('type' => 'string', 'default' => '', 'length' => '50'),
			'pass' => array('type' => 'string', 'default' => '', 'length' => '256'),
			'super' => array('type' => 'integer', 'default' => ''0'')
	);

	var $zips = array(
			'ZipID' => array('type' => 'integer', 'default' => '', 'key' => 'primary'),
			'CountryID' => array('type' => 'integer', 'default' => ''),
			'CityID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'StateID' => array('type' => 'integer', 'null' => true, 'default' => NULL),
			'ZipCode' => array('type' => 'string', 'default' => '''', 'length' => '5'),
			'latitude' => array('type' => 'string', 'default' => '''', 'length' => '10'),
			'longitude' => array('type' => 'string', 'default' => '''', 'length' => '10')
	);
}
?>
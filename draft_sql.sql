CREATE TABLE administrator (
	email varchar(50) NOT NULL,
	username varchar(25) NOT NULL,
	password varchar(25) NOT NULL,
	PRIMARY KEY (email),
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE ship (
	ship_id varchar(11) NOT NULL,
	ship_name varchar(25) NOT NULL,
	speed_class char NOT NULL,
	PRIMARY KEY (ship_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE crew (
	crew_id varchar(11) NOT NULL,
	fname varchar(25) NOT NULL,
	lname varchar(25) NOT NULL,
	gender char,
    bdate datetime NOT NULL,//patanggal
    address varchar(200) NOT NULL,
    email varchar(50) NOT NULL,
    contact_no varchar(25) NOT NULL,
    rank varchar(50) NOT NULL,
	ship_id varchar(11) NOT NULL,
	PRIMARY KEY (crew_id),
	FOREIGN KEY (ship_id) REFERENCES ship (ship_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE route (
	route_id varchar(8) NOT NULL,
	location1 varchar(250) NOT NULL,
	geo_point_lat1 double NOT NULL,
	geo_point_long1 double NOT NULL,
	location2 varchar(250) NOT NULL,
	geo_point_lat2 double NOT NULL,
	geo_point_long2 double NOT NULL,
    distance double NOT NULL,
	PRIMARY KEY (route_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE ship_route (
	ship_route_id varchar(8) NOT NULL,
	eta double,
    ship_id varchar(8),
    route_id int,
	PRIMARY KEY (ship_route_id),
    FOREIGN KEY (ship_id) REFERENCES ship (ship_id),
    FOREIGN KEY (route_id) REFERENCES route (route_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
DROP TABLE `tinyurl`;

CREATE TABLE `tinyurl` (
  `short`				CHAR(5) NOT NULL PRIMARY KEY,
  `full`				VARCHAR(2000) NOT NULL,
  `created_time`		DATETIME NOT NULL,
  `last_access`			DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- 62^3 = 0.2 million
-- 62^4 = 14.7 million
-- 62^5 = 916 million
-- max url length is 2000
-- varchar is variable length, (maybe) better to use

INSERT INTO `tinyurl` VALUES ('test',
	'https://dev.mysql.com/doc/refman/5.7/en/date-and-time-types.html',
    '2015-09-01 00:00:00',
    '2015-09-01 00:01:01');

SELECT * FROM `tinyurl`

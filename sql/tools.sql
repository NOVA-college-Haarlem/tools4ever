CREATE TABLE tools (
    tool_id INT NOT NULL AUTO_INCREMENT,
    tool_name VARCHAR(50) NOT NULL,
    tool_category VARCHAR(50) NOT NULL,
    tool_price INT(11) NOT NULL COMMENT 'Prices are in cents',
    tool_brand VARCHAR(50) NOT NULL,
    PRIMARY KEY (tool_id)
);

INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand)
VALUES
('Hammer', 'Handgereedschap', 1499, 'Hultafors'),
('Schroevendraaierset', 'Handgereedschap', 1999, 'Stanley'),
('Moersleutelset', 'Handgereedschap', 2999, 'Bahco'),
('Boormachine', 'Elektrisch gereedschap', 9999, 'Bosch'),
('Cirkelzaag', 'Elektrisch gereedschap', 14999, 'Makita'),
('Slijpmachine', 'Elektrisch gereedschap', 7999, 'Metabo'),
('Schuurmachine', 'Elektrisch gereedschap', 3999, 'Black & Decker'),
('Haakse slijper', 'Elektrisch gereedschap', 8999, 'Festool'),
('Combinatietang', 'Handgereedschap', 1299, 'Knipex'),
('Waterpas', 'Meetgereedschap', 999, 'BMI'),
('Rolmaat', 'Meetgereedschap', 799, 'Stanley'),
('Multimeter', 'Meetgereedschap', 2499, 'Fluke'),
('Tegelsnijder', 'Tegelgereedschap', 4999, 'Rubi'),
('Voegenkrabber', 'Tegelgereedschap', 799, 'Norton'),
('Kitpistool', 'Kitgereedschap', 1299, 'Tesa'),
('Lijmpistool', 'Lijmgereedschap', 1999, 'Bison'),
('Stofzuiger', 'Stofafzuiging', 11999, 'Kärcher'),
('Verfafbrander', 'Verfgereedschap', 3999, 'Steinel'),
('Verfroller', 'Verfgereedschap', 999, 'Anza'),
('Plamuurmes', 'Verfgereedschap', 699, 'Goudhaantje');


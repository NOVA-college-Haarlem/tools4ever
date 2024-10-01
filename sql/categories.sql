-- Onderstaande code gaan we ook gebruiken maar op een later moment
CREATE TABLE categories (
    category_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (category_id)
);

INSERT INTO categories(name) VALUES 
('Handgereedschap'),
('Elektrisch gereedschap'),
('Tegelgereedschap'),
('Meetgereedschap'),
('Kitgereedschap'),
('Lijmgereedschap'),
('Stofafzuiging'),
('Verfgereedschap');

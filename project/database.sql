CREATE TABLE `books` (
  `id` int(11) NOT NULL auto_increment,
  `book_name` varchar(255) NOT NULL,
  `isbn_no` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publication_id` int(11) NOT NULL,
  `publication_date` date NOT NULL,
  `publication_language` varchar(50) NOT NULL,
  `book_pages` int(11) NOT NULL,
  `book_price` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
);
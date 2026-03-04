USE bookstore;

CREATE TABLE IF NOT EXISTS boek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    prijs DECIMAL(10, 2) NOT NULL,
    genre VARCHAR(100),
    uitgever VARCHAR(255),
    publicatiejaar INT,
    beschrijving TEXT,
    thumbnail_url VARCHAR(500),
    voorraad INT DEFAULT 0,
    isbn VARCHAR(20),
    paginas INT
);

INSERT INTO boek 
(titel, auteur, prijs, genre, uitgever, publicatiejaar, beschrijving, thumbnail_url, voorraad, isbn, paginas)
VALUES
('The Hobbit', 'J.R.R. Tolkien', 19.99, 'Fantasy', 'Allen & Unwin', 1937, 'Fantasy avontuur.', 'https://picsum.photos/200/300?1', 10, '978000000001', 310),
('1984', 'George Orwell', 14.99, 'Fictie', 'Secker & Warburg', 1949, 'Dystopische roman.', 'https://picsum.photos/200/300?2', 5, '978000000002', 328),
('The Silent Patient', 'Alex Michaelides', 17.50, 'Thriller', 'Celadon Books', 2019, 'Psychologische thriller.', 'https://picsum.photos/200/300?3', 8, '978000000003', 336),
('Harry Potter', 'J.K. Rowling', 22.00, 'Fantasy', 'Bloomsbury', 1997, 'Magisch avontuur.', 'https://picsum.photos/200/300?4', 12, '978000000004', 350),
('The Da Vinci Code', 'Dan Brown', 16.75, 'Thriller', 'Doubleday', 2003, 'Mysterie roman.', 'https://picsum.photos/200/300?5', 7, '978000000005', 454),
('Clean Code', 'Robert C. Martin', 29.99, 'Non-Fictie', 'Prentice Hall', 2008, 'Software development boek.', 'https://picsum.photos/200/300?6', 6, '978000000006', 464),
('The Alchemist', 'Paulo Coelho', 13.40, 'Fictie', 'HarperCollins', 1988, 'Inspirerend verhaal.', 'https://picsum.photos/200/300?7', 9, '978000000007', 208),
('Dune', 'Frank Herbert', 21.99, 'Fantasy', 'Chilton Books', 1965, 'Science fiction klassieker.', 'https://picsum.photos/200/300?8', 4, '978000000008', 412),
('Sapiens', 'Yuval Noah Harari', 24.50, 'Non-Fictie', 'Harvill Secker', 2011, 'Geschiedenis van de mens.', 'https://picsum.photos/200/300?9', 11, '978000000009', 443),
('Gone Girl', 'Gillian Flynn', 15.30, 'Thriller', 'Crown Publishing', 2012, 'Psychologische misdaadroman.', 'https://picsum.photos/200/300?10', 5, '978000000010', 422);
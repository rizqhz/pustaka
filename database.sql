CREATE DATABASE makhluk;

use makhluk;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) UNIQUE NOT NULL,
    password VARCHAR(128) NOT NULL,
    name VARCHAR(256) NOT NULL
);

CREATE TABLE books (
    id INT PRIMARY KEY AUTO_INCREMENT,
    isbn CHAR(20) NOT NULL,
    judul VARCHAR(32) NOT NULL,
    deskripsi TEXT NOT NULL,
    penulis VARCHAR(32) NOT NULL,
    tahun_terbit CHAR(4) NOT NULL,
    harga BIGINT NOT NULL,
    sampul VARCHAR(256)
);

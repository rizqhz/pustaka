<?php

require_once 'models/Books.php';

$books = new Books();

$books->get(); echo '<br/>';

$books->add([
    'isbn' => '',
    'judul' => '',
    'deskripsi' => '',
    'penulis' => '',
    'tahun_terbit' => '',
    'harga' => '',
    'sampul' => '',
]); echo '<br/>';

$books->edit(1, [
    'isbn' => '',
    'judul' => '',
    'deskripsi' => '',
    'penulis' => '',
    'tahun_terbit' => '',
    'harga' => '',
    'sampul' => '',
]); echo '<br/>';

$books->destroy(1); echo '<br/>';

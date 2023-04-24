const books = [
    {
        "id": 1,
        "title": "Buku Filsafat A",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 2,
        "title": "Buku Matematika A",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 3,
        "title": "Buku Bahasa A",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 4,
        "title": "Buku Ilmu Komputer A",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 5,
        "title": "Buku Filsafat B",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 6,
        "title": "Buku Matematika B",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 7,
        "title": "Buku Bahasa B",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 8,
        "title": "Buku Ilmu Komputer B",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 9,
        "title": "Buku Filsafat C",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 10,
        "title": "Buku Matematika C",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 11,
        "title": "Buku Bahasa C",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 12,
        "title": "Buku Ilmu Komputer C",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 13,
        "title": "Buku Filsafat D",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 14,
        "title": "Buku Matematika D",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 15,
        "title": "Buku Bahasa D",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 16,
        "title": "Buku Ilmu Komputer D",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 17,
        "title": "Buku Filsafat E",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 18,
        "title": "Buku Matematika E",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 19,
        "title": "Buku Bahasa E",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 20,
        "title": "Buku Ilmu Komputer E",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 21,
        "title": "Buku Filsafat F",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 22,
        "title": "Buku Matematika F",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 23,
        "title": "Buku Bahasa F",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 24,
        "title": "Buku Ilmu Komputer F",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 25,
        "title": "Buku Filsafat G",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 26,
        "title": "Buku Matematika G",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 27,
        "title": "Buku Bahasa G",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 28,
        "title": "Buku Ilmu Komputer G",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 29,
        "title": "Buku Filsafat H",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 30,
        "title": "Buku Matematika H",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 31,
        "title": "Buku Bahasa H",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 32,
        "title": "Buku Ilmu Komputer H",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 33,
        "title": "Buku Filsafat I",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 34,
        "title": "Buku Matematika I",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 35,
        "title": "Buku Bahasa I",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 36,
        "title": "Buku Ilmu Komputer I",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 37,
        "title": "Buku Filsafat J",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 38,
        "title": "Buku Matematika J",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 39,
        "title": "Buku Bahasa J",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 40,
        "title": "Buku Ilmu Komputer J",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 41,
        "title": "Buku Filsafat K",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 42,
        "title": "Buku Matematika K",
        "desc": "Buku ini merupakan buku yang membahas suatu masalah tertentu pada ilmu matematika secara komprehensif.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 43,
        "title": "Buku Bahasa K",
        "desc": "Buku ini merupakan buku yang menjelaskan suatu bahasa tertentu dari semantik sampai sintaksis bahasa tersebut secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 44,
        "title": "Buku Ilmu Komputer K",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu komputer secara rinci.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 45,
        "title": "Buku Filsafat L",
        "desc": "Buku ini merupakan buku yang membahas suatu topik tertentu pada ilmu filsafat menurut seorang filsuf ternama.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    },
    {
        "id": 46,
        "title": "Buku Death Note",
        "desc": "Buku ini merupakan buku yang dapat menentukan takdir kematian dari suatu makhluk hidup yang memiliki akal.",
        "price": "Rp 999.000",
        "cover": "assets/images/book-flat.png"
    }
]

// export default books;

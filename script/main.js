const books = [
    {
        name: "Buku Filsafat",
        desc: "Ini merupakan buku yang membahas filsafat.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
    {
        name: "Buku Matematika Diskrit",
        desc: "Ini merupakan buku yang membahas matematika diskrit.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
    {
        name: "Buku Kalkulus",
        desc: "Ini merupakan buku yang membahas kalkulus.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
    {
        name: "Buku Teori Bilangan",
        desc: "Ini merupakan buku yang membahas teori bilangan.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
    {
        name: "Buku Kriptografi",
        desc: "Ini merupakan buku yang membahas kriptografi.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
    {
        name: "Buku Struktur Data",
        desc: "Ini merupakan buku yang membahas struktur data.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
    {
        name: "Kitab Taurat",
        desc: "Ini merupakan buku yang membahas pemrograman desktop.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
    {
        name: "Buku Aljabar Linear",
        desc: "Ini merupakan buku yang membahas aljabar linear.",
        price: "Rp99.999.999,00",
        img: "assets/images/book-flat.png",
    },
];

let counter = 0;

function listProduct() {
    const container = document.getElementById('book-container');
    let buffer = '';
    books.forEach((book) => {
        buffer += `
                <div class="card">
                    <h1 class="text-white">${book.name}</h1>
                    <div class="desc">
                        <img class="cover" src=${book.img} alt="example">
                        <p class="text-white">${book.desc}</p>
                    </div>
                    <h3 class="text-white">${book.price}-</h3>
                </div>
        `;
        counter++;
    });
    container.innerHTML = buffer;
}

function add() {
    const container = document.getElementById('book-container');
    const button = document.getElementById('show-more');
    const spinner = document.querySelector('.loading-spinner');
    button.style.display = 'none';
    spinner.style.display = 'block';
    let buffer = '';
    setTimeout(function () {
        for (let i = 0; i < 4; i++) {
            buffer += `
                    <div class="card">
                        <h1 class="text-white">${books[i].name}</h1>
                        <div class="desc">
                            <img class="cover" src=${books[i].img} alt="example">
                            <p class="text-white">${books[i].desc}</p>
                        </div>
                        <h3 class="text-white">${books[i].price}-</h3>
                    </div>
            `;
        }
        container.insertAdjacentHTML('beforeend', buffer);
        counter += 4;
        if (counter >= books.length) {
            button.style.display = 'none';
        } else {
            button.style.display = 'block';
        }
        spinner.style.display = 'none';
    }, 1000);
}

function load() {
    setTimeout(() => {
        
    }, 1000);
}
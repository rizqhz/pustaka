let iterator = new Number;
let content = new String;

const parse = data => `
    <div class="card bg-snow-3">
      <div class="book-cover">
        <img src=${data.cover}>
      </div>
      <div class="book-information">
        <h3 class="book-title fg-night-4">${data.title}</h3>
        <div class="book-lang">
          <a class="menu bg-frost-3 fg-snow-3 active" href="">ID</a>
          <a class="menu fg-night-4" href="">EN</a>
          <a class="menu fg-night-4" href="">JP</a>
        </div>
        <p class="book-desc fg-night-4">${data.desc}</p>
        <h4 class="book-price fg-night-4">${data.price}</h4>
      </div>
    </div>
`;

const view = n => {
    const main = document.querySelector('main');
    const expand = document.querySelector('.expand');
    const spinner = expand.children[0];
    const more = expand.children[1];
    spinner.style.display = 'inline-block';
    more.style.display = 'none';
    setTimeout(() => {
        while (iterator <= books.length - 1 && n--) {
            content += parse(books[iterator]);
            iterator = iterator + 1;
        }
        main.innerHTML = content;
        spinner.style.display = 'none';
        more.style.display = books[iterator] ? 'block' : 'none';
        main.style.marginTop = '50px';
    }, 1000);
};

// let counter = 0;

// function listProduct() {
//     const container = document.getElementById('book-container');
//     let buffer = '';
//     books.forEach((book) => {
//         buffer += `
//                 <div class="card">
//                     <h1 class="text-white">${book.name}</h1>
//                     <div class="desc">
//                         <img class="cover" src=${book.img} alt="example">
//                         <p class="text-white">${book.desc}</p>
//                     </div>
//                     <h3 class="text-white">${book.price}-</h3>
//                 </div>
//         `;
//         counter++;
//     });
//     container.innerHTML = buffer;
// }

// function add() {
//     const container = document.getElementById('book-container');
//     const button = document.getElementById('show-more');
//     const spinner = document.querySelector('.loading-spinner');
//     button.style.display = 'none';
//     spinner.style.display = 'block';
//     let buffer = '';
//     setTimeout(function () {
//         for (let i = 0; i < 4; i++) {
//             buffer += `
//                     <div class="card">
//                         <h1 class="text-white">${books[i].name}</h1>
//                         <div class="desc">
//                             <img class="cover" src=${books[i].img} alt="example">
//                             <p class="text-white">${books[i].desc}</p>
//                         </div>
//                         <h3 class="text-white">${books[i].price}-</h3>
//                     </div>
//             `;
//         }
//         container.insertAdjacentHTML('beforeend', buffer);
//         counter += 4;
//         if (counter >= books.length) {
//             button.style.display = 'none';
//         } else {
//             button.style.display = 'block';
//         }
//         spinner.style.display = 'none';
//     }, 1000);
// }

// function load() {
//     setTimeout(() => {
        
//     }, 1000);
// }

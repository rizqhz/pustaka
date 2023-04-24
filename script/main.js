let iterator = new Number;
let content = new String;

const parse = data => `
    <div class="card bg-snow-3">
      <div class="book-cover">
        <img src=${data.cover}>
      </div>
      <div class="book-information">
        <div class="card-header">
          <h3 class="book-title fg-night-4">
            <i class="fa fa-book"></i>
            <span>${data.title}</span>
          </h3>
          <button class="btn-like bg-frost-3 fg-snow-3">
            <i class="fa fa-heart fa-1x"></i>
          </button>
        </div>
        <div class="book-lang">
          <a class="lang bg-frost-3 fg-snow-3 active" href="">ID</a>
          <a class="lang fg-night-4" href="">EN</a>
          <a class="lang fg-night-4" href="">JP</a>
        </div>
        <p class="book-desc fg-night-4">${data.desc}</p>
        <h3 class="book-price fg-frost-3">${data.price}</h3>
      </div>
    </div>
`;

const view = n => {
    const main = document.querySelector('main');
    const expand = document.querySelector('.expand');
    const spinner = expand.children[0];
    const more = expand.children[1];
    const footer = document.querySelector('footer');
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
        footer.style.position = 'relative';
    }, 1000);
};

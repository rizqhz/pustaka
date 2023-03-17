let array = [1, 2, 3, 4, 5];

console.table(array, typeof array);
console.log(...array);

array = array.map(function(value, index) {
    return value * 2;
});

console.table(array, typeof array);
console.log(...array);

array = array.filter(function(value, index) {
    return value < 8;
});

console.table(array, typeof array);
console.log(...array);

let persons = [
    {
        name: "Nama A",
        generation: 2015,
        "tahun lahir": 1945
    },
    {
        name: "Nama B",
        generation: 2020,
        "tahun lahir": 1955
    },
    {
        name: "Nama C",
        generation: 2017,
        "tahun lahir": 1995
    },
];

persons.forEach((value) => {
    console.log(value);
});

let res = persons.map((value) => {
    return value.name;
});
console.table(res);

persons.filter((value) => {
    value.generation <= 2017 && console.log(value);
});

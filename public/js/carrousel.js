var carrousel = document.getElementById("carrousel");
console.log(carrousel);
var liste_carrousel = [];
var index = 0;

for (let i of carrousel.children) { // permet de parcourir la liste en entière
    liste_carrousel.push(i);
};

var btavant = document.getElementById("btavant");
btavant.addEventListener("click", avant, false);
var btafter = document.getElementById("btafter");
btafter.addEventListener("click", apres, false);

carrousel.children[0].style.display = "block";

function avant() {
    console.log("test");
    if (index == liste_carrousel.length - 1) {
        liste_carrousel[index].style.display = "none";
        index = 0;
        liste_carrousel[index].style.display = 'block';
    } else {
        var indexP = index;
        var indexS = index + 1;
        liste_carrousel[indexP].style.display = 'none';
        liste_carrousel[indexS].style.display = 'block';
        index = indexS;
    }
};

function apres() {
    if (index == 0) {
        liste_carrousel[index].style.display = "none";
        index = liste_carrousel.length - 1;
        liste_carrousel[index].style.display = "block";
    } else {
        var indexP = index;
        var indexS = index - 1;
        liste_carrousel[indexP].style.display = 'none';
        liste_carrousel[indexS].style.display = 'block';
        index = indexS;
    }
};

setInterval(() => {
    apres()
}, 5000)

const ticketEl = document.getElementById("not");
const buyEl = document.getElementById("kk");
const copyEl = document.getElementById("ll");




buyEl.addEventListener("click",function ready(){
    var price = ticketEl.value * 100;
    copyEl.innerText = price;

});


const NBQUESTIONS = 10;

let comp = sessionStorage.getItem('competence');
console.log(comp)

fetch("../Questions.json")
.then(response => response.json())
.then(data => GetValeur(data))

function GetValeur(data){
    console.log(Object.keys(data))
    if(Object.keys(data) == comp) {
        randint = Math.random() * NBQUESTIONS+1
        randint = Math.floor(randint)
        let val = data[comp][randint]
    }else {
        console.log("Wesh t'as un bug")
        
    }
}

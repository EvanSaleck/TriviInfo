const NBQUESTIONS = 10;
const MAXCOMP = 6;

let comp = sessionStorage.getItem('competence');

fetch("../Questions.json")
  .then(response => response.json())
  .then(data => {
    let val = GetValue(data);
    ShowValue(val);
  })
  .catch(error => console.log(error));

function GetValue(data) {
  let val = [];

  for (let i = 0; i < MAXCOMP; i++) {
    if (Object.keys(data)[i] === comp) {

    let randint = Math.floor(Math.random() * NBQUESTIONS) + 1;
      console.log(randint)
      val = data[comp][randint];
      console.log(val)
      break;
    } else {
      console.log("Un problème est survenu");
    }
  }
  return val;
}

function ShowValue(data) {
    console.log(data);
  let question = document.getElementById("question");
  question.innerHTML = data.question;

  let rep = data.reponse;
  let onlyrep = { ...data };
  delete onlyrep.question;
  delete onlyrep.reponse;

  let input = document.getElementById("inputs");
  Object.keys(onlyrep).forEach(element => {
    let val = document.createElement('button');
    val.classList.add("btn", "mt-2", "btn-light", "rounded-pill", "w-auto", "fs-2");
    val.textContent = onlyrep[element];
    val.setAttribute("data-id", element);
    val.setAttribute("id", element);
    input.appendChild(val);

    val.addEventListener("click", function () {
      ValidateAnswer(this, rep);
    });
  });
}

function ValidateAnswer(e, rep) {
    // console.log("Clicked button:", e);
    // console.log("Rep : " + rep)
  
    if (e.getAttribute("data-id") == rep) {
        let myAlert = document.querySelector(".toast");
        let bsAlert = new bootstrap.Toast(myAlert);
        let titre = document.getElementById("titre");
        let bg = document.getElementById("bg")
        let border = document.getElementById("border")
        border.classList.add("border-success")
        bg.classList.add("bg-success")
        titre.innerHTML = "Bonne réponse";
        let message = "Félicitation, vous avez trouvé la bonne réponse !";
        let content = document.getElementById("content");
        content.innerHTML = message;
        bsAlert.show();

    setTimeout(() => {
      window.location.href = "../Jeu.html";
    }, 3000);
    } else {
        let myAlert = document.querySelector(".toast");
        let bsAlert = new bootstrap.Toast(myAlert);
        let titre = document.getElementById("titre");
        let bg = document.getElementById("bg")
        let border = document.getElementById("border")
        border.classList.add("border-danger")
        bg.classList.add("bg-danger")
        titre.innerHTML = "Mauvaise réponse";
        let message = "Dommage, vous n'avez pas trouvé la bonne réponse !";
        let content = document.getElementById("content");
        content.innerHTML = message;
        bsAlert.show();

        setTimeout(() => {
        window.location.href = "../Jeu.html";
        }, 3000);

}


  }
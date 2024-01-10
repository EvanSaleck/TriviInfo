const dice = document.querySelector('.dice');
const rollBtn = document.querySelector('.roll');

const randomDice = () => {

    const random = Math.floor(Math.random() * 10);

    if (random >= 1 && random <= 6) {
        rollDice(random);
        let select = document.getElementById('selection');
        select.classList.remove('d-none');
    }
    else {
        randomDice();
    }
}

const rollDice = random => {

    dice.style.animation = 'rolling 4s';

    setTimeout(() => {
        console.log(random);

        switch (random) {
            case 1:
                dice.style.transform = 'rotateX(0deg) rotateY(0deg)';
                break;

            case 6:
                dice.style.transform = 'rotateX(180deg) rotateY(0deg)';
                break;

            case 2:
                dice.style.transform = 'rotateX(-90deg) rotateY(0deg)';
                break;

            case 5:
                dice.style.transform = 'rotateX(90deg) rotateY(0deg)';
                break;

            case 3:
                dice.style.transform = 'rotateX(0deg) rotateY(90deg)';
                break;

            case 4:
                dice.style.transform = 'rotateX(0deg) rotateY(-90deg)';
                break;

            default:
                break;
        }

        dice.style.animation = 'none';

    }, 3000);

}


rollBtn.addEventListener('click', randomDice);

let select = document.getElementById('selection');
select.addEventListener('change', () => {

    if(select.value == "Choisir la compétence") {
        let alert = document.getElementById("liveAlertPlaceholder");
        let span = alert.querySelector('span');
        let content = "Vous n'avez selectionné aucune valeur";
        span.innerText = content;

        alert.classList.remove('d-none');
    } else {
        // console.log(select.value);
        sessionStorage.setItem('competence', select.value);
        window.location.href = 'Question.html';
    }

}) 

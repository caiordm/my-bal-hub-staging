const button = document.querySelector("#creator");
const mainContainer = document.querySelector(".main-container");

button.onClick = "windowCreator()";

function windowCreator() {
    console.log("ola");

    // Criando a div pai

    var div = document.createElement('div');
    div.className = "inputs";
    document.body.insertBefore(div, mainContainer);

    // H1 de titulo

    var title = document.createElement("h1");
    title.textContent = "CREATE A NEW HISTORY!";
    div.appendChild(title);

    // Criando inputs

    // Label Name

    var nameLabel = document.createElement("label");
    nameLabel.htmlFor = "name";
    nameLabel.textContent = "Nome";
    div.appendChild(nameLabel);

    // Name

    var nameInput = document.createElement('input');
    nameInput.type = "text";
    nameInput.name = "name"
    nameInput.placeholder = "Digite o nome do jogador";
    div.appendChild(nameInput);

    // Label Nac

    var nacLabel = document.createElement("label");
    nacLabel.htmlFor = "nacionalidade";
    nacLabel.textContent = "Nacionalidade";
    div.appendChild(nacLabel);

    // Nac

    var nacInput = document.createElement('input');
    nacInput.type = "text";
    nacInput.name = "nacionalidade"
    nacInput.placeholder = "Digite a nacionalidade do jogador";
    div.appendChild(nacInput);

    // Label Time

    var timeLabel = document.createElement("label");
    timeLabel.htmlFor = "time";
    timeLabel.textContent = "Time Atual";
    div.appendChild(timeLabel);

    // Time

    var timeInput = document.createElement('input');
    timeInput.type = "text";
    timeInput.name = "time"
    timeInput.placeholder = "Digite o time atual do jogador";
    div.appendChild(timeInput);

    // Button

    var buttonSubmit = document.createElement('button');
    buttonSubmit.type = "submit";
    buttonSubmit.textContent = "CREATE";
    div.appendChild(buttonSubmit);



}
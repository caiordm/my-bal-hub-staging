const button = document.querySelector("#my-button");
const section = document.querySelector(".section3");



button.addEventListener("click", () => {
    // Clonando o botão
    window.location = '../creatingHistory.php';
    var elementoClone = button.cloneNode(true);
    
    /* Inserindo o elemento clonado na section3, pórem antes do primeiro button, assim, sempre o primeiro elemento é o novo elemento, e o próximo é o elemento1 que faz a criação */

    /* Talvez seja interessante um botão superior pra criar os cards, vamos ver como vai ser o uso com PHP */

    section.insertBefore(elementoClone, button);
    elementoClone.id = 'my-button';
    elementoClone.name = "<?= teste ?>";
})
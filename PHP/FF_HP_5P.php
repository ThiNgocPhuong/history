<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/nav.css">
        <link rel="stylesheet" href="./CSS/style.css">
        <title>HP 5P</title>
    </head>
    <body>
        <nav>
            <a href="#" class="nav-item" data-active-color="orange" data-target="Home">Home</a>
            <a href="#" class="nav-item is-active" data-active-color="teal" data-target="FF HP 5p">FF HP 5p</a>
            <a href="#" class="nav-item" data-active-color="orangeRed" data-target="ED FF">ED FF</a>
            <a href="#" class="nav-item" data-active-color="indigo" data-target="FF Des">FF Des</a>
            <a href="#" class="nav-item" data-active-color="Coral" data-target="5L FF">5L FF</a>
            <a href="#" class="nav-item" data-active-color="royalBlue" data-target="Idea">Idea</a>
            <span class="nav-indicator"></span>
        </nav>
        <div class="text">
            <h2>Fanfiction Harry Potter 5 personnages</h2>
        </div>
    </body>
</html>

<script>
    const indicator = document.querySelector('.nav-indicator');
    const items = document.querySelectorAll('.nav-item');

    function handleIndicator(el) {
    // Boucler sur items -> retirer la classe "is-active"
    items.forEach(item => {
        item.classList.remove('is-active');
        item.removeAttribute('style');
    })
    
    const elementColor = el.dataset.activeColor;
    const target = el.dataset.target;
    
    // Styliser l'indicateur
    indicator.style.width = `${el.offsetWidth}px`;
    indicator.style.backgroundColor = elementColor;
    indicator.style.left = `${el.offsetLeft}px`;
    
    // Ajout la classe is-active
    el.classList.add('is-active');
    el.style.color = elementColor;
    }

    items.forEach((item, index) => {
    item.addEventListener('click', e => {
        handleIndicator(e.target)
    });
    item.classList.contains('is-active') && handleIndicator(item);
    });
</script>
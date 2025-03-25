BX.ready(function() {
    // 1. Получаем все элементы с классом .star
    const stars = document.querySelectorAll('.star');

    // 2. Вешаем обработчик события "click" на каждую звезду
    stars.forEach(function(star) {
        BX.bind(star, "click", clickStar);
    });
});

function clickStar(event) {
    event.preventDefault();

    // Получаем элемент, по которому кликнули
    const target = event.currentTarget;

    // Получаем значение agentID из data-атрибута
    const agentID = target.dataset.agentId;

    if (agentID) { // если ID есть, делаем ajax-запрос
        BX.ajax.runComponentAction(
            "mcart_new:agents.list", // название компонента
            "clickStar",         // метод в class.php
            {
                mode: "class",
                data: {
                    agentID: agentID
                },
            }
        ).then(
            BX.proxy((response) => {
                console.log(response); 
                let data = response.data;

                if (data['action'] === 'success') {
        target.classList.add('star--active');
                } 
        else if (data['action'] === 'remove') {
            target.classList.remove('star--active'); // Убираем класс, если удалили из избранного
        }
                
            }, this)
        ).catch(
            BX.proxy((response) => {
                console.log(response.errors);
            }, this)
        );
    }
}
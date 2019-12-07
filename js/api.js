var xhr = new XMLHttpRequest();
xhr.open("GET", "https://reqres.in/api/users?page=2", true);
xhr.onload = function() {
    const status = xhr.status;
    const jsonObj = JSON.parse(xhr.responseText);
    const newObj = jsonObj.data;

    document.getElementById("get1").innerHTML = `Resposta da requisição: ${status}`;

    if (status == 200) {
        newObj.forEach(user => {
            const card = document.createElement('div');
            const cardBody = document.createElement('div');
            const nome = document.createElement('div');
            const email = document.createElement('div');
            const avatar = document.createElement('img');

            const infoCard = document.getElementById('get1');

            infoCard.appendChild(card);
            card.appendChild(cardBody);
            cardBody.appendChild(nome);
            cardBody.appendChild(email);
            cardBody.appendChild(avatar);

            avatar.setAttribute('src', user.avatar);

            nome.innerHTML = `${user.first_name} ${user.last_name}`;
            email.innerHTML = `${user.email}`;

        })
    }

}

xhr.send();

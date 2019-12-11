// Função 1 - API REST
function method1() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://reqres.in/api/users?page=2", true);
    xhr.onload = function() {
        const status = xhr.status;
        const jsonObj = JSON.parse(xhr.responseText);
        const newObj = jsonObj.data;

        document.getElementById("resp-req-1").innerHTML = `Resposta da requisição: ${status}`;

        if (status == 200) {
            newObj.forEach(user => {
                const card = document.createElement('div');
                const nome = document.createElement('h1');
                const email = document.createElement('span');
                const avatar = document.createElement('img');

                const infoCard = document.getElementById('method1');

                infoCard.appendChild(card);
                card.appendChild(avatar);
                card.appendChild(nome);
                card.appendChild(email);

                card.classList.add("infoCard", "col-12", "col-md-2");

                avatar.setAttribute('src', user.avatar);

                nome.innerHTML = `${user.first_name} ${user.last_name}`;
                email.innerHTML = `${user.email}`;

            })
        }

    }

    xhr.send();
}
window.onload = method1();

// Função - API REST
function method2() {
    


}

    
window.onload = method2();
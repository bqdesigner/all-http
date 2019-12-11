// Função 1 - API REST
function method1() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://reqres.in/api/users?page=2", true);
    xhr.onload = function () {
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

    var xhr = new XMLHttpRequest()

    xhr.onreadystatechange = function () {

        if (xhr.readyState == 1) {
            const status = xhr.status;
            document.getElementById("resp-req-2").innerHTML = `Resposta da requisição: ${status}`;
        }
        if (xhr.readyState == 4 && xhr.status == 404) {
            const response = xhr.response;
            const status = xhr.status;
            document.getElementById("resp-req-2").innerHTML = `Resposta da requisição: ${status}`;
            const card = document.createElement('div');
            card.innerHTML = response;
            const infoCard = document.getElementById('method2');
            infoCard.appendChild(card);
        }

    }
    xhr.open('GET', 'https://reqres.in/api/users/23', true)
    xhr.send()
}

window.onload = method2();

// Função 3 - API REST
function method3() {
    const spanNome = document.getElementById("nome-mt3");
    const spanJob = document.getElementById("job-mt3");
    const spanId = document.getElementById("id-mt3");
    const spanCreate = document.getElementById("create-mt3");

    const url = 'https://reqres.in/api/users';

    data = {
        "name": "Bruno Queirós",
        "job": "Designer"
    }
    fetch(url, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            "Content-type": "application/json"
        }
    })
        .then(res => {
            document.getElementById("resp-req-3").innerHTML = `Resposta da requisição: ${res.status}`;
            res.json()

                .then(data => {
                    // document.getElementById("method3").style.display = 'block'
                    spanNome.innerHTML = data.name
                    spanJob.innerHTML = data.job
                    spanId.innerHTML = data.id
                    spanCreate.innerHTML = data.createdAt
                })
        })
}

window.onload = method3();

// Função 4 - API REST
function method4() {
    const spanNome = document.getElementById("nome-mt4");
    const spanJob = document.getElementById("job-mt4");
    const spanAtt = document.getElementById("att-mt4");

    const url = 'https://reqres.in/api/users/2';

    data = {
        "name": "Bruno Queirós",
        "job": "Product Designer"
    }
    fetch(url, {
        method: "PUT",
        body: JSON.stringify(data),
        headers: {
            "Content-type": "application/json"
        }
    })
        .then(res => {
            document.getElementById("resp-req-4").innerHTML = `Resposta da requisição: ${res.status}`;
            res.json()

                .then(data => {
                    // document.getElementById("method3").style.display = 'block'
                    spanNome.innerHTML = data.name
                    spanJob.innerHTML = data.job
                    spanAtt.innerHTML = data.updatedAt
                })
        })
}

window.onload = method4();

// Função 5 - API REST
function method5() {
    var url = 'https://reqres.in/api/users/2'

    fetch(url, {
        method: "DELETE"
    })
        .then(res => {
            document.getElementById("resp-req-5").innerHTML = `Resposta da requisição: ${res.status}`;
        })
        .catch(err => {
            console.log(err)
        });
}

window.onload = method5();

// Função 6 - API REST
function method6() {
    const spanNome = document.getElementById("nome-mt6");
    const spanJob = document.getElementById("job-mt6");
    const spanAtt = document.getElementById("att-mt6");

    var xhr = new XMLHttpRequest()

    data = {
        "name": "Bruno Queirós",
        "job": "UI/UX Designer"
    }
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 1) {
            document.getElementById("resp-req-6").innerHTML = `Resposta da requisição: ${xhr.status}`;
        }
        if (xhr.readyState == 4 && xhr.status == 200) {

            document.getElementById("resp-req-6").innerHTML = `Resposta da requisição: ${xhr.status}`;
            var response = JSON.parse(xhr.response);

            spanNome.innerHTML = 'Queirós Bruno'
            spanJob.innerHTML = 'Designer UI/UX'
            spanAtt.innerHTML = response.updatedAt
        }

    }
    xhr.open('PATCH', 'https://reqres.in/api/users/2', true)
    xhr.send(data)
}

window.onload = method6();
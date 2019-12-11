<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tudo sobre HTTP - Bruno de Queirós </title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <header class="container-fluid">
            <div class="container">
                <h1> Tudo sobre o protocolo HTTP </h1>
                <span> Por Bruno Queirós </span>
            </div>
        </header>
        <section class="container">
            <div class="introducao col-md-12">
                <h2> Introdução </h2>
                <p>
                    Hypertext Transfer Protocol <code>HTTP</code> é um protocolo de camada de aplicação para transmissão de documentos hipermídia, como o HTML. Foi desenvolvido para comunicação entre navegadores web e servidores web, porém pode ser utilizado para outros propósitos também. É também um protocolo sem estado ou stateless protocol, que significa que o servidor não mantem nenhum dado entre duas requisições. Apesar de ser frequentemente baseado em uma camada <code>TCP/IP</code>, pode ser utilizado em qualquer camada de transporte confiável, ou seja, um protocolo que não perde mensagens silenciosamente como o <code>UDP</code>.
                </p>
            </div>
        </section>

        <section class="container content">
            <h2> Uma visão geral... </h2>
            <div class="row mb-3">
                <div class="col-12 col-md-3 p-2">
                    <p>
                        <code>HTTP</code> é um protocolo que permite a obtenção de recursos, tais como documentos HTML. É a base de qualquer troca de dados na Web e um protocolo cliente-servidor, o que significa que as requisições são iniciadas pelo destinatário, geralmente um navegador da Web.
                    </p>
                </div>

                <div class="col-12 col-md-3 p-0 p-2">
                    <p>
                        Clientes e servidores se comunicam trocando mensagens individuais (em oposição a um fluxo de dados). As mensagens enviadas pelo cliente, geralmente um navegador da Web, são chamadas de solicitações <code>(requests)</code>, ou também requisições, e as mensagens enviadas pelo servidor como resposta são chamadas de respostas <code>(responses)</code>.
                    </p>
                </div>

                <div class="col-12 col-md-3 p-0 p-2">
                    <p>
                        O HTTP é um protocolo <br><code>cliente-servidor</code>: as requisições são enviados por uma entidade, o agente-usuário (ou um proxy em nome dele). A maior parte do tempo, o agente-usuário é um navegador da Web, mas pode ser qualquer coisa, como por exemplo um robô que rastreia a Web para preencher e manter um índice de mecanismo de pesquisa.
                    </p>
                </div>

                <div class="col-12 col-md-3 p-0 p-2">
                    <p>
                        Na realidade, existem muitos outros computadores entre o navegador e o servidor que está tratando a requisição: existem roteadores, modems e muito mais. Graças ao modelo de camadas da Web <code>layers</code>, essas funcionalidades estão escondidas nas camadas de rede e transporte, respectivamente. O HTTP está no topo da camada de aplicação.
                    </p>
                </div>
            </div>
        </section>

        <section class="container content">
            <h2> Aspectos básicos do HTTP </h2>
            <div class="row mb-3">
                <div class="col-12 col-md-4 p-2">
                    <h3> HTTP é simples </h3>
                    <p>
                        Mesmo com mais complexidade introduzida no HTTP/2.0 por encapsular mensagens HTTP em quadros (frames), o HTTP foi projetado para ser simples e legível às pessoas. As mensagens HTTP podem ser lidas e entendidas por qualquer um, provendo uma maior facilidade para desenvolvimento e testes, e reduzir a complexidade para os estudantes.
                    </p>
                </div>

                <div class="col-12 col-md-4 p-0 p-2">
                    <h3> HTTP é extensível </h3>
                    <p>
                        Introduzidos no HTTP/1.0, os cabeçalhos HTTP fazem com que este protocolo seja fácil para estender e usá-lo para experimentos. Novas funcionalidades podem até ser introduzidas pelo simples acordo entre um cliente e um servidor sobre a nova semântica de um cabeçalho.
                    </p>
                </div>

                <div class="col-12 col-md-4 p-0 p-2">
                    <h3> HTTP não tem estados, mas tem sessões </h3>
                    <p>
                     HTTP é sem estado: não existe uma relação entre duas requisições sendo feitas através da mesma conexão. Isso traz um problema imediato para usuários que interagem com algumas páginas de forma coerente, por exemplo, usando um carrinho de compras de e-commerces*. Mas como o fundamento básico do HTTP é não manter estados, cookies HTTP permitem que as sessões tenham estados. Usando a extensibilidade dos cabeçalhos, os cookies são adicionados ao fluxo do HTTP, permitindo que a criação de sessão em cada requisição HTTP compartilhem o mesmo contexto, ou o mesmo estado.
                    </p>
                </div>
            </div>
        </section>

        <section class="container content">
            <h2> O que pode ser controlado pelo HTTP? </h2>
            <div class="row mb-3">
                <div class="col-12 col-md-4 p-2">
                    <h3> Cache </h3>
                    <p>
                        A forma como documentos são cacheados pode ser controlada pelo HTTP. O servidor pode instruir proxies, e clientes, ao que cachear e por quanto tempo. O cliente pode instruir proxies de cache intermediários a ignorar o documento armazenado.
                    </p>
                </div>

                <div class="col-12 col-md-4 p-0 p-2">
                    <h3> Autenticação </h3>
                    <p>
                        Algumas páginas podem ser protegidas para que apenas usuários específicos possam acessá-la. Autenticação básica pode ser provida pelo HTTP, usando tanto o cabeçalho WWW-Authenticate e similares, quanto configurando uma sessão específica usando cookies HTTP.
                    </p>
                </div>

                <div class="col-12 col-md-4 p-0 p-2">
                    <h3> Sessões </h3>
                    <p>
                        Usando os cookies HTTP, permite que você crie vincule às requisições o estado do servidor. Isso cria as sessões, apesar do protocolo HTTP básico não manter estado. Isso é útil não só para os carrinhos de compras de e-commerces, mas também para qualquer site que permita customização das respostas a nível de usuário.
                    </p>
                </div>
            </div>
        </section>

        <section class="container content">
            <h2> Fluxo HTTP </h2>
            <p>
                Quando o cliente quer comunicar com um servidor, este sendo um servidor final ou um proxy, ele realiza os seguintes passos:
            </p>
            <div class="row mb-3">
                <div class="col-12 col-md-3 p-2">
                    <h3> 1 </h3>
                    <p>
                        Abre uma conexão TCP: A conexão TCP será usada para enviar uma requisição, ou várias, e receber uma resposta. O cliente pode abrir uma nova conexão, reusar uma conexão existente, ou abrir várias conexões aos servidores.
                    </p>
                </div>

                <div class="col-12 col-md-3 p-0 p-2">
                    <h3> 2 </h3>
                    <p>
                        Envia uma mensagem HTTP: mensagens HTTP (antes do HTTP/2.0) são legíveis às pessoas. Com o HTTP/2.0, essas mensagens simples são encapsuladas dentro de quadros (frames), tornando-as impossíveis de ler diretamente, mas o princípio se mantém o mesmo.
                    </p>
                </div>

                <div class="col-12 col-md-3 p-0 p-2">
                    <h3> 3 </h3>
                    <p>
                        Lê a resposta do servidor
                    </p>
                </div>

                <div class="col-12 col-md-3 p-0 p-2">
                    <h3> 4 </h3>
                    <p>
                    Fecha ou reutiliza a conexão para requisições futuras.<br/><br/>
                    Se a linha de montagem (pipelining) estiver ativada, várias requisições podem ser enviadas sem que a primeira resposta seja totalmente recebida. A linha de montagem HTTP se provou difícil de ser implementada nas redes existentes, onde peças antigas de software coexistem com versões modernas. A linha de montagem HTTP tem sido substituída no HTTP/2.0 com multiplexação mais robusta de requisições dentro de um quadro (frame).
                    </p>
                </div>
            </div>
        </section>
        <a href="api-rest.php">
            <section class="container-fluid link-api">
                <p> Veja os exemplos usando o resreq.in como API REST. </p>
            </section>
        </a>
    </main>
</body>
</html>
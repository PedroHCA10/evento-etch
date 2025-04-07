<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento ETech 2026 - Inovação em Tecnologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong>ETech 2026</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#palestrantes">Palestrantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#local">Local</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">ETech 2026</h1>
            <p class="lead">O maior evento de tecnologia da América Latina</p>
            <div class="mt-4">
                <span class="badge bg-secondary p-2">15-17 de Outubro de 2026</span>
                <span class="badge bg-success p-2 mx-2">São Paulo - SP</span>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <section id="sobre" class="mb-5">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="mb-4">Sobre o Evento</h2>
                    <p class="lead">O ETech 2026 reunirá os maiores especialistas em tecnologia, inovação e empreendedorismo para discutir as tendências que moldarão o futuro.</p>
                    <p>Com palestras, workshops e oportunidades de networking, o ETech 2026 é o lugar perfeito para profissionais, estudantes e entusiastas de tecnologia se conectarem e aprenderem com os melhores.</p>
                </div>
            </div>
        </section>

        <section id="palestrantes" class="mb-5 py-4 bg-light rounded">
            <div class="container">
                <h2 class="text-center mb-4">Nossos Palestrantes</h2>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <ul class="list-group">
                            <?php
                            $palestrantes = [
                                ['nome' => 'Dr. Ana Silva', 'confirmado' => true],
                                ['nome' => 'Prof. Carlos Mendes', 'confirmado' => true],
                                ['nome' => 'Dra. Juliana Costa', 'confirmado' => false],
                                ['nome' => 'Eng. Marcelo Torres', 'confirmado' => true],
                                ['nome' => 'Dra. Patricia Lima', 'confirmado' => false],
                                ['nome' => 'Dr. Roberto Almeida', 'confirmado' => true],
                            ];

                            foreach ($palestrantes as $palestrante) {
                                echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                                echo $palestrante['nome'];
                                if (!$palestrante['confirmado']) {
                                    echo '<span class="badge bg-warning text-dark">Em Breve!</span>';
                                } else {
                                    echo '<span class="badge bg-success">Confirmado</span>';
                                }
                                echo '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="local" class="mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Local do Evento</h2>
                    <p><strong>Centro de Convenções Expo SP</strong></p>
                    <p>Av. Olavo Fontoura, 1209 - Santana, São Paulo - SP</p>
                    <p>Capacidade para 5.000 participantes</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-primary">Como chegar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.890535461139!2d-46.627634924687!3d-23.53509257881425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5896e6c149ff%3A0x1d0e5e3b6e7a4f2e!2sCentro%20de%20Conven%C3%A7%C3%B5es%20Expo%20SP!5e0!3m2!1spt-BR!2sbr!4v1712345678901" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>ETech 2026</h5>
                    <p>O futuro da tecnologia em um só lugar.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-1">pedro.eventos@etech2026.com.br</p>
                    <p class="mb-0">+55 35 98841-4923</p>
                </div>
            </div>
            <hr class="my-3">
            <div class="text-center text-muted">
                <small>&copy; 2026 ETech. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@extends('layouts.app')

@section('title', 'Noticias')

@section('content')
<div class="container mt-5">
    <!-- 1. Encabezado -->
    <h1 class="text-center mb-4">📰  Noticias para ti</h1>
    <p class="text-center text-muted">Mantente informado con las noticias más recientes y relevantes de diferentes categorías.</p>

    <!-- 2. Grid de noticias -->
    <div class="row">
        <!-- Noticia 1 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?technology" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">Cómo entender tus emociones</h5>
                    <p class="card-text text-muted short-text">Identificar lo que sientes es el primer paso para gestionar tu bienestar emocional.</p>
                    <p class="card-text text-muted full-text d-none">La psicología emocional enseña que nombrar tus emociones (como tristeza, enojo o frustración) te ayuda a procesarlas y expresarlas de forma 
                        saludable. Esto reduce el estrés, mejora tus relaciones y fortalece tu bienestar general.</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 2 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?sports" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">Mitos sobre la salud mental</h5>
                    <p class="card-text text-muted short-text">Aún existen creencias erróneas que afectan el cuidado emocional de los jóvenes.</p>
                    <p class="card-text text-muted full-text d-none">Mitos como “solo los locos van al psicólogo” o “la ansiedad es solo nerviosismo” siguen generando estigmas. La salud
                         mental es real, importante y merece la misma atención que la salud física.

</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 3 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?thinking,self-reflection" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title"> La autoestima en la adolescencia</h5>
                    <p class="card-text text-muted short-text">La autoestima influye en cómo te relacionas contigo mismo y con los demás.</p>
                    <p class="card-text text-muted full-text d-none">Durante la adolescencia, la autoestima puede fluctuar por cambios físicos, sociales y emocionales. Fortalecerla 
                        implica autoconocimiento, autocompasión y rodearte de personas que te valoran por quien eres.</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 4 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?art" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">Estrategias para manejar el estrés</h5>
                    <p class="card-text text-muted short-text">El estrés es común, pero puede controlarse con herramientas adecuadas.</p>
                    <p class="card-text text-muted full-text d-none">Respiración consciente, organización del tiempo, actividad física y pausas activas son técnicas útiles para disminuir el estrés diario. La clave es identificar lo que te sobrecarga y actuar con responsabilidad emocional.

</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 5 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?science" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">Cómo afrontar la ansiedad</h5>
                    <p class="card-text text-muted short-text">La ansiedad puede controlarse con hábitos saludables y acompañamiento profesional.</p>
                    <p class="card-text text-muted full-text d-none">La ansiedad es una reacción normal ante situaciones de incertidumbre, pero cuando se vuelve constante, afecta la calidad de vida. Técnicas
                         como la respiración profunda, el mindfulness y la terapia cognitiva pueden ayudarte a recuperar el equilibrio emocional.</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 6 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?health" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">: El poder del autocuidado emocional</h5>
                    <p class="card-text text-muted short-text">Cuidar de tus emociones es tan importante como cuidar tu cuerpo.</p>
                    <p class="card-text text-muted full-text d-none">El autocuidado emocional incluye darte espacio para sentir, poner límites, descansar, buscar apoyo  
                        y reconocer tus necesidades internas. No se trata de egoísmo, sino de salud mental y amor propio.</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 7 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?travel" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">Cómo fortalecer tu resiliencia</h5>
                    <p class="card-text text-muted short-text">La resiliencia te permite superar momentos difíciles y salir fortalecido.</p>
                    <p class="card-text text-muted full-text d-none">Ser resiliente no significa evitar el dolor, sino aprender de él. Desarrollarla implica aceptar lo que no puedes controlar, 
                        mantener una actitud flexible y enfocarte en tus recursos internos y externos para salir adelante.</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 8 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?education" class="card-img-top" alt="    🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">Redes sociales y salud mental</h5>
                    <p class="card-text text-muted short-text">El uso excesivo de redes puede afectar tu autoestima y bienestar.</p>
                    <p class="card-text text-muted full-text d-none">Compararte constantemente con los demás en redes sociales puede generar inseguridad, ansiedad o tristeza. Es importante poner límites, seguir cuentas positivas y recordar que lo que ves en línea no siempre refleja la realidad.

</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>

        <!-- Noticia 9 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://source.unsplash.com/350x200/?environment" class="card-img-top" alt="🧠 Psicología">
                <div class="card-body">
                    <h5 class="card-title">El impacto del diálogo interior</h5>
                    <p class="card-text text-muted short-text">La forma en que te hablas a ti mismo influye en tu salud mental.</p>
                    <p class="card-text text-muted full-text d-none">Un diálogo interior negativo puede sabotear tu autoestima y bienestar. Practicar la autocompasión, hablarte con respeto y cambiar frases críticas por afirmaciones realistas puede transformar tu manera de pensar y sentir.

</p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-sm toggle-text">Leer más</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Botón para actualizar noticias -->
    <div class="text-center mt-4">
        <button id="refresh-news" class="btn btn-outline-primary">Actualizar Noticias</button>
    </div>
</div>

<!-- 5. Script para activar los botones de "Leer más" -->
<script>
    // Funcionalidad para alternar entre texto corto y texto completo
    document.querySelectorAll('.toggle-text').forEach(button => {
        button.addEventListener('click', function () {
            const cardBody = this.closest('.card').querySelector('.card-body');
            const shortText = cardBody.querySelector('.short-text');
            const fullText = cardBody.querySelector('.full-text');

            if (fullText.classList.contains('d-none')) {
                fullText.classList.remove('d-none');
                shortText.classList.add('d-none');
                this.textContent = 'Leer menos';
            } else {
                fullText.classList.add('d-none');
                shortText.classList.remove('d-none');
                this.textContent = 'Leer más';
            }
        });
    });

    // Funcionalidad para actualizar noticias
    document.getElementById('refresh-news').addEventListener('click', function () {
        fetch("{{ route('noticias.index') }}")
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newContent = doc.querySelector('.row').innerHTML;
                document.querySelector('.row').innerHTML = newContent;

                // Reactivar los botones "Leer más" después de actualizar
                document.querySelectorAll('.toggle-text').forEach(button => {
                    button.addEventListener('click', function () {
                        const cardBody = this.closest('.card').querySelector('.card-body');
                        const shortText = cardBody.querySelector('.short-text');
                        const fullText = cardBody.querySelector('.full-text');

                        if (fullText.classList.contains('d-none')) {
                            fullText.classList.remove('d-none');
                            shortText.classList.add('d-none');
                            this.textContent = 'Leer menos';
                        } else {
                            fullText.classList.add('d-none');
                            shortText.classList.remove('d-none');
                            this.textContent = 'Leer más';
                        }
                    });
                });
            })
            .catch(error => console.error('Error al actualizar las noticias:', error));
    });
</script>
@endsection
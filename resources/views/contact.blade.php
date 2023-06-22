@extends('template')

@section('title', 'Contacta con nosotros')

@section('content')
<div class="d-flex justify-content-center mt-5 pt-4 mb-3" style="background-color: rgb(255, 255, 255); ">
    <div class="col-sm-6 mb-5 pb-5 pt-5">
        <h2 class="mt-3" style="color: rgb(230, 29, 29)"><b>Contacta con nosotros</b></h2>
        <form method="POST" action="{{ route('contact.store') }}" class="needs-validation" novalidate>

            @csrf
            <input type="hidden" name="action" value="contact">
            <div class="mb-3">
                <label for="name" class="form-label" style="color: rgb(224, 45, 45);">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required/>
                <div class="invalid-feedback">
                    El nombre es obligatorio.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color: rgb(194, 29, 29);">Email</label>
                <input type="email" class="form-control" id="email" name="email" required/>
                <div class="invalid-feedback">
                    El correo electrónico es obligatorio.
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label" style="color: rgb(153, 15, 15);">Cómo podemos ayudarte.</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
                <div class="invalid-feedback">
                    El mensaje es obligatorio.
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="privacy" required>
                <label class="form-check-label" for="privacy" style="color: rgb(207, 24, 24);">Acepto la política de privacidad</label>
                <div class="invalid-feedback">
                    Debes aceptar la política de privacidad.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-warning mx-auto">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>


<style>
    .card-body {
        color: white;
    }
</style>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
@endsection

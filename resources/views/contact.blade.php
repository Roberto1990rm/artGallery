@extends('layouts.app')

@section('title', 'Contacta con nosotros')

@section('content')
<div class=" col-9 d-flex justify-content-center mt-2 pt-2 mb-3" style="background-color: rgb(255, 255, 255); padding: 5px;">
    <div class="col-12 mb-5 pb-5 pt-2">
        <h2 class="mt-3" style="color: rgb(0, 0, 0); margin-bottom:40px; text-align: center;"><b>Contacta con nosotros</b></h2>
        <form method="POST" action="{{ route('contact.storeContact') }}">

            @csrf
            <input type="hidden" name="action" value="contact">
            <div class="mb-3">
                <label for="name" class="form-label" style="color: rgb(0, 0, 0);">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required/>
                <div class="invalid-feedback">
                    El nombre es obligatorio.
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color: rgb(3, 1, 1);">Email</label>
                <input type="email" class="form-control" id="email" name="email" required/>
                <div class="invalid-feedback">
                    El correo electrónico es obligatorio.
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label" style="color: rgb(8, 3, 3);">Cómo podemos ayudarte.</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
                <div class="invalid-feedback">
                    El mensaje es obligatorio.
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="privacy" required>
                <label class="form-check-label" for="privacy" style="color: rgb(10, 8, 8);">Acepto la política de privacidad</label>
                <div class="invalid-feedback">
                    Debes aceptar la política de privacidad.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 text-center" style="margin-top: 30px;">
                    <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
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

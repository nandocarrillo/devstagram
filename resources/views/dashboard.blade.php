@extends('layouts.app')

@section('titulo')
    Tu Cuenta
@endsection

@section('contenido')

    <div class="flex justify-center">
        <div class="w-full sm:w-8/12 md:w-6/12 sm:flex">
            <div class="sm:w-8/12 md:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>

@endsection
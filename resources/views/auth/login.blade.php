@extends('layouts.app')

@section('titulo')
    Inicia sesión en DevStagram
@endsection    

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/login.jpg')}}" alt="imagen login usuarios">
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form  novalidate>
            @csrf
          
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    email
                </label>
                <input 
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Tu email de registro"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 #
                    @enderror"
                    value ="{{ old('email')}}"
                >
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-center p-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    password
                </label>
                <input 
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Password de registro"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 #
                    @enderror"
                    value ="{{ old('password')}}"
                >
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-center p-2">{{ $message }}</p>
                @enderror
            </div>
           
            <input 
                type="submit"
                value="Iniciar Sesión"
                class="bg-sky-600 hover:bg-sky-700 transsition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>

</div>

@endsection
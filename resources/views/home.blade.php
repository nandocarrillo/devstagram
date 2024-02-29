@extends('layouts.app')

@section('titulo')
    página principal
@endsection

@section('contenido')
<x-listar-post :posts="$posts"/>
@endsection
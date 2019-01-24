@extends('panel.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            ¡Bienvenido!
        </div>
    </div>
    @if (Auth::check())
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>
                        Nombre
                    </th>
                    <td>
                        {{ Auth::user()->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Correo
                    </th>
                    <td>
                        {{ Auth::user()->email }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="{{ route('panel.user.logout') }}">Cerrar sesión</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @endif
</div>
@endsection

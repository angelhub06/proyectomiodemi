@extends('layouts.app')

@section('content')

<div class="detail-container">

    <div class="detail-card">

        <img class="detail-img" src="{{ asset('img/' . $imagen) }}" alt="imagen">

        <div class="detail-info">



            <div>
                <h3>Comentarios</h3>

                <form method="POST" action="{{ route('comentarios.store') }}">
                    @csrf
                    <input type="hidden" name="imagen" value="{{ $imagen }}">

                    <input type="text" name="contenido" placeholder="Escribe un comentario" required>

                    <button type="submit" class="save-btn">Comentar</button>
                </form>

                @foreach($comentarios as $comentario)
                    <div style="margin-top:10px; background:#eee; padding:10px; border-radius:10px;">
                        
                        <p>{{ $comentario->contenido }}</p>

                        <form method="POST" action="{{ route('comentarios.delete', $comentario->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:red;color:white;border:none;padding:5px 10px;border-radius:8px;">
                                Eliminar
                            </button>
                        </form>

                        <button onclick="toggleEdit({{ $comentario->id }})" 
                                style="background:blue;color:white;border:none;padding:5px 10px;border-radius:8px;">
                            Editar
                        </button>

                        <form id="edit-{{ $comentario->id }}" 
                              method="POST" 
                              action="{{ route('comentarios.update', $comentario->id) }}" 
                              style="display:none; margin-top:10px;">
                            
                            @csrf
                            @method('PUT')

                            <input type="text" name="contenido" value="{{ $comentario->contenido }}" required>

                            <button type="submit" class="save-btn">Guardar</button>
                        </form>

                    </div>
                @endforeach

            </div>

        </div>

    </div>

    <div class="side-gallery">

        <div class="side-card">
            <img src="{{ asset('img/ssj.jpg') }}">
        </div>

        <div class="side-card">
            <img src="{{ asset('img/mono.jpg') }}">
        </div>

    </div>

</div>

<!-- SCRIPT -->
<script>
function toggleEdit(id) {
    let form = document.getElementById('edit-' + id);
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
}
</script>

@endsection
<div class="input-field">
    <label>Titulo</label>
    <input type="text" name="titulo" value="{{@isset($registro->titulo) ? $registro->titulo : ''}}"/>
    
</div>

<div class="input-field">
    <label>Descrição</label>
    <input type="text" name="descricao" value="{{@isset($registro->descricao) ? $registro->descricao : ''}}"/>
    
</div>

<div class="input-field">
    <label>Valor</label>
    <input type="text" name="valor" value="{{@isset($registro->valor) ? $registro->valor : ''}}"/>    
</div>

<div class="file-field input-field">
    
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>   
</div>

@if (isset($registro->imagem))
    <div class=" input-field">
        <img src="{{ asset($registro->imagem) }}" alt="{{$registro->titulo}}">
    </div>    
@endif

<div class=" input-field">
    <p>
        <input type="checkbox" id="tests" name="publicado" {{ isset($registro->pulicado) && $registro->pulicado == 'sim' ? 'checked' : ''}} value="true" />
        <label for="tests">Publicar?</label>
    </p>
    <br><br>
</div>
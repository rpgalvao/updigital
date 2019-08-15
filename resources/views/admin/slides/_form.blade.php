@if(isset($registro->imagem))
    <div class="input-field">
        <input type="text" name="titulo" class="validate" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
        <label>Título da Imagem</label>
    </div>
    <div class="input-field">
        <input type="text" name="descricao" class="validate" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
        <label>Descrição da Imagem</label>
    </div>
    <div class="input-field">
        <input type="text" name="link" class="validate" value="{{isset($registro->link) ? $registro->link : ''}}">
        <label>Link</label>
    </div>
    <div class="input-field">
        <input type="text" name="ordem" class="validate" value="{{isset($registro->ordem) ? $registro->ordem : ''}}">
        <label>Ordem das Imagens</label>
    </div>
    <div class="input-field">
        <select name="publicado">
            <option value="nao" {{isset($registro->publicado) && $registro->publicado == 'nao' ? 'selected' : ''}}>Não</option>
            <option value="sim" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'selected' : ''}}>Sim</option>
        </select>
        <label>Publicar?</label>
    </div>
    <div class="row">
        <div class="file-field input-field col m6 s12">
            <div class="btn blue-grey">
                <span>Imagem do Imóvel</span>
                <input type="file" name="imagem">
            </div>
            <div class="file-path-wrapper">
                <input type="text" class="file-path validate">
            </div>
        </div>
        <div class="col m6 s12">
            <img width="150" src="{{asset($registro->imagem)}}">
        </div>
    </div>
@else
    <div class="row">
        <div class="file-field input-field col m12 s12">
            <div class="btn blue-grey">
                <span>Imagens do Imóvel</span>
                <input type="file" multiple name="imagens[]">
            </div>
            <div class="file-path-wrapper">
                <input type="text" class="file-path validate">
            </div>
        </div>
    </div>
@endif
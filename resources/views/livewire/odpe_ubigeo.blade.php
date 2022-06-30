<div>
    <div class="col-md-6">
        <label>Odpe</label>
        <select class="form-control" wire:model="odpe">
            <option value="">Seleccione un Odpe</option>
            @foreach($odpes as $odpe)
                <option value="{{$odpe->id}}">{{$odpe->nombre_odpe}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 mt-2">
        <label>Odpe</label>
        <select class="form-control" wire:model="ubigeo">
            @if($ubigeos->count()==0)
                <option value="">Seleccione una Odpe</option>
            @endif
            @foreach($ubigeos as $ubigeo)
                <option value="{{$ubigeo->id}}">{{$ubigeo->cod_ubigeo}}</option>
            @endforeach
        </select>
    </div>
</div>

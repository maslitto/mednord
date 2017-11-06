<hr>
<div class="well">
    <h2>Блок характеристик</h2>
    <div id="list">
        @if($model->params)
            @foreach($model->params as $param)
            <div class="var_area02 row" style="margin-top:20px">
                <label  class="col-sm-2">Характеристика</label>
                <div class="col-sm-2">
                    <input value="{{$param['name']}}" id="params_0_name" data-id-format="params_%d_name" data-name-format="params[%d][name]" name="params[0][name]" type="text" class="form-control"></input>
                </div>
                <label for="params_0_value" data-id-format="params_%d_value" class="col-sm-1">Значение</label>
                <div class="col-sm-2">
                    <input value="{{$param['value']}}" id="params_0_value" data-id-format="params_%d_value" data-name-format="params[%d][value]" name="params[0][value]" type="text" class="form-control"></input>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="del_button02 btn btn-danger"><i class="fa fa-remove"></i></button>
                </div>
                <br>
                <div class="clearfix"></div>
            </div>
            @endforeach
        @else
            <div class="var_area02 row" style="margin-top:20px">
                <label  class="col-sm-2">Характеристика</label>
                <div class="col-sm-2">
                    <input value="" id="params_0_name" data-id-format="params_%d_name" data-name-format="params[%d][name]" name="params[0][name]" type="text" class="form-control"></input>
                </div>
                <label for="params_0_value" data-id-format="params_%d_value" class="col-sm-1">Значение</label>
                <div class="col-sm-2">
                    <input value="" id="params_0_value" data-id-format="params_%d_value" data-name-format="params[%d][value]" name="params[0][value]" type="text" class="form-control"></input>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="del_button02 btn btn-danger"><i class="fa fa-remove"></i></button>
                </div>
                <br>
                <div class="clearfix"></div>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-12">
            <br>
            <button type="button" value="Add" class="add_button02 btn btn-success"><i class="fa fa-plus"></i> Добавить характеристику</button>
        </div>
    </div>
</div>

<hr>

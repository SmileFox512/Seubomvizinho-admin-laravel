@inject('util', 'App\Util')
@inject('lang', 'App\Lang')

<div class="col-md-12 " style="margin-bottom: 0px">
    <div class="col-md-4 form-control-label" style="margin-bottom: 0px">
        <label for="name"><h4>{{$label}}
                @if ($request == "true")
                    <span class="col-red">*</span>
                @endif
            </h4></label>
    </div>
    <div class="col-md-8" style="margin-bottom: 0px">
        <div class="form-group form-group-lg" style="margin-bottom: 0px">
            <div class="form-line" >
                <select name="{{$id}}" id="{{$id}}" class="form-control show-tick" onchange="{{$onchange}};" >
                    @if ($noitem == "true")
                        <option value="0" style="font-size: 16px  !important;">{{$lang->get(114)}}</option>  {{--No--}}
                    @endif
                    @foreach($util->getNutritions() as $key => $data)
                        <option value="{{$data->id}}" style="font-size: 16px  !important;">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

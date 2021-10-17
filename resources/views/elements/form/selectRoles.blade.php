@inject('util', 'App\Util')

<div class="col-md-12 " style="margin-bottom: 0px">
    <div class="col-md-4 form-control-label" style="margin-bottom: 0px">
        <label for="name"><h4>{{$label}}
                @if ($request == "true")
                    <span class="col-red">*</span>
                @endif
            </h4></label>
    </div>
    <div class="col-md-8" style="margin-bottom: 0px">
        <div class="form-group form-group-lg" style="margin-bottom: 10px">
            <div class="form-line" >
                <select name="{{$id}}" id="{{$id}}" class="form-control show-tick" onchange="{{$onchange}};" >
                    @foreach($util->getRoles() as $key => $dataroles)
                        <option value="{{$dataroles->id}}" style="font-size: 16px  !important;">{{$dataroles->role}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
<x-admin-layout>
    <style>
        .the-legend {
        border-style: none;
        border-width: 0;
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 0;
        width: auto;
        padding: 0 10px;
        border: 1px solid #e0e0e0;
        }
        .the-fieldset {
            border: 1px solid #e0e0e0;
            padding: 10px;
        }
    </style>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Settings</h5>
                </div>

                <div class="ba_flex align_items_center">
                </div>
            </div>
            &nbsp;
        
            <form method="post" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <fieldset class="the-fieldset">
                        <legend class="the-legend">Groae In Numbers Section</legend>
                        <!--<div class="row"> --> 
                            
                            <!--<input type="hidden" value="2" name="groae_number[1][id]">
                            <input type="hidden" value="groae_number" name="groae_number[1][section_key]">

                            <input type="hidden" value="3" name="groae_number[2][id]">
                            <input type="hidden" value="groae_number" name="groae_number[2][section_key]"> -->
                            @php $ar = array(1,2,3);  $i = 1; @endphp
                            @if(count($groae_number) > 0) 
                                @foreach($groae_number as $key=>$groae_num_data)
                                <div class="row  ">
                                    <input type="hidden" name="groae_number[{{$key}}][id]" value="{{$groae_num_data->id}}">
                                    <input type="hidden" name="groae_number[{{$key}}][section_key]" value="{{$groae_num_data->section_key}}">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="text_1">Title {{$i}}</label>
                                            <input  type="text" name="groae_number[{{$key}}][title]" value="{{$groae_num_data->title}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="number_1">Number {{$i}}</label>
                                            <input type="text" name="groae_number[{{$key}}][value]" value="{{$groae_num_data->value}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                @php $i++ @endphp
                                @endforeach
                            @else
                            @foreach($ar as $key=>$value)
                                <div class="row">
                                    <input type="hidden" name="groae_number[{{$key}}][id]" value="{{$value}}">
                                    <input type="hidden" name="groae_number[{{$key}}][section_key]" value="groae_number">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="text_1">Text {{$i}}</label>
                                            <input  type="text" name="groae_number[{{$key}}][title]" value="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="number_1">Number {{$i}}</label>
                                            <input type="text" name="groae_number[{{$key}}][value]" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                @php $i++ @endphp
                            @endforeach
                            @endif
                    </fieldset>
                </div>
                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>

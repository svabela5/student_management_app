<div class="row">
    <div class="col-sm-6"></div>

    <div class="col-sm-6">
        <select id="collegeIdFilter" class="form-control" style="margin-top: 10px;">
            @foreach($colleges as $id=>$name)
                <option {{$id == request('college_id') ? 'selected' : ''}} value="{{ $id }}">{{$name}}</option>
            @endforeach
        </select>
    </div>
</div>
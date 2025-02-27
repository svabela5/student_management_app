<div class="modal-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">

                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{old('dob')}}">

                @error('dob')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>College</label>
                <select name="college_id" id="college_id" class="form-control @error('college_id') is-invalid @enderror">
                    @foreach($colleges as $id=>$name)
                        <option {{$id == '' ? 'disabled' : ''}} {{ $id == old('college_id') ? 'selected' : '' }} value="{{ $id }}">{{$name}}</option>
                    @endforeach
                </select>

                @error('college_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>